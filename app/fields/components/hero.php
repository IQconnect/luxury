<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$hero = new FieldsBuilder('hero', ['label' => 'hero']);

$hero
    ->addFile('bg', ['label' => 'Tło'])
    ->addTextarea('prefix', ['rows' => 4, 'new_lines' => 'br', 'label' => 'prefix'])
    ->addText('header', ['label' => 'tytuł'])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addLink('link', ['label' => 'Link']);

return $hero;