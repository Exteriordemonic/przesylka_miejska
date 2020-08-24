<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$numbers = new FieldsBuilder('numbers');
  
$numbers
    ->addText('numbers');
return $numbers;