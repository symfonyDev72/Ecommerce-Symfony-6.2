<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('gender', ChoiceType::class, [
                'label' => 'Genre',
                'required' => true,
                'attr' => ['class' => 'ps-3'],
                'choices' => [
                    'Homme' => 'homme',
                    'Femme' => 'femme'
                ],
                'multiple' => false,
                'expanded' => true
            ])
            ->add('firstName', TextType::class, ['label' => 'Prénom'])
            ->add('lastName', TextType::class, ['label' => 'Nom'])
            ->add('email', EmailType::class, ['label' => 'Adresse email'])
            ->add('imageFile', VichImageType::class, [
                'label' => 'Avatar (Extensions acceptées : JPG,JPEG ou PNG)',
                'required' => false,
                'allow_delete' => false,
                'delete_label' => 'Supprimer l\'image',
                'download_label' => false,
                'download_uri' => false,
                'image_uri' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
