<?php


namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if(isset($options['attr']['user']) && $options['attr']['user'] == 'Particular'){
            $builder->add('first_name');
            $builder->add('last_name');
        }
        
        if(isset($options['attr']['user']) && $options['attr']['user'] == 'Professional'){
            $builder->add('raison_social');
        }
        
        $builder->add('adresse');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}