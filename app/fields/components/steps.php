<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$steps = new FieldsBuilder('steps');
  
$steps
    ->addGroup('steps_text', ['label'=>''])
        ->addText('label', ['label'=>'Napis nad tytułem'])
        ->addText('title', ['label'=>'Tytuł'])
    ->endGroup()
    ->addRepeater('steps_list', ['label'=>'Kroki', 'max'=>4])
        ->addGroup('content', ['label'=>''])
            ->addText('title', ['label'=>'Tytuł'])
            ->addTextarea('text', ['label'=>'Treść'])
        ->endGroup()
    ;
return $steps;