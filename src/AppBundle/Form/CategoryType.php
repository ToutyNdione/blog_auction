<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CategoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('parent', EntityType::class, array(
                'class' => "AppBundle:Category",
                "choice_label" => "name",
                 'query_builder' => function (EntityRepository $repository)
                 {
                     return $repository->createQueryBuilder('category')
                        ->where('category.parent is null')
                        ->leftJoin('category.children', 'child', 'WITH', 'child.parent = category')
                        ->orderBy('category.name', 'ASC');
                 },
   'placeholder'=> ' ',
   'required'=>false


                ))  ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Category'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_category';
    }


}
