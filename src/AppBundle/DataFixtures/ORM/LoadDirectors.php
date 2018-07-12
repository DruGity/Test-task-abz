<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use AppBundle\Entity\Director;
use AppBundle\Entity\Worker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadDirectors extends Fixture implements ContainerAwareInterface, OrderedFixtureInterface
{

    private $container;

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 1;
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
        for ($i = 1; $i < $count; $i++) {
            //заполняем поля рандомными значениями
            $randomName = $this->getRandomName();
            $randomSurname = $this->getRandomSurname();
            $randomThirdName = $this->getRandomThirdName();
            $randomPosition = $this->getRandomPosition();
            $randomSalary = mt_rand(400, 5000);
            $worker = new Worker();
            $director = new Director();

            $worker->setName($randomName);
            $director->setName($randomName);
            $worker->setSecondName($randomSurname);
            $director->setSecondName($randomSurname);
            $worker->setThirdName($randomThirdName);
            $director->setThirdName($randomThirdName);
            $worker->setSalary($randomSalary);
            $director->setSalary($randomSalary);
            $worker->setPosition($randomPosition);
            $director->setPosition($randomPosition);
            $worker->setDirector($director);

            $manager->persist($worker);
            $manager->persist($director);

        }
        //$manager->flush();


        //для загрузки пользователя
        //login:admin   pass:admin
       /* if(!$users = $em->getRepository("AppBundle:User")->findAll())
        {
            $user = new User();
            $user->setUsername('admin');
            $user->setPassword('$2y$13$zSt3Kzft0yif.ospf.tSx.b0gcq0by3pLhvbG3cX.KpRrQE0sF9iK');//123
            $manager->persist($user);
            $manager->flush();
        }*/
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