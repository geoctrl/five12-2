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

<div class="section section-hero" id="hero">
    <div class="container">
        <div class="hero-title"><?=$lang['hero']['title']?></div>
        <div class="hero-description"><?=$lang['hero']['description']?></div>
        <button class="btn btn-primary btn-lg">
            Learn More
        </button>
    </div>
</div>

<section class="section section-timeline" id="timeline">
    <div class="container">
        <div class="section-icon">
            <img src="/img/section-progress.png" alt="">
        </div>
        <div class="section-lead">
            <span>TIMELINE</span>
        </div>
        <div class="timeline-container">
            <svg class="timeline-svg">
                <g class="line-sm">
                    <line x1="50" x2="200" y1="41" y2="41" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                    <line x1="204" x2="204" y1="45" y2="104" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                    <line x1="204" x2="50" y1="106" y2="106" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                    <line x1="50" x2="50" y1="106" y2="160" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                    <line x1="60" x2="200" y1="185" y2="185" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                </g>
            </svg>

            <div class="timeline-unit timeline-unit-sm">
                <div class="timeline-date">2012</div>
                <div class="timeline-number">500</div>
            </div>
            <div class="timeline-unit timeline-unit-md">
                <div class="timeline-date">2013</div>
                <div class="timeline-number">1,000</div>
            </div>
            <div class="timeline-unit timeline-unit-lg">
                <div class="timeline-date">2014</div>
                <div class="timeline-number">1,500</div>
            </div>
            <div class="timeline-unit timeline-unit-xl">
                <div class="timeline-date">2015</div>
                <div class="timeline-number">2,000</div>
            </div>
        </div>
        <div class="section-lead-text">
            Something about how effective this is - or something...
            Something about how effective this is - or something...
        </div>
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