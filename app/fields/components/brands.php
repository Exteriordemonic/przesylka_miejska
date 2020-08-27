<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$brands = new FieldsBuilder('brands');
  
$brands
    ->addRepeater('brands')
        ->addUrl('link', ['label'=>'Link'])
        ->addImage('image', ['label'=>'Logo'])
    ;
return $brands;