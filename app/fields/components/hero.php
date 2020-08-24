<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');
  
$hero
    ->addTextarea('hero_title', ['label'=>'Tytuł', 'new_lines'=>'br', 'wrapper'=>['width'=>'50%']])
    ->addRepeater('hero_cities', ['label'=>'Miasta' , 'wrapper'=>['width'=>'50%']])
        ->addText('city', ['label'=>'Miasto'])
    ->endRepeater()
    ->addRepeater('hero_buttons', ['label'=>'Przyciski'])
        ->addLink('link', ['label'=>'Link'])
        ->addSelect('type', ['label'=>'Typ'])
            ->addChoice('special')
            ->addChoice('light')
            ->addChoice('transparent')
            ->setDefaultValue('special')
    ->endRepeater()
    ->addImage('hero_image', ['label'=>'Zdjęcie w tle 1920x1080'])
    ;
return $hero;