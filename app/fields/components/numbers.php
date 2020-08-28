<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$numbers = new FieldsBuilder('numbers');
  
$numbers
    ->addRepeater('numbers_list', ['label'=>'Licznik', 'max'=>4])
        ->addGroup('content', ['label'=>''])
            ->addText('number', ['label'=>'Numer'])
            ->addWysiwyg('text', ['label'=>'Treść'])
        ->endGroup();
return $numbers;