<?php

namespace App\Form;

use App\Entity\TicketList;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class TicketStatusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', HiddenType::class)
			->add('result', ChoiceType::class, [
			'choices'  => [
				'Oui' => 'good',
				'Non' => 'bad',
			], 'label' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TicketList::class,
        ]);
    }
}
