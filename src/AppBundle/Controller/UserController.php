<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
class UserController extends Controller
{
    /**
     * @Route("/registration", name="registration")
     */
    public function addAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        if ($request->isMethod("POST"))
        {
            $form->handleRequest($request);

            $plainPassword = $user->getPlainPassword();
            $user->setPlainPassword("");
            $password = $this->get("security.password_encoder")->encodePassword($user, $plainPassword);
            $user->setPassword($password);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute("main");
        }

        return $return = $this->render('default/registration.html.twig',
            [
                'form' => $form->createView()
            ]);




    }
}