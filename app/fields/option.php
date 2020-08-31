<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-page-settings');
  
$option_page
    ->addTab('Logo', ['label' => 'Logo', 'placement' => 'left'])
        ->addImage('logo', ['label'=> 'Logo', 'wrapper'=>'50%'])
        ->addImage('logo_slogan', ['label'=>'Logo slogan', 'wrapper'=>'50%'])
    ->addTab('Moje konto')
        ->addUrl('myacc-troj', ['label'=>'Trójmiasto link logowania'])
        ->addUrl('myacc-byd', ['label'=>'Bydgoszcz link logowania'])
    ->addTab('Popup')
        ->addGroup('popup_text', ['label'=>''])
            ->addText('label', ['label'=>'Napis nad tytułem'])
            ->addText('title', ['label'=>'Tytuł'])
            ->addWysiwyg('text', ['label'=>'Text'])
        ->endGroup()
    ->addTab('Social Icons', ['placement' => 'left'])
        ->addUrl('facebook')
        ->addUrl('instagram')
    ;
        
return $option_page;