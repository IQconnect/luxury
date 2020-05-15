<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$main = new FieldsBuilder('main');

$main
    ->addTab('main', ['label'=>'Ustawienia stopki','placement' => 'left'])
        ->addTrueFalse('show_form', ['label'=>'Wyświetl formularz', 'default_value' => 1]);

return $main;