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
            <?=$lang['hero']['cta']?>
        </button>
    </div>
</div>

<section class="section section-timeline" id="timeline">
    <div class="container">
        <div class="section-icon">
            <img src="/img/section-timeline.png" alt="">
        </div>
        <div class="section-lead">
            <span><?=$lang['timeline']['title']?></span>
        </div>
        <div class="timeline-container">
            <svg class="timeline-svg">
                <g class="line-md">
                    <line x1="50" x2="450" y1="51" y2="51" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                </g>
                <g class="line-sm">
                    <line x1="50" x2="200" y1="41" y2="41" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                    <line x1="204" x2="204" y1="45" y2="104" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                    <line x1="204" x2="50" y1="106" y2="106" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                    <line x1="50" x2="50" y1="106" y2="160" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                    <line x1="60" x2="200" y1="185" y2="185" stroke-width="4" stroke-linecap="square" stroke-dasharray="6, 12"/>
                </g>
            </svg>

            <div class="timeline-unit timeline-unit-sm">
                <div class="timeline-date"><?=$lang['timeline']['smDate']?></div>
                <div class="timeline-number"><?=$lang['timeline']['smNumber']?></div>
            </div>
            <div class="timeline-unit timeline-unit-md">
                <div class="timeline-date"><?=$lang['timeline']['mdDate']?></div>
                <div class="timeline-number"><?=$lang['timeline']['mdNumber']?></div>
            </div>
            <div class="timeline-unit timeline-unit-lg">
                <div class="timeline-date"><?=$lang['timeline']['lgDate']?></div>
                <div class="timeline-number"><?=$lang['timeline']['lgNumber']?></div>
            </div>
            <div class="timeline-unit timeline-unit-xl">
                <div class="timeline-date"><?=$lang['timeline']['xlDate']?></div>
                <div class="timeline-number"><?=$lang['timeline']['xlNumber']?></div>
            </div>
        </div>
        <div class="section-lead-text"><?=$lang['timeline']['description']?></div>
    </div>
</section>

