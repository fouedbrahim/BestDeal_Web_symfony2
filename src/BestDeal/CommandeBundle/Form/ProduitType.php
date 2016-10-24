<?php

namespace BestDeal\CommandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProduitType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomProduit')
            ->add('categorie')
            ->add('prixPrimaire')
            ->add('prixSolde')
            ->add('qteProduit')
            ->add('datePromotion')
            ->add('afficheProduit')
            ->add('videoPublicitaire')
            ->add('idPrestataire')
            ->add('description')
            ->add('idCat')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BestDeal\MainBundle\Entity\Produit'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bestdeal_commandebundle_produit';
    }
}
