<?php
// src/VL/PlatformBundle/Form/CategoryType.php

namespace VL\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('name', 'text')
    ;
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'VL\PlatformBundle\Entity\Category'
    ));
  }

  public function getName()
  {
    return 'vl_platformbundle_category';
  }
}