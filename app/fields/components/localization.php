<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$localization = new FieldsBuilder('localization');
  
$localization
    ->addGroup('localization_text', ['label'=>''])
        ->addText('label', ['label'=>'Napis nad tytułem'])
        ->addText('title', ['label'=>'Tytuł'])
        ->addWysiwyg('text', ['label'=>'Text'])
    ->endGroup()
    ->addRepeater('localization_cities', ['label'=>'Miasta' , 'wrapper'=>['width'=>'100%']])
        ->addText('city', ['label'=>'Miasto'])
    ->endRepeater()
    ;
return $localization;