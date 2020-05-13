<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$apartment = new FieldsBuilder('apartament');

$apartment
    ->setLocation('post_template', '==', 'views/template-apartment.blade.php');

$apartment
    ->addTab('Opis', ['placement' => 'left'])
        ->addText('apartment-title', ['label' => 'Tytuł apartamentu'])
        ->addText('apartment-type', ['label' => 'Typ', 'wrapper' => ['width' => 33.33]])
        ->addText('apartment-location', ['label' => 'Lokalizacja','wrapper' => ['width' => 33.33]])
        ->addText('apartment-size', ['label' => 'Powierzchnia','wrapper' => ['width' => 33.33]])
        ->addWysiwyg('apartment-desc', ['label' => 'Opis apartamentu', 'media_upload' => 0])
    ->addTab('Filmik', ['placement' => 'left'])
        ->addFile('apartment-video')
    ->addTab('Photos', ['label' => 'Zdjęcia','placement' => 'left'])
        ->addTextarea('apartment-header', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
        ->addImage('apartment-img', ['label' => 'Duże zdjęcie'])
        ->addGallery('apartment-gallery', ['label' => 'Galeria']);

return $apartment;