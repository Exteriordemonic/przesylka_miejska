<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$quotes = new FieldsBuilder('quotes');
  
$quotes
    ->addText('quotes');
return $quotes;