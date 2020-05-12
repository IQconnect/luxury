<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$apartments = new FieldsBuilder('apartments', ['label' => 'Apartamenty - Slider']);

$apartments
    ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 30]])
    ->addWysiwyg('desc', ['label' => 'Treść', 'media_upload' => 0])
    ->addRepeater('apartments'. ['label' => 'Apartamenty'])
        ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 30]])
        ->addLink('link', ['label' => 'Link'])
        ->addImage('image',['label' => 'Zdjęcie', 'wrapper' => ['width' => '80%']]);

return $apartments;