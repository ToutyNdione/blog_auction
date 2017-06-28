<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Category;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')->add('description')->add('price')->add('user')
        ->add('category', EntityType::class, array(    
     'class' => 'AppBundle:Category',
    'query_builder' => function(EntityRepository $repository) { 
        return $repository->createQueryBuilder('c')
        ->orderBy('c.name', 'ASC'); },
    'choice_label' => 'name',
    'placeholder'=> 'Select a category'
));
  //       $builder->get('category')->addEventListener(
  //           FormEvents::POST_SUBMIT,
  // function (FormEvent $event) {
  //   $form = $event->getForm();
  //   $this->addDepartementField($form->getParent(), $form->getData());
  // });
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_product';
    }


}
