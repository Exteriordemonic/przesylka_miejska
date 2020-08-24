<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$steps = new FieldsBuilder('steps');
  
$steps
    ->addText('steps');
return $steps;