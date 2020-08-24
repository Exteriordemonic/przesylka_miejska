<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('page_template', '==', 'views/template-custom.blade.php');
  
$page
    ->addTab('hero', ['label' => 'hero', 'placement' => 'left'])
        ->addFields(get_field_partial('components.hero'))
    ->addTab('localization', ['label' => 'localization', 'placement' => 'left'])
        ->addFields(get_field_partial('components.localization'))
    ->addTab('brands', ['label' => 'brands', 'placement' => 'left'])
        ->addFields(get_field_partial('components.brands'))
    ->addTab('flex', ['label' => 'flex', 'placement' => 'left'])
        ->addFields(get_field_partial('components.flex'))
    ->addTab('steps', ['label' => 'steps', 'placement' => 'left'])
        ->addFields(get_field_partial('components.steps'))
    ->addTab('extras', ['label' => 'extras', 'placement' => 'left'])
        ->addFields(get_field_partial('components.extras'))
    ->addTab('for', ['label' => 'for', 'placement' => 'left'])
        ->addFields(get_field_partial('components.for'))
    ->addTab('quotes', ['label' => 'quotes', 'placement' => 'left'])
        ->addFields(get_field_partial('components.quotes'))
    ->addTab('numbers', ['label' => 'numbers', 'placement' => 'left'])
        ->addFields(get_field_partial('components.numbers'))
    ->addTab('cta', ['label' => 'cta', 'placement' => 'left'])
        ->addFields(get_field_partial('components.cta'))
    ;
return $page;