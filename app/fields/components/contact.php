<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$contact = new FieldsBuilder('contact', ['label' => 'Kontakt']);

$contact
    ->addText('title', ['label' => 'Tytuł'])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis']);

return $contact;