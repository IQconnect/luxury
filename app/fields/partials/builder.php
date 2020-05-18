<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Dodaj komponent'])
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.small-hero'))
            ->addLayout(get_field_partial('components.box-img'))
            ->addLayout(get_field_partial('components.apartments'))
            ->addLayout(get_field_partial('components.apartments-page'))
            ->addLayout(get_field_partial('components.contact'));

return $builder;