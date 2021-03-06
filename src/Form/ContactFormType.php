<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter your email adress like this one: name@example.com',
                ],
            ])
            ->add('subject', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'placeholder' => 'Like, what would you like to see in the next update!',
                ],
            ])
            ->add('text', TextareaType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'placeholder' => 'Write a love letter to me!',
                ],
            ])
            ->add('submit', SubmitType::class, [
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
