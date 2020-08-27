<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flex = new FieldsBuilder('flex');
  
$flex
    ->addGroup('flex_text', ['label'=>''])
        ->addText('label', ['label'=>'Napis nad tytułem'])
        ->addText('title', ['label'=>'Tytuł'])
        ->addWysiwyg('text', ['label'=>'Text'])
        ->addLink('url', ['label'=>'Url'])
    ->endGroup()
    ->addImage('flex_image', ['label'=>'Image'])
    ;
return $flex;