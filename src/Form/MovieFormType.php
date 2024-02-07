<?php

namespace App\Form;

use App\Entity\Actor;
use App\Entity\Movie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none',
                    'placeholder' => 'Enter title...'

                ],
                'label' => false,
                'required' => false

            ])
            ->add('releaseYear', IntegerType::class, [
                'attr' => [
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none',
                    'placeholder' => 'Enter release year...'

                ],
                'label' => false,
                'required' => false

            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'bg-transparent block border-b-2 w-full h-60 text-6xl outline-none',
                    'placeholder' => 'Enter description...'

                ],
                'label' => false,
                'required' => false

            ])
            ->add('imagePath', FileType::class, [
                'required' => false,
                // 'mapped' => false,
                'label' => false,
                'data_class' => null

            ])
            /*->add('actors', EntityType::class, [
                'class' => Actor::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])*/
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl'
                ],
                'label' => 'Submit post'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
