<?php

namespace App\Form;

use App\Entity\Concerts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Salles;

class ConcertsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('img')
            ->add('alt')
            ->add('description')
            ->add('artiste')
            ->add('date')
            ->add('salle', EntityType::class, [ 
                'class' => Salles::class,
                'choice_label' => 'nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Concerts::class,
        ]);
    }
}
