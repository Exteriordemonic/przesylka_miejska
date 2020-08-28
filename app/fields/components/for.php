<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$for = new FieldsBuilder('for');
  
$for
    ->addGroup('for_text', ['label'=>''])
        ->addText('label', ['label'=>'Napis nad tytułem'])
        ->addText('title', ['label'=>'Tytuł'])
    ->endGroup()
    ->addGroup('for_offert', ['label'=>''])
        ->addText('title', ['label'=>'Tytuł'])
        ->addTextarea('text', ['label'=>'Treść'])
        ->addLink('link', ['label'=>'Link'])
    ->endGroup()
    ->addRepeater('for_list', ['label'=>'Dla kogo', 'max'=>7])
        ->addGroup('content', ['label'=>''])
            ->addImage('icon', ['label'=>'Ikona'])
            ->addText('title', ['label'=>'Tytuł'])
            ->addTextarea('text', ['label'=>'Treść'])
        ->endGroup();
return $for;