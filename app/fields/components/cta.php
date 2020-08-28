<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cta = new FieldsBuilder('cta');
  
$cta
    ->addTextarea('cta_text', ['label'=>'Text'])
    ->addLink('cta_link', ['label'=>'Link'])
    ->addImage('cta_image', ['label'=>'Zdjęcie w tle']);
return $cta;