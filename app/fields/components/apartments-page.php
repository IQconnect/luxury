<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$apartmentsPage = new FieldsBuilder('apartments-page', ['label' => 'Lista Apartamentów']);

$apartmentsPage
    ->addText('title', ['label' => 'Tytuł'])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addRepeater('apartments')
        ->addText('title', ['label' => 'Tytuł'])
        ->addImage('img', ['label' => 'Tło'])
        ->addLink('link', ['label' => 'Tło']);

return $apartmentsPage;