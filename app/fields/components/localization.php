<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$localization = new FieldsBuilder('localization');
  
$localization
    ->addText('localization');
return $localization;