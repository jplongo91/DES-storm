<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AdminProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
            'label' => 'Titre'
            ])
            ->add('price', TextareaType::class,[
                'label' => 'Description'
                ])
            ->add('description', TextType::class,[ 
                'label' => 'Prix'
                ])
            ->add('imageFilename', TextType::class,[
                'label' => "Lien vers l'image"
            ])
            ->add('submit', SubmitType::class, [ 
                'label' => "Sauvegarder"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
