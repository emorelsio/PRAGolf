<?php

namespace App\Form;

use App\Entity\Competition;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UploadExcelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fichier', FileType::class,  array(
                'label' => 'Choisissez votre fichier',
            ))
            ->add('heureDebut', TimeType::class, array(
                'label' => "Veuillez renseigné l'heure du début de la compétition"
            ))
            ->add('decalageDepart', TimeType::class, array(
                'label' => 'Veuillez renseigné le décalage entre le départ des équipes'
            ))
            ->add('trou1', TimeType::class, array(
                'label' => 'trou1'
            ))
            ->add('trou2', TimeType::class, array(
                'label' => 'trou2'
            ))
            ->add('trou3', TimeType::class, array(
                'label' => 'trou3'
            ))
            ->add('trou4', TimeType::class, array(
                'label' => 'trou4'
            ))
            ->add('trou5', TimeType::class, array(
                'label' => 'trou5'
            ))
            ->add('trou6', TimeType::class, array(
                'label' => 'trou6'
            ))
            ->add('trou7', TimeType::class, array(
                'label' => 'trou7'
            ))
            ->add('trou8', TimeType::class, array(
                'label' => 'trou8'
            ))
            ->add('trou9', TimeType::class, array(
                'label' => 'trou9'
            ))
            ->add('trou10', TimeType::class, array(
                'label' => 'trou10'
            ))
            ->add('trou11', TimeType::class, array(
                'label' => 'trou11'
            ))
            ->add('trou12', TimeType::class, array(
                'label' => 'trou12'
            ))
            ->add('trou13', TimeType::class, array(
                'label' => 'trou13'
            ))
            ->add('trou14', TimeType::class, array(
                'label' => 'trou14'
            ))
            ->add('trou15', TimeType::class, array(
                'label' => 'trou15'
            ))
            ->add('trou16', TimeType::class, array(
                'label' => 'trou16'
            ))
            ->add('trou17', TimeType::class, array(
                'label' => 'trou17'
            ))
            ->add('trou18', TimeType::class, array(
                'label' => 'trou18'
            ))

            ->add('Submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Competition::class,
        ]);
    }
}
