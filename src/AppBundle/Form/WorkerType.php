<?php

namespace AppBundle\Form;

use AppBundle\Repository\DirectorRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WorkerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Имя'
            ])
            ->add('secondName', TextareaType::class, [
                "label" => 'Фамилия'
            ])
            ->add('thirdName', TextareaType::class, [
                'label' => "Отчество"
            ])
            ->add('salary', MoneyType::class, [
                'label' => "Зарплата ",
                'currency' => 'USD'
            ])
            ->add('date_start_work', DateType::class, [
                'label' => "Дата начала работы"
            ])
            ->add('position', ChoiceType::class, [
                'label' => "Должность",
                'choices'  => array(
                    'Junior Programmer' => 'Junior Programmer',
                    'Middle programmer' => 'Middle programmer',
                    'Senior programmer' => 'Senior programmer',
                    'Director' => 'Director',
                    'Trainee' => 'Trainee',
                    'Manager' => 'Manager',
                    'Tech Lead' => 'Tech Lead'
                ),
            ])
            ->add('director', EntityType::class, [
                "class" => "AppBundle:Director", // Варианты выпадающего списка
                "choice_label" => "secondName",   // Выпадающий список
                "label" => "Начальник", // название перед выпадающим списком
                "query_builder" => function (DirectorRepository $er)
                {
                    return $er->createQueryBuilder('d')
                        ->setMaxResults(2000);//подгружаю только 2000 начальников, так как не уверен как правильно тут сделать. Каждый начальник - сотрудник, то есть каждый сотрудник может быть начальником. Если бы начальников было мало, можно было бы не ставить лимит.
                }
            ])
            ->add('image', FileType::class, [
                'label' => 'Картинка',
                'data_class' => null,
                'required' => false,
            ])

        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Worker',
            'currency' => '$'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_worker';
    }


}
