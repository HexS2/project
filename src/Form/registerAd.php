<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 10/06/2019
 * Time: 11:00
 */

namespace App\Form;


class registerAd extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('prix');
    }

}
