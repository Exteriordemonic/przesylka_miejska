<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$brands = new FieldsBuilder('brands');
  
$brands
    ->addText('brands');
return $brands;