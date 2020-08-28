<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$extras = new FieldsBuilder('extras');
  
$extras
    ->addImage('extras_image', ['label'=>'Zdjęcie']);
return $extras;