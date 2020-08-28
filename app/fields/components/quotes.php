<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$quotes = new FieldsBuilder('quotes');
  
$quotes
    ->addGroup('quotes_text', ['label'=>''])
        ->addText('label', ['label'=>'Napis nad tytułem'])
        ->addText('title', ['label'=>'Tytuł'])
    ->endGroup()
    ->addRepeater('quotes_list', ['label'=>'Opinie'])
        ->addGroup('content', ['label'=>''])
            ->addWysiwyg('text', ['label'=>'Treść'])
            ->addText('title', ['label'=>'Nazwa'])
            ->addUrl('link', ['label'=>'Strona'])
        ->endGroup()
    ;
return $quotes;