<?php

namespace App\Form;

use App\Entity\Demande;
use App\Entity\Livre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class DemandeType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('type', ChoiceType::class, [
            'label' => 'Type de demande',
            'choices' => [
                'Prêt' => 'Prêt',
                'Don' => 'Don',
            ],
            'placeholder' => 'Choisir le type',
            'attr' => ['class' => 'form-select']
        ])
        ->add('nom_eleve', TextType::class, [
            'label' => 'Nom de l\'élève',
            'attr' => ['class' => 'form-control']
        ])
        ->add('email_eleve', EmailType::class, [
            'label' => 'Email de l\'élève',
            'attr' => ['class' => 'form-control']
        ])
    ;
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Demande::class,
        ]);
    }
}
