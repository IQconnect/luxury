<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$boxImg = new FieldsBuilder('box-img', ['label' => 'Zdjęcie z boxem tekstowym']);

$boxImg
    ->addImage('image',['label' => 'Zdjęcie', 'wrapper' => ['width' => '80%']])
    ->addText('title')
    ->addWysiwyg('content', ['label' => 'Treść', 'media_upload' => 0]);

return $boxImg;