<?php

namespace App\Form;

use App\Entity\City;
<<<<<<< HEAD
use App\Entity\Country;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
=======
>>>>>>> 1be157315573d9ef9a056ec3cff3e5cb2875fc19
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< HEAD
            ->add('name')
            ->add('country', EntityType::class, [
                'class' => Country::class,
                'choice_label' => 'name',
                'placeholder' => 'Seleccione uno...'
    ])


=======
>>>>>>> 1be157315573d9ef9a056ec3cff3e5cb2875fc19
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => City::class,
        ]);
    }
}
