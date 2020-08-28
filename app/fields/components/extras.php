<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$extras = new FieldsBuilder('extras');
  
$extras
    ->addGroup('extras_text', ['label'=>''])
        ->addText('label', ['label'=>'Napis nad tytułem'])
        ->addText('title', ['label'=>'Tytuł'])
    ->endGroup()
    ->addImage('extras_image', ['label'=>'Zdjęcie'])
    ->addRepeater('extras_list', ['label'=>'Extra', 'max'=>4])
        ->addGroup('content', ['label'=>''])
            ->addText('title', ['label'=>'Tytuł'])
            ->addTextarea('text', ['label'=>'Treść'])
        ->endGroup();
return $extras;