<?php

namespace App\Form;

use App\Entity\Salles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Villes;

class SallesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('positionGPS')
            ->add('img')
            ->add('alt')
            ->add('parcours')
            ->add('ville', EntityType::class, [ 
                'class' => Villes::class,
                'choice_label' => 'nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Salles::class,
        ]);
    }
}