<section class="section section-progress" id="progress">
    <div class="container">
        <div class="section-icon">
            <img src="/img/section-progress.png" alt="">
        </div>
        <div class="section-lead">
            <span>PROGRESS</span>
        </div>
        <div class="section-lead-text">
            Say something about the progress that five.12's making and how it's changing's people's lives or something like that...
        </div>
        <div class="svg-wrapper">
            <div class="progress-circle"><span>2108</span> SHIRTS</div>
            <div class="progress-svg-container">
                <svg id="progress-shirt-svg" class="progress-svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path id="XMLID_1_" class="st0" d="M128.8,20.6c0,0,7.7,38.1,10.1,41.5c7.4-9.2,26.1-25.2,26.1-25.2S138.7,16.6,139,6.8C132.5,14.2,128.8,20.6,128.8,20.6z"/><path id="XMLID_2_" class="st0" d="M139,6.8c0,0,9.5-6.8,47-1.5c0,0,3.1,4.3-20.9,31.6c12,12.6,20,20,22.7,25.2c4.3-13.5,8.9-38.1,9.2-41.2S186,5.4,186,5.4"/><path id="XMLID_3_" class="st0" d="M129.3,22.9c0,0-50.4,12.1-53.1,16.8c-2.7,4.7-41.4,88.9-44.9,118.8s22.7,117.2,22.7,117.2s24.4-2.9,31.3-6.8c-0.4-2.5-13.7-97.7-12.5-103.6c1.2-5.9,16.6-34.6,16.6-34.6s0,144-0.4,147.1c19.5,8.4,44.7,19.5,76.6,19s66.4-19,75.6-19.5c0-11.5-2.7-149.1-2.7-149.1s18.2,19,14.1,55.7S245,267,245,267s13.3,6.3,31.1,5.9c0-9,21.5-75.4,20.9-106.3s-30.7-108.4-46.3-128c-15-7-53.7-17.7-53.7-17.7"/><line id="XMLID_5_" class="st0" x1="158" y1="43.1" x2="161.8" y2="296.7"/><line id="XMLID_4_" class="st0" x1="170.6" y1="296.7" x2="169.8" y2="41.8"/><path id="XMLID_7_" class="st0" d="M77.7,43.8c0,0,16.8,46.6,12,79.9"/><path id="XMLID_8_" class="st0" d="M247.7,43.8c0,0-12.7,38.8-9,79.9"/><path id="XMLID_10_" class="st0" d="M163.8,42.5c0,0-2.1,0.1-2.2,2.5c-0.1,2.4,1.8,2.4,2.8,2.5c1.4,0,3.4-3.2-0.3-5"/><path id="XMLID_6_" class="st0" d="M163.8,79.4c0,0-2.1,0.1-2.2,2.5c-0.1,2.4,1.8,2.4,2.8,2.5c1.4,0,3.4-3.2-0.3-5"/><path id="XMLID_9_" class="st0" d="M163.8,116.2c0,0-2.1,0.1-2.2,2.5c-0.1,2.4,1.8,2.4,2.8,2.5c1.4,0,3.4-3.2-0.3-5"/><path id="XMLID_11_" class="st0" d="M164.2,153.1c0,0-2.1,0.1-2.2,2.5c-0.1,2.4,1.8,2.4,2.8,2.5c1.4,0,3.4-3.2-0.3-5"/><path id="XMLID_12_" class="st0" d="M165.1,190c0,0-2.1,0.1-2.2,2.5c-0.1,2.4,1.8,2.4,2.8,2.5c1.4,0,3.4-3.2-0.3-5"/><path id="XMLID_13_" class="st0" d="M165.8,226.8c0,0-2.1,0.1-2.2,2.5c-0.1,2.4,1.8,2.4,2.8,2.5c1.4,0,3.4-3.2-0.3-5"/><path id="XMLID_15_" class="st0" d="M48,254.2c0,0,23.7-1.6,34.5-6.4"/><path id="XMLID_16_" class="st0" d="M246.9,244c0,0,12.3,7.3,34,7"/><path id="XMLID_17_" class="st0" d="M186.3,87.6h39.8v39.5l-20.1,8.6l-20.7-8.6V87.6"/><line id="XMLID_18_" class="st0" x1="185.4" y1="96" x2="226.1" y2="96"/></svg>
            </div>
        </div>
        <div class="svg-wrapper">
            <div class="progress-circle"><span>1416</span> PANTS</div>
            <div class="progress-svg-container">
                <svg id="progress-pants-svg" class="progress-svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><g id="XMLID_32_"><path id="XMLID_27_" class="st0" d="M224.4,15.4c0,0-1.8,0.1-1.8,2.2s1.5,2.1,2.4,2.1c1.2,0,2.9-2.7-0.3-4.3"/><path id="XMLID_28_" class="st0" d="M257.1,19.1c0,0,3.3,34.2,4.8,36c1.5,1.9,6.3,3.1,6.3,3.1"/><path id="XMLID_29_" class="st0" d="M183,19.4c0,0-2.5,34.2-4,36.2c-1.4,2-6.5,2.6-6.5,2.6"/><path id="XMLID_30_" class="st0" d="M177.2,280.3c0,0,8.2,9,16.5,9s20.2-7.4,20.2-7.4"/><path id="XMLID_31_" class="st0" d="M226.8,282.3c0,0,11.3,7,17.7,7s19.5-9,19.5-9"/><line id="XMLID_33_" class="st0" x1="194.4" y1="71.5" x2="195.7" y2="294.7"/><line id="XMLID_34_" class="st0" x1="248.4" y1="71.4" x2="245.6" y2="294"/><path id="XMLID_17_" class="st0" d="M264.7,7c-10.9-2.6-79.9-1.8-88.8,0c-4.2,21.4-3.4,72.2-3,80.3s4.2,99.2,4.2,99.2v98.8c0,0,10.8,9.4,18.5,9.4c7.8,0,18.2-8.3,18.2-8.3s2.3-141.5,1.9-160.1c-0.4-18.5,3-50.5,4.8-54.9c3.2,14.6,4.2,50.5,4.2,72.9s2.1,142.2,2.1,142.2s7.6,7.4,18.7,7.4s18.4-9.4,18.4-9.4v-93c0,0,3.9-126.7,4.2-135.7S264.7,7,264.7,7s-11,5.3-44.3,4.7s-43.6-4.1-43.6-4.1"/><polyline id="XMLID_20_" class="st0" points="199.5,10.8 199.1,24.7 202.6,25.4 202.6,11.5 "/><polyline id="XMLID_21_" class="st0" points="237.1,11.5 238.1,25.4 241.2,25.4 240.4,11.3 "/><path id="XMLID_22_" class="st0" d="M174.5,16.5c0,0,3.1,3.1,24.6,5.2"/><path id="XMLID_23_" class="st0" d="M202.6,21.7c0,0,19.5,2.1,35.3,0"/><path id="XMLID_24_" class="st0" d="M241.2,21.3c0,0,16-1.6,24.4-4.2"/><line id="XMLID_25_" class="st0" x1="220.4" y1="11.7" x2="220.6" y2="71.4"/><path id="XMLID_26_" class="st0" d="M213,73.5c0,0,7-4.5,17.9-4.1"/><path id="XMLID_19_" class="st0" d="M226.8,22.6c0,0,1.5,29.7,0,32c-1.5,2.3-6.3,3.1-6.3,3.1"/></g></svg>
            </div>
        </div>
        <div class="svg-wrapper">
            <div class="progress-circle" style="padding-top: 9px;"><span>820</span> MENS<br>SHOES</div>
            <div class="progress-svg-container">
                <svg id="progress-shoes-svg" class="progress-svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><g id="XMLID_59_"><path id="XMLID_18_" class="st0" d="M244.9,52.4c-0.5,0.6-21.2,24.7-25.2,31.7c-3.9,7.1-28.9,56.1-28.9,56.1l-26,52.5c0,0-12.3,24.9-12.1,35.1c0.3,10.2-2.4,17.8,5.2,24.9s18.4,12.1,31.7,7.3c13.4-4.7,42.5-27,57.2-46.7c14.7-19.7,19.1-41.4,20.5-56.3s8.9-26.4,8.9-26.4h2.1c0,0,17.6-36.2,16.3-53.8s-3.4-22-8.1-26.8c-3.4-6.6-7.9-12.3-13.4-12.3S256.1,38.9,244.9,52.4z"/><path id="XMLID_35_" class="st0" d="M233.4,66.1c-6.6,7.9-15.5,25.9-15.8,29.3c-0.3,3.4,3.7,7.1,3.7,7.1s6.3,9.4,5.5,12.9s-20.7,42.5-25.4,45.9c-4.7,3.4-22.2,2.6-22.2,2.6"/><path id="XMLID_37_" class="st0" d="M282,43.1c0,0,3,9.3,2.2,18.2c-0.8,8.9-6,31.7-17,42.2s-23.9,10-28.1,12.6c-4.2,2.6-15.5,22.8-19.4,33.8c-3.9,11-5,21.8,0,26.5s17.8,12.9,17.8,12.9l11.3-20.5c0,0-10.2-5.5-7.9-11.5s3.4-27,12.9-32.8c9.4-5.8,13.4-8.4,16.8-11.8c3.4-3.4,10.2-13.4,13.8-25.7s3.5-24.4,2.5-33.8c5,18.4,1,25.4-1,34.1s-13.9,31.5-16,39.6c-2.1,8.1-5.2,15.5-4.7,23.1c-4.7,9.4-17.6,44.6-38.8,61.6s-32-1.8-28.9-18.6c-8.1,12.1-19.1,12.6-24.4,8.4c-5.2-4.2-6.5-12-3.6-17.9"/><path id="XMLID_38_" class="st0" d="M221.3,102.5c0,0,16.3,5.5,23.3,11.8"/><path id="XMLID_39_" class="st0" d="M181.3,128.9c0,0,11.5-1.2,14.4-3.4c2.9-2.2,11.3-7.3,17.8-5.1c6.6,2.2,13.5,1.7,13.5,1.7s2.8,0.2,0.9-2.3c-1.9-2.5-3.9,0.7-1.6,3.2s6.8,8.3,9.3,10.5c2.5,2.2,10.8,9.8,13.8,10.4c3,0.5,6.4-1.2,6.7-3.5c0.3-2.4-1.7-9.3-10-11.8c-8.3-2.5-22.5-8.3-22.5-8.3s1.5-4.9,4.1-2.2c2.6,2.6-5,7.6-2.9,5c2.1-2.6-0.5-4.8,2.1-2.6c0,0,2.6-0.3,1.5,2.6c-1,2.9,2.5,3.9,2.5,3.9l-17.4,0.7"/><line id="XMLID_40_" class="st0" x1="208.9" y1="137.8" x2="225.5" y2="137.1"/><line id="XMLID_41_" class="st0" x1="218.7" y1="132.2" x2="228.6" y2="148.5"/><path id="XMLID_42_" class="st0" d="M242.6,158.9c0,0-7.6-27.7-15.2-36.1c-2.6-0.7-2.6-8.7,0.4-4.9c3,3.8,3.3,2.9,0.2,4c-2.9,1-5.9-2.4-1.8-1.7c0.2,0,0.5,0.1,0.8,0.1c5.2,1.2,5.9,4.2,2.6,3.4c-3.3-0.8-3.7-5.4-5.4-7.7c-1.8-2.4-10.2-10.6-19.2-8.9c-9,1.7-6.2,7.9-4.9,10.1c1.3,2.2,12.3,1.6,16,0.9s10.5,1.4,10.5,1.4l-3,2.9l-0.7,1.5l9,12.6"/><line id="XMLID_43_" class="st0" x1="213.8" y1="141.6" x2="225.5" y2="159.4"/><line id="XMLID_44_" class="st0" x1="202.8" y1="148.5" x2="220.6" y2="147.5"/><line id="XMLID_45_" class="st0" x1="206.3" y1="154.6" x2="217.2" y2="160.7"/><path id="XMLID_46_" class="st0" d="M162.2,198.4c0,0-1.6,6.6,7.6,11.3c9.2,4.7,19.5,0,19.5,0s3.7,13,11.8,16.7c8.1,3.7,22.8,0,31.1-9.8s27.9-35.1,32.9-66.6"/><path id="XMLID_47_" class="st0" d="M267,161.6c-0.1,1-9.1,42.4-34,63.9s-41.1,32.7-53.8,31.5c-12.6-1.2-20-4.7-26.5-22.6"/><line id="XMLID_48_" class="st0" x1="195.8" y1="157.7" x2="223.7" y2="171.6"/><path id="XMLID_36_" class="st0" d="M213.4,96.2c0,0-10.1-2-15.4,0c-5.3,2-18.7,10.3-30.1,13.8s-35.4,8.5-46.6,11c-11.2,2.6-24.2,6.7-33.5,13.4c-9.3,6.7-9.6,5.4-10.5,9.5s-2.6,7.8,7,17s28.2,16.3,44.5,18s43.6-1.1,43.6-1.1"/><path id="XMLID_49_" class="st0" d="M288.8,105.8c0,0,7.6,13.6,6,24.3c-1.6,10.6-5.5,16.1-5.5,16.1s2.7,8.8-3.7,15.4c-6.4,6.6-19.8,7.8-19.8,7.8"/><path id="XMLID_51_" class="st0" d="M290.5,109.3c0,0,0.6,9.8-8.8,14.2"/><path id="XMLID_52_" class="st0" d="M293.9,118.9c0,0,0.2,11.2-20.4,17.1"/><path id="XMLID_53_" class="st0" d="M289.2,146.2c0,0-9.5,9.8-21.8,10.3"/><path id="XMLID_54_" class="st0" d="M133,118.4c-0.5,0.1-13.5,4.5-11.2,9s13.8,6.1,20.3,3.3c-10.3,7.3-21.2,6.3-17.4,16.1c3.8,9.8,14.8,12.3,25.3,13.2s29.1-2.8,33.7-5.4"/><path id="XMLID_55_" class="st0" d="M114,122.8c0,0-3.2,5.5-1.5,7.7c1.7,2.2,2.1,2.9,10,6.5c-9.4,3.9-9.2,11.7-3.9,17.6s16.9,10.4,24,11.7c7.1,1.3,29.3-0.7,37.7-4.8"/><path id="XMLID_56_" class="st0" d="M78.6,140.9c0,0-0.8,8.8,1.7,11.3c2.5,2.6,14.2,14,29.4,17.6c15.2,3.6,42,7.1,64.3,4.5"/><path id="XMLID_57_" class="st0" d="M150.5,114.5c0,0,3.7,7,14.7,1.9c2,4.5,2,4.5,2,4.5s-10,4.4-9.5,15.1c0.5,10.7,2.3,18.6,2.3,18.6l23.6-4.1c0,0-3.9-9.6,0-13.4c3.9-3.8,13.2-8.4,13.2-8.4"/><path id="XMLID_58_" class="st0" d="M193.9,132.2c0,0-4.2-0.7-4.1-9.4c0-3.8,4.3-9.4,5.2-12.5c0.8-3.1,0.8-7.9,1.8-9.5c1-1.6,3.2-1,1.9,1.7c-1.3,2.7-4.1,0.5-3.6-1.6c0.5-2.1,2.1-5,2.7-2.6c0.6,2.5-2,8.8-2.8,6.4c-0.8-2.4,3.7,4.1,3.7,4.1l-12.9-6.6"/><path id="XMLID_50_" class="st0" d="M176.5,105.3c0,0,3.1-0.2,3.7-1.2c0.7-1,5.9-6.8,8.2-7.7c2.3-0.9,5.6-4,7.9-1.7c2.3,2.4,5.1,2.9,2.7,4.8s-8.6,1.7-5.2,2.9s5.3-7,5.3-8.6c-0.1-1.6,0.8-3.2-2.3-3.6c-3.1-0.4-8.8,0.7-4.4,5.6s6.2,4.3,4.4,4.9c-1.8,0.6-1.6-6.7,0-2.2c1.6,4.5-3.1-0.4-3.1-0.4l-2.8,14.9"/><line id="XMLID_60_" class="st0" x1="167.2" y1="120.9" x2="196.4" y2="104.3"/><line id="XMLID_61_" class="st0" x1="165.1" y1="116.4" x2="196.3" y2="100.8"/><path id="XMLID_62_" class="st0" d="M206.3,95.3c-0.4,0-6,1.6-5.8,3.5c0.2,1.9,1.5,2.2,0.8,4.3c-0.7,2.2-2.2,7.2,2.7,11.4"/><line id="XMLID_63_" class="st0" x1="183.6" y1="111.6" x2="177.6" y2="106.2"/><line id="XMLID_64_" class="st0" x1="180.6" y1="118.9" x2="182.5" y2="107.7"/><line id="XMLID_65_" class="st0" x1="175.7" y1="116.1" x2="167.2" y2="110.2"/><line id="XMLID_66_" class="st0" x1="172.2" y1="122.8" x2="174" y2="112"/><path id="XMLID_67_" class="st0" d="M163.2,130.6c0,0,0.5-12.9-4.2-18"/><path id="XMLID_68_" class="st0" d="M230.6,106.2c0,0,1.1-20.8,17.1-37.5s22.7-18.4,25.8-16.8s11.4,8.7,9.8,15.7"/></g></svg>
            </div>
        </div>
 </div>
