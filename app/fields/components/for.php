<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$for = new FieldsBuilder('for');
  
$for
    ->addText('for');
return $for;