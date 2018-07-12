<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Worker;
use AppBundle\Entity\Director;
use AppBundle\Form\WorkerType;






class MainController extends Controller
{
    /**
     * @Route("/", name="main")
     */
    public function indexAction()
    {
        $return = $this->render('default/main.html.twig');
        return new Response($return);
    }

    /**
     * @Route("/authorized/workers/", name="list")
     */
    public function showWorkersListAction(Request $request)
    {

        $em =$this->getDoctrine()->getManager();

            $dql = "SELECT w FROM AppBundle:Worker w";
            $query = $em->createQuery($dql);

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');

        $workers = $paginator->paginate(
            $query,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',10)
        );


        return $this->render('default/workers-list.html.twig',
            [
                'workers' => $workers
            ]);

    }

    /**
     * @Route("/authorized/search/", name="search")
     */
    public function searchWorkersListAction(Request $request)
    {
        $search = $request->get("search", "");
        $dql = 'select w from AppBundle:Worker w where 
              w.name like :search or
              w.secondName like :search or
              w.thirdName like :search or
              w.position like :search or
              w.salary like :search';

        $query = $this->getDoctrine()->getManager()->createQuery($dql)->setParameter('search', "%" . $search . "%")->getResult();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');

        $workers = $paginator->paginate(
            $query,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',10)
        );

        return $this->render('default/search.html.twig',
            [
                'workers' => $workers
            ]);

    }

    /**
     * @Route("/authorized/edit/{id}", name="edit_worker")
     */
    public function editAction(Request $request, $id)
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, '404!');
        $worker = $this->getDoctrine()->getRepository("AppBundle:Worker")->find($id);

        $form = $this->createForm(WorkerType::class, $worker);
        $existingFile = $worker->getImage();

        /******************************************/
        if ($request->isMethod("POST"))
        {
            $form->handleRequest($request);

            if ($form->isSubmitted())
            {
                /**
                 * @var UploadedFile $file
                 */
                $file = $worker->getImage();
                if($file != null)
                {
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();
                    $file->move(
                        $this->getParameter('image_directory'),$fileName
                    );
                    $worker->setImage($fileName);
                }
                else
                {
                    $worker->setImage($existingFile);
                }

                $manager = $this->getDoctrine()->getManager();
                $manager->persist($worker);
                $manager->flush();

                return $this->redirectToRoute("list");
            }
        }
        /******************************************/

        return $return = $this->render('crud/edit.html.twig',
            [
                "form" => $form->createView(),
                "worker" => $worker
            ]);

    }

    /**
     * @Route("/authorized/delete/{id}", name="delete_worker")
     */
    public function deleteAction($id)
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, '404!');
        $manager = $this->getDoctrine()->getManager();
        $worker = $this->getDoctrine()->getRepository("AppBundle:Worker")->find($id);
        $image = $worker->getImage();
        if($image != null)
        {
            $path = $this->getParameter('image_directory').'/'.$image;
            unlink($path);
        }

        $manager->remove($worker);
        $manager->flush();


        return $this->redirectToRoute("list");
    }

    /**
     * @Route("/authorized/add", name="add_worker")
     */
    public function addAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, '404!');
        $worker = new Worker();
        $form = $this->createForm(WorkerType::class, $worker);

        if ($request->isMethod("POST"))
        {

            $form->handleRequest($request);

            if ($form->isSubmitted() )
            {
                /**
                 * @var UploadedFile $file
                 */
                $file = $worker->getImage();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                  $this->getParameter('image_directory'),$fileName
                );
                $worker->setImage($fileName);

                $manager = $this->getDoctrine()->getManager();
                $manager->persist($worker);
                $manager->flush();

                return $this->redirectToRoute("list");
            }
        }

        return $return = $this->render('crud/add.html.twig',
            [
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/ajax/workers/{id}", name="ajax_worker")
     */
    public function ajaxAction($id)
    {
        if($id == 0)
        {
            $workers = $this->getDoctrine()->getRepository(Worker::class )->findBy(array(),null,1,0);//изначальная загрузка главного начальника
        }
        else
        {
            $director = $this->getDoctrine()->getRepository(Director::class )->find($id);//загрузка подопечных начальника
            $workers = $director->getWorker();
        }

        $serializer = $this->container->get('jms_serializer');
        $workers = $serializer->toArray($workers);

        foreach($workers as $key => &$item)
        {
            $item['text'] = $item['second_name']." ";
            $item['text'] .= $item['name']." ";
            $item['text'] .= $item['third_name']." - ";
            $item['text'] .= $item['position']." (";
            $item['text'] .= $item['salary']."$)";



            $itemsByReference[$item['id']] = &$item;
            if(!empty($workers))
            {
                $itemsByReference[$item['id']]['children'] = true;
            }
        }

        return new JsonResponse($workers);
    }

}