</section>

<section id="affect">
    <div id="affect" class="carousel slide" data-ride="carousel" data-interval="7000">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item item-slide-1 active">
                <div class="container">
                    <div class="affect-item-container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="affect-profile">
                                    <img src="/img/john-doe.jpg">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>John Doe</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#affect" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#affect" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="section" id="about">
    <div class="container">
        <div class="section-lead">
            <div class="section-icon">
                <img src="/img/section-about.png" alt="">
            </div>
            <span>About Five.12</span><br>
            From Small Beginnings.
        </div>

        <div class="row">
            <div class="col-sm-6">
                <p class="about-p">Five.12 Foundation is a not for profit foundation based in Alpine, Utah committed to
                    the idea that anyone can take part in changing the lives of the people around them
                    even if they only have little. For us it started with a young girl giving all that she had,
                    $5.12, to help save the life of someone she barely knew.  That experience has given
                    us a greater perspective on our ability to make the world a better place.  We
                    consider �the worth of each soul� to be great and equal throughout the world and
                    are constantly looking for new ways to use what we have to bless the lives of others.
                </p>
            </div>
            <div class="col-sm-6">
                <div class="videoWrapper">
                    <iframe src="https://player.vimeo.com/video/52745113" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/52745113">Five12: Small Beginnings</a> from <a href="https://vimeo.com/user14406079">Nick Greer</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="copyright">Copyright &copy; 2015. Founded in 2013. Five.12 Foundation is a 501(c)3 organization.</div>





<script src="/lib/jquery/jquery.min.js"></script>
<script src="/lib/jquery-validate/jquery.validate.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/velocity/velocity.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/vivus/dist/vivus.min.js"></script>
<script src="/lib/main.js"></script>
</body>
</html>