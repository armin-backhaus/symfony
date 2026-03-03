<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class Test2Type extends AbstractType
{
    public function buildForm(FormbuilderInterface $builder, array $options): void
    {
        $builder
            ->setMethod('POST')
            ->add('id')
            ->add('name')
//            ->add('age')
            ->add('save', SubmitType::class)
        ;
    }
}
