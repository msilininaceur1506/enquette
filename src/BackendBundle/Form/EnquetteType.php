<?php


namespace BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EnquetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
    }

    public function getBlockPrefix()
    {
        return 'enquette';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}