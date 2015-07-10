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
    "description"=>"Say something awesome about how super awesome Five.12 is. Say something awesome about how super awesome Five.12 is.",
    "cta"=>"Learn More"
  ),

  "timeline"=>array(
    "title"=>"TIMELINE",
    "description"=>"Something about how effective this is - or something... Something about how effective this is - or something...",
    "smDate"=>"2012",
    "smNumber"=>"500",
    "mdDate"=>"2013",
    "mdNumber"=>"1,000",
    "lgDate"=>"2014",
    "lgNumber"=>"1,500",
    "xlDate"=>"2015",
    "xlNumber"=>"2,000"
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
    "description"=>"Diga algo increíble sobre cómo impresionante estupendo Five.12 es . Diga algo increíble sobre cómo impresionante estupendo Five.12 es.",
    "cta"=>"Aprende Más"
  ),

  "timeline"=>array(
    "title"=>"CRONOLOGÍA",
    "description"=>"Algo sobre la eficacia de este es - o algo ... Algo sobre la eficacia de este es - o algo ...",
    "smDate"=>"2012",
    "smNumber"=>"500",
    "mdDate"=>"2013",
    "mdNumber"=>"1,000",
    "lgDate"=>"2014",
    "lgNumber"=>"1,500",
    "xlDate"=>"2015",
    "xlNumber"=>"2,000"
  )
);


if ($_GET["lang"]=='en') {
  $lang = $en;
} else if ($_GET["lang"]=='es') {
  $lang = $es;
}