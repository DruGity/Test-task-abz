<?php
namespace AppBundle\DataFixtures\ORM;



use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadPeople extends Fixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 2;
    }

    /**
     * @var ContainerInterface
     */

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        set_time_limit(6000);
        ini_set("memory_limit", -1);//иначе не зватало памяти =(
        $em = $this->container->get("doctrine.orm.entity_manager");
        $count = 50001; //количество загружаемых записей в БД
        $i = 1;
        $workers = $em->getRepository("AppBundle:Worker")->findAll();

        foreach ($workers as $worker){
            //расчет количества пользователей в иерархии
            (int)$second = 1+($count-1)/33; //1ая иерархия
            (int)$third = ($count-1)*2/33;//2ая иерархия
            (int)$fourth = ($count-1)*6/33; //3я иерархия
            (int)$fifth = ($count-1)*24/33; // 5ая иерархия

            //назначение начальников пользователям(+ определение допустимых начальников)
            if($i == 1)
            {
                $worker->setDirector(null); //первый сотрудник - директор у которого выше никого нет
            }
            elseif ($i <= $second)
            {
                $director1 = $em->getRepository("AppBundle:Director")->find(1); //все кто под директором(вторая иерархия)
                $worker->setDirector($director1);

            }
            elseif ($i >= $second && $i<=($second+$third))
            {
                $director2 = $em->getRepository("AppBundle:Director")->find(mt_rand(2, $second)); // третья иерархия
                $worker->setDirector($director2);

            }
            elseif ($i > ($second+$third) && $i<=($third+$fourth+$second))
            {
                $director3 = $em->getRepository("AppBundle:Director")->find(mt_rand($second+1, $second+$third)); // четверая иерархия
                $worker->setDirector($director3);

            }
            elseif ($i > ($second+$third+$fourth) && $i<=($third+$fourth+$second+$fifth))
            {
                $director4 = $em->getRepository("AppBundle:Director")->find(mt_rand(($third+$second+1), ($second+$third+$fourth))); // пятая иерархия
                $worker->setDirector($director4);

            }

            $manager->persist($worker);
            $i++;
        }


        $manager->flush();
    }
    public function getRandomName()
    {
        $workerNames = [
            'Александр',
            'Евгений',
            'Алексей',
            'Олег',
            'Юрий',
            'Петр',
            'Дмитрий',
            'Максим',
            'Богдан'
        ];

        $workerName = $workerNames[array_rand($workerNames)];
        return $workerName;
    }
    public function getRandomSurname()
    {
        $workerSurnames = [
            'Вандрович',
            'Колотий',
            'Чудак',
            'Михайлов',
            'Иванов',
            'Чендриков',
            'Путий',
            'Колгосов',
            'Арабий'
        ];

        $workerSurname = $workerSurnames[array_rand($workerSurnames)];
        return $workerSurname;
    }
    public function getRandomThirdName()
    {
        $workerThirdNames = [
            'Олегович',
            'Михайлович',
            'Алексеевич',
            'Иванов',
            'Александрович',
            'Владиславович',
            'Валентинович',
            'Юриевич',
            'Богданович'
        ];

        $workerThirdName = $workerThirdNames[array_rand($workerThirdNames)];
        return $workerThirdName;
    }
    public function getRandomPosition()
    {
        $workerPositions = [
            'Senior programmer',
            'Manager',
            'Junior Programmer',
            'Middle Programmer',
            'Tech Lead',
            'Director',
            'Trainee'
        ];

        $workerPosition = $workerPositions[array_rand($workerPositions)];
        return $workerPosition;
    }


}