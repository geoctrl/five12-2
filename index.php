<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        The Five 12 Foundation
    </title>
    <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/lib/main.css?v0.0.3">
</head>
<body>

<?php include "languages.php"; ?>

<header>
    <div class="container">
        <img class="logo" src="/img/logo.png" alt="" onclick="scrollById('hero');toggleMenu();">
        <div class="nav pull-left">
            <button class="menu-btn" onclick="scrollById('timeline');toggleMenu();">
                <?=$lang['menu']['timeline']?>
            </button>
            <button class="menu-btn" onclick="scrollById('progress');toggleMenu();">
                <?=$lang['menu']['progress']?>
            </button>
            <button class="menu-btn" onclick="scrollById('affect');toggleMenu();">
                <?=$lang['menu']['affect']?>
            </button>
            <button class="menu-btn" onclick="scrollById('participate');toggleMenu();">
                <?=$lang['menu']['participate']?>
            </button>
            <button class="menu-btn" onclick="scrollById('about');toggleMenu();">
                <?=$lang['menu']['aboutUs']?>
            </button>
        </div>
        
        <div class="nav pull-right">
            <div class="languages">
                <a href="/en/" class="<?=$lang['lang']=='en'?'isActive':''?>">English</a>
                / <a href="/es/" class="<?=$lang['lang']=='es'?'isActive':''?>">Espa&ntilde;ol</a>
            </div>
            <button class="menu-btn menu-btn-hamburger" onclick="toggleMenu();">
                <i class="glyphicon glyphicon-menu-hamburger"></i>
            </button>
        </div>
    </div>
</header>

<section class="section section-hero" id="hero">
    <div class="container">
        <div class="hero-title"><?=$lang['hero']['title']?></div>
        <div class="hero-description"><?=$lang['hero']['description']?></div>
        <button class="btn btn-primary btn-lg">
            Learn More
        </button>
    </div>
</section>


<script src="/lib/jquery/jquery.min.js"></script>
<script src="/lib/jquery-validate/jquery.validate.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/velocity/velocity.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/main.js"></script>
</body>
</html>