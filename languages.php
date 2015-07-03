<?php

$en = array(

  "lang"=>"en",

  "menu"=>array(

    "timeline"=>"Timeline",
    "progress"=>"Progress",
    "affect"=>"Affect",
    "participate"=>"Participate",
    "aboutUs"=>"About Us"
  ),

  "hero"=>array(
    "title"=>"Five.12 is awesome.",
    "description"=>"Say something awesome about how super awesome Five.12 is. Say something awesome about how super awesome Five.12 is."
  )
);

$es = array(

  "lang"=>"es",

  "menu"=>array(

    "timeline"=>"Cronología",
    "progress"=>"Progreso",
    "affect"=>"Afectar",
    "participate"=>"Participar",
    "aboutUs"=>"Sobre Nosotros"
  ),

  "hero"=>array(
    "title"=>"Five.12 es impresionante.",
    "description"=>"Diga algo increíble sobre cómo impresionante estupendo Five.12 es . Diga algo increíble sobre cómo impresionante estupendo Five.12 es."
  )
);


if ($_GET["lang"]=='en') {
  $lang = $en;
} else if ($_GET["lang"]=='es') {
  $lang = $es;
}