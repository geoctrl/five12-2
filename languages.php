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
    "description"=>"Something about how effective this is - or something... Something about how effective this is - or something..."
  ),

  "progress"=>array(
    "title"=>"PROGRESS",
    "description"=>"Clothing missionaries in need.",
    "shirts"=>"SHIRTS",
    "pants"=>"PANTS",
    "mShoes"=>"MEN'S<br>SHOES",
    "suits"=>"SUITS",
    "suitcases"=>"SUITCASES",
    "ties"=>"TIES",
    "blouses"=>"BLOUSES",
    "skirts"=>"SKIRTS",
    "wShoes"=>"WOMEN'S<br>SHOES",
  ),

  "affect"=>array(
    "slideOne"=>array(
      "quote"=>"I really love cake.",
      "name"=>"John Doe"
    )
  ),
  "about"=>array(
    "title"=>"About Five.12",
    "description"=>"From Small Beginnings.",
    "content"=>"Five.12 Foundation is a not for profit foundation based in Alpine, Utah committed to the idea that anyone can take part in changing the lives of the people around them even if they only have little. For us it started with a young girl giving all that she had, $5.12, to help save the life of someone she barely knew. That experience has given us a greater perspective on our ability to make the world a better place. We consider �the worth of each soul� to be great and equal throughout the world and are constantly looking for new ways to use what we have to bless the lives of others."
  )

);

$es = array(

  "lang"=>"es",

  "menu"=>array(

    "timeline"=>"Cronolog�a",
    "progress"=>"Progreso",
    "affect"=>"Afectar",
    "participate"=>"Participar",
    "aboutUs"=>"Sobre Nosotros"
  ),

  "hero"=>array(
    "title"=>"Five.12 es impresionante.",
    "description"=>"Diga algo incre�ble sobre c�mo impresionante estupendo Five.12 es . Diga algo incre�ble sobre c�mo impresionante estupendo Five.12 es.",
    "cta"=>"Aprende M�s"
  ),

  "timeline"=>array(
    "title"=>"CRONOLOG�A",
    "description"=>"Algo sobre la eficacia de este es - o algo ... Algo sobre la eficacia de este es - o algo ..."
  ),

  "progress"=>array(
    "title"=>"PROGRESO",
    "description"=>"Misioneros de ropa en necesidad.",
    "shirts"=>"Camisas",
    "pants"=>"Pantalones",
    "mShoes"=>"Zapatos<br>Hombre",
    "suits"=>"Ternos",
    "suitcases"=>"Maletas",
    "ties"=>"Corbatas",
    "blouses"=>"Blusas",
    "skirts"=>"Faldas",
    "wShoes"=>"Zapatos<br>mujer",
  ),
  "affect"=>array(
    "slideOne"=>array(
      "quote"=>"Me encanta la torta.",
      "name"=>"John Doe"
    )
  ),
  "about"=>array(
    "title"=>"Acerca Five.12",
    "description"=>"Desde sus modestos comienzos.",
    "content"=>"Fundaci�n Five.12 es una fundaci�n sin fines de lucro con sede en Alpine , Utah comprometido con la idea de que cualquier persona puede participar en el cambio de las vidas de la gente alrededor de ellos, incluso si s�lo tienen poco. Para nosotros comenz� con una chica joven que da todo lo que ten�a , 5,12 d�lares , para ayudar a salvar la vida de alguien que apenas conoc�a . Esa experiencia nos ha dado una perspectiva mayor de nuestra capacidad para hacer del mundo un lugar mejor. Consideramos \"el valor de cada alma\" a ser grandes e iguales en todo el mundo y en constante b�squeda de nuevas formas de utilizar lo que tenemos para bendecir la vida de los dem�s."
  )


);

/** data **/

$timeline = array(
  "smDate"=>"2012",
  "smNumber"=>"500",
  "mdDate"=>"2013",
  "mdNumber"=>"1,000",
  "lgDate"=>"2014",
  "lgNumber"=>"1,500",
  "xlDate"=>"2015",
  "xlNumber"=>"2,000"
);

$clothes = array(
  "shirts"=>"2108",
  "pants"=>"1416",
  "mShoes"=>"820",
  "suits"=>"86",
  "suitcases"=>"499",
  "ties"=>"1628",
  "blouses"=>"497",
  "skirts"=>"312",
  "wShoes"=>"524"
);


if ($_GET["lang"]=='en') {
  $lang = $en;
} else if ($_GET["lang"]=='es') {
  $lang = $es;
}