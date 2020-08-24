<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$extras = new FieldsBuilder('extras');
  
$extras
    ->addText('extras');
return $extras;