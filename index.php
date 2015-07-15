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
            Clothing missionaries in need.
        </div>
        <div class="svg-contain">
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
                <div class="progress-circle" style="padding-top: 14px;"><span>820</span> MENS<br>SHOES</div>
                <div class="progress-svg-container">
                    <svg id="progress-shoes-svg" class="progress-svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><g id="XMLID_59_"><path id="XMLID_18_" class="st0" d="M244.9,52.4c-0.5,0.6-21.2,24.7-25.2,31.7c-3.9,7.1-28.9,56.1-28.9,56.1l-26,52.5c0,0-12.3,24.9-12.1,35.1c0.3,10.2-2.4,17.8,5.2,24.9s18.4,12.1,31.7,7.3c13.4-4.7,42.5-27,57.2-46.7c14.7-19.7,19.1-41.4,20.5-56.3s8.9-26.4,8.9-26.4h2.1c0,0,17.6-36.2,16.3-53.8s-3.4-22-8.1-26.8c-3.4-6.6-7.9-12.3-13.4-12.3S256.1,38.9,244.9,52.4z"/><path id="XMLID_35_" class="st0" d="M233.4,66.1c-6.6,7.9-15.5,25.9-15.8,29.3c-0.3,3.4,3.7,7.1,3.7,7.1s6.3,9.4,5.5,12.9s-20.7,42.5-25.4,45.9c-4.7,3.4-22.2,2.6-22.2,2.6"/><path id="XMLID_37_" class="st0" d="M282,43.1c0,0,3,9.3,2.2,18.2c-0.8,8.9-6,31.7-17,42.2s-23.9,10-28.1,12.6c-4.2,2.6-15.5,22.8-19.4,33.8c-3.9,11-5,21.8,0,26.5s17.8,12.9,17.8,12.9l11.3-20.5c0,0-10.2-5.5-7.9-11.5s3.4-27,12.9-32.8c9.4-5.8,13.4-8.4,16.8-11.8c3.4-3.4,10.2-13.4,13.8-25.7s3.5-24.4,2.5-33.8c5,18.4,1,25.4-1,34.1s-13.9,31.5-16,39.6c-2.1,8.1-5.2,15.5-4.7,23.1c-4.7,9.4-17.6,44.6-38.8,61.6s-32-1.8-28.9-18.6c-8.1,12.1-19.1,12.6-24.4,8.4c-5.2-4.2-6.5-12-3.6-17.9"/><path id="XMLID_38_" class="st0" d="M221.3,102.5c0,0,16.3,5.5,23.3,11.8"/><path id="XMLID_39_" class="st0" d="M181.3,128.9c0,0,11.5-1.2,14.4-3.4c2.9-2.2,11.3-7.3,17.8-5.1c6.6,2.2,13.5,1.7,13.5,1.7s2.8,0.2,0.9-2.3c-1.9-2.5-3.9,0.7-1.6,3.2s6.8,8.3,9.3,10.5c2.5,2.2,10.8,9.8,13.8,10.4c3,0.5,6.4-1.2,6.7-3.5c0.3-2.4-1.7-9.3-10-11.8c-8.3-2.5-22.5-8.3-22.5-8.3s1.5-4.9,4.1-2.2c2.6,2.6-5,7.6-2.9,5c2.1-2.6-0.5-4.8,2.1-2.6c0,0,2.6-0.3,1.5,2.6c-1,2.9,2.5,3.9,2.5,3.9l-17.4,0.7"/><line id="XMLID_40_" class="st0" x1="208.9" y1="137.8" x2="225.5" y2="137.1"/><line id="XMLID_41_" class="st0" x1="218.7" y1="132.2" x2="228.6" y2="148.5"/><path id="XMLID_42_" class="st0" d="M242.6,158.9c0,0-7.6-27.7-15.2-36.1c-2.6-0.7-2.6-8.7,0.4-4.9c3,3.8,3.3,2.9,0.2,4c-2.9,1-5.9-2.4-1.8-1.7c0.2,0,0.5,0.1,0.8,0.1c5.2,1.2,5.9,4.2,2.6,3.4c-3.3-0.8-3.7-5.4-5.4-7.7c-1.8-2.4-10.2-10.6-19.2-8.9c-9,1.7-6.2,7.9-4.9,10.1c1.3,2.2,12.3,1.6,16,0.9s10.5,1.4,10.5,1.4l-3,2.9l-0.7,1.5l9,12.6"/><line id="XMLID_43_" class="st0" x1="213.8" y1="141.6" x2="225.5" y2="159.4"/><line id="XMLID_44_" class="st0" x1="202.8" y1="148.5" x2="220.6" y2="147.5"/><line id="XMLID_45_" class="st0" x1="206.3" y1="154.6" x2="217.2" y2="160.7"/><path id="XMLID_46_" class="st0" d="M162.2,198.4c0,0-1.6,6.6,7.6,11.3c9.2,4.7,19.5,0,19.5,0s3.7,13,11.8,16.7c8.1,3.7,22.8,0,31.1-9.8s27.9-35.1,32.9-66.6"/><path id="XMLID_47_" class="st0" d="M267,161.6c-0.1,1-9.1,42.4-34,63.9s-41.1,32.7-53.8,31.5c-12.6-1.2-20-4.7-26.5-22.6"/><line id="XMLID_48_" class="st0" x1="195.8" y1="157.7" x2="223.7" y2="171.6"/><path id="XMLID_36_" class="st0" d="M213.4,96.2c0,0-10.1-2-15.4,0c-5.3,2-18.7,10.3-30.1,13.8s-35.4,8.5-46.6,11c-11.2,2.6-24.2,6.7-33.5,13.4c-9.3,6.7-9.6,5.4-10.5,9.5s-2.6,7.8,7,17s28.2,16.3,44.5,18s43.6-1.1,43.6-1.1"/><path id="XMLID_49_" class="st0" d="M288.8,105.8c0,0,7.6,13.6,6,24.3c-1.6,10.6-5.5,16.1-5.5,16.1s2.7,8.8-3.7,15.4c-6.4,6.6-19.8,7.8-19.8,7.8"/><path id="XMLID_51_" class="st0" d="M290.5,109.3c0,0,0.6,9.8-8.8,14.2"/><path id="XMLID_52_" class="st0" d="M293.9,118.9c0,0,0.2,11.2-20.4,17.1"/><path id="XMLID_53_" class="st0" d="M289.2,146.2c0,0-9.5,9.8-21.8,10.3"/><path id="XMLID_54_" class="st0" d="M133,118.4c-0.5,0.1-13.5,4.5-11.2,9s13.8,6.1,20.3,3.3c-10.3,7.3-21.2,6.3-17.4,16.1c3.8,9.8,14.8,12.3,25.3,13.2s29.1-2.8,33.7-5.4"/><path id="XMLID_55_" class="st0" d="M114,122.8c0,0-3.2,5.5-1.5,7.7c1.7,2.2,2.1,2.9,10,6.5c-9.4,3.9-9.2,11.7-3.9,17.6s16.9,10.4,24,11.7c7.1,1.3,29.3-0.7,37.7-4.8"/><path id="XMLID_56_" class="st0" d="M78.6,140.9c0,0-0.8,8.8,1.7,11.3c2.5,2.6,14.2,14,29.4,17.6c15.2,3.6,42,7.1,64.3,4.5"/><path id="XMLID_57_" class="st0" d="M150.5,114.5c0,0,3.7,7,14.7,1.9c2,4.5,2,4.5,2,4.5s-10,4.4-9.5,15.1c0.5,10.7,2.3,18.6,2.3,18.6l23.6-4.1c0,0-3.9-9.6,0-13.4c3.9-3.8,13.2-8.4,13.2-8.4"/><path id="XMLID_58_" class="st0" d="M193.9,132.2c0,0-4.2-0.7-4.1-9.4c0-3.8,4.3-9.4,5.2-12.5c0.8-3.1,0.8-7.9,1.8-9.5c1-1.6,3.2-1,1.9,1.7c-1.3,2.7-4.1,0.5-3.6-1.6c0.5-2.1,2.1-5,2.7-2.6c0.6,2.5-2,8.8-2.8,6.4c-0.8-2.4,3.7,4.1,3.7,4.1l-12.9-6.6"/><path id="XMLID_50_" class="st0" d="M176.5,105.3c0,0,3.1-0.2,3.7-1.2c0.7-1,5.9-6.8,8.2-7.7c2.3-0.9,5.6-4,7.9-1.7c2.3,2.4,5.1,2.9,2.7,4.8s-8.6,1.7-5.2,2.9s5.3-7,5.3-8.6c-0.1-1.6,0.8-3.2-2.3-3.6c-3.1-0.4-8.8,0.7-4.4,5.6s6.2,4.3,4.4,4.9c-1.8,0.6-1.6-6.7,0-2.2c1.6,4.5-3.1-0.4-3.1-0.4l-2.8,14.9"/><line id="XMLID_60_" class="st0" x1="167.2" y1="120.9" x2="196.4" y2="104.3"/><line id="XMLID_61_" class="st0" x1="165.1" y1="116.4" x2="196.3" y2="100.8"/><path id="XMLID_62_" class="st0" d="M206.3,95.3c-0.4,0-6,1.6-5.8,3.5c0.2,1.9,1.5,2.2,0.8,4.3c-0.7,2.2-2.2,7.2,2.7,11.4"/><line id="XMLID_63_" class="st0" x1="183.6" y1="111.6" x2="177.6" y2="106.2"/><line id="XMLID_64_" class="st0" x1="180.6" y1="118.9" x2="182.5" y2="107.7"/><line id="XMLID_65_" class="st0" x1="175.7" y1="116.1" x2="167.2" y2="110.2"/><line id="XMLID_66_" class="st0" x1="172.2" y1="122.8" x2="174" y2="112"/><path id="XMLID_67_" class="st0" d="M163.2,130.6c0,0,0.5-12.9-4.2-18"/><path id="XMLID_68_" class="st0" d="M230.6,106.2c0,0,1.1-20.8,17.1-37.5s22.7-18.4,25.8-16.8s11.4,8.7,9.8,15.7"/></g></svg>
                </div>
            </div>
            <div class="svg-wrapper">
                <div class="progress-circle"><span>2108</span> SUITS</div>
                <div class="progress-svg-container">
                    <svg id="progress-suits-svg" class="progress-svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path id="XMLID_23_" class="st0" d="M97.1,137.8c0,0-1.8,16.7-3.1,25.2c-1.3,8.6-3.4,26.8-3.9,37.7c-0.5,10.9-1,60.6-1,60.6l-35.9,2.1c0,0,0.8-3.9,1.6-14.3c0.8-10.4,2.1-61.1,1.8-75.7c-0.3-14.6,3.1-57.8,3.1-57.8c1.3-10.9,7.5-40.1,8.8-52.6c1.3-12.5,6.5-23.2,9.4-25.5c2.9-2.3,29.1-10.4,29.1-10.4s15.6-4.4,22.1-7.8s7-7.8,9.9-8.8s11.2,1.8,23.4,2.3s21.9-4.1,23.9-2.6s0,20,0,20s-12,71.3-14.1,83s-13,39.8-14.8,48.1c-1.8,8.3-2.1,69-0.5,74.7c1.6,5.7,4.4,38,9.4,43.5c4.9,5.5,8.3,6.2,17.4,6.8c9.1,0.5,43.7-2.3,45.8-10.9s-2.6-54.4-2.9-59.8c2.1-1,2.1-1,2.1-1s-4.2-27.1-4.4-33.3c-0.3-6.2,2.3-30.4,4.2-42.7s7.3-33.6,6.5-48.1s5.7-46.8,9.6-50.7"/><path id="XMLID_22_" class="st0" d="M80,39.7c0,0,5.3,16.1,7.4,30.2c2.1,14.1,2.3,45.3,5.2,52s6.8,22.9,7.5,40.9C101,180.7,95,213,95,213l0.8,2.1c0,0-6,57.2-4.4,62.7s36.7,13.8,47.6,12s21.6-29.7,21.6-29.7"/><path id="XMLID_24_" class="st0" d="M186.3,10.3c0,0,0.8,2.8,6.5,6.7s27.1,9.4,32.8,12.2c5.7,2.9,21.9,7.8,24.5,10.4c2.6,2.6,4.4,18.7,6,25.8c1.6,7,8.6,51.8,8.3,60.1c-0.3,8.3,2.6,42.4,2.3,61.1c-0.3,18.7,0.6,76.2,0,77.3c-0.5,1-36.9-3.6-36.9-3.6"/><path id="XMLID_25_" class="st0" d="M229.3,249.7c-0.1-1,2-39.1,2-39.1l-3.1-70.5"/><path id="XMLID_27_" class="st0" d="M97.6,196.7c0,0,18,4,21.6,3.3c1.6-0.3,0.8,17.7-1.3,17.7S95,213,95,213"/><path id="XMLID_26_" class="st0" d="M225.9,194.9c-4.6,3.3-22.6,5-22.6,5s-0.1,18.1,1,19.1c1.1,1,22.4-3.4,22.4-3.4"/><path id="XMLID_28_" class="st0" d="M139,10.5c0,0,0.8,30.4,1.8,45.8s15.8,75.2,22.2,87.5"/><path id="XMLID_29_" class="st0" d="M197.7,19.5l14.6,13.4l-10.7,5.2l13.3,6.2c0,0-4.5,34.1-58,120.5"/><path id="XMLID_30_" class="st0" d="M126.6,20.5L114.2,34l6.2,2.6l-12.9,5.2c0,0,9.9,40.3,52.5,110.9"/><path id="XMLID_32_" class="st0" d="M139,20.5c0,0,23.7,8.4,48.2,0"/><path id="XMLID_31_" class="st1" d="M163.7,156.5c0,0-3.1,0.1-3.2,3.7c-0.1,3.5,2.7,3.5,4.1,3.7c2.1,0,5-4.7-0.4-7.4"/><path id="XMLID_34_" class="st1" d="M162.8,196.7c0,0-3.1,0.1-3.2,3.7c-0.1,3.5,2.7,3.5,4.1,3.7c2.1,0,5-4.7-0.4-7.4"/><path id="XMLID_35_" class="st1" d="M197.8,90.9c0,0,22.1-1.3,28.8-2.3c0,7.3,0,8.3,0,8.3s-20.6,3.4-33.3,3.2"/><line id="XMLID_36_" class="st1" x1="201.7" y1="47.7" x2="207.9" y2="50.3"/></svg>
                </div>
            </div>
            <div class="svg-wrapper">
                <div class="progress-circle"><span>234</span> SUITCASES</div>
                <div class="progress-svg-container">
                    <svg id="progress-suitcases-svg" class="progress-svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><g id="XMLID_20_"><path id="XMLID_2_" class="st0" d="M134.1,55.7c0,0-7.7-2.2-12.4,0c-4.7,2.2-13.7,5.2-15.6,8.2c0,0-3.6,1.1-3.9,18.4s0,52.9,0,52.9s-3.9,7.7-4.2,9.9c-0.3,2.2-2,41.2,3,48.1c0,12.1,0,52.2,0,52.2s-0.1,2.5,1.8,5.2c-3.1,0-3.5-1.2-4.7,0c-1.2,1.2-4.8,5.6-2.6,17.9c1.1,5.1,3.4,7,6.3,7.5s8.2,1.1,10.5-3.4c4.5,3.8,6,7.4,8.4,9.6c2.3,2.2,12.5,2.1,15.7,1.5s10.4,2.7,14.2,6c5.5,1.4,10.7-1,13.8-1.6s35.7-6.2,45.3-5.3c9.6,0.8,13.3,0.4,16.4-2.2c3.1-2.6,11.4-10.3,12.9-11.1c1.5-0.8,8.5,0.7,12.3-1.2c3.8-1.9,3.3-5.3,3.4-10.4c0.1-5.1,0-7,0-7s2.6-1.9,3.6-3.3s2.7-66.7,2.7-74.5s-0.1-45.3-1.2-50.8c0,0,2.3-32.3-2.1-44.2c-4.4-11.9-7.5-14.2-14.7-14.7c-7.9-6.7-4.2-5.8-7.9-6.7s-69.8-0.6-76.7-1.8c-6.8-1.2-16.2-5.3-20-2.7C134.8,54.6,134.1,55.7,134.1,55.7"/><path id="XMLID_1_" class="st0" d="M154.6,53.8c0,0,6.9-7.3,11.3-8.4c4.4-1,17.4-3.2,23.7,10.2"/><path id="XMLID_3_" class="st0" d="M197.8,55.7c0,0-2.3-4-4.6-5.6c-2.4-1.6-12.4-8-18.7-7s-6.8-0.9-11.5,5.5s-4.3,6-4.3,6"/><line id="XMLID_5_" class="st0" x1="183" y1="56" x2="183" y2="49"/><path id="XMLID_4_" class="st0" d="M183,44V28.3c0,0,3.4-3.6,6.7-3"/><path id="XMLID_6_" class="st0" d="M144,52V24.2c0,0-3.1-5.5-10.1-2.4"/><line id="XMLID_8_" class="st0" x1="145.2" y1="24.2" x2="183" y2="28.3"/><path id="XMLID_9_" class="st0" d="M135,54V23.4c0,0-0.1-2.6-1.5-4.5s-1.7-7.1,1.4-8.6s56,5.6,57.4,6.4c1.4,0.8,4.7,2.6,1.3,7s-3.7,2.6-3.7,2.6V49"/><path id="XMLID_7_" class="st0" d="M121.1,58.4c0,0,8.1-5.3,10.5,13.2c2.5,18.5,1,94.7,1,94.7L131.4,268c0,0,0.8,14.8-4.3,15.7"/><path id="XMLID_11_" class="st0" d="M118.9,59.3c0,0-3.3,5.3-3.3,14s-4.5,42.7-3.9,56.9c0.6,14.2-0.1,75.6-0.1,75.6s-1.8,55.1,1.7,60.2s0.5,7.9,0.5,7.9"/><path id="XMLID_12_" class="st0" d="M101.4,250.3c0,0,1.8,3.7,2.4,7.6c0.6,3.9-1.6,6,1.4,8.8s7,5.7,7,5.7"/><path id="XMLID_10_" class="st0" d="M141.1,105c0,0,109.4-0.1,112.3,2.2c2.9,2.3,4.7,27.1,4.7,32s-3.1,106.2-3.1,106.2l-17,20.3l-76.8,10.5l-19.3-19.1c0,0,3.3-42.1,3.3-70.3s-0.4-62.7-4.1-82.2"/><path id="XMLID_14_" class="st0" d="M132,104h5c0,0,2.9,29.7,3.1,41.4c0.3,11.8,1.5,50.6,0.8,65.1c-0.7,14.5-5.2,45.6-3.3,49.3c1.9,3.7,19.7,19.6,22,20.4c2.3,0.8,76.3-7.8,81.6-13c5.3-5.2,13.1-16.9,13.1-16.9"/><line id="XMLID_15_" class="st0" x1="139.3" y1="283.8" x2="159.7" y2="280.3"/><path id="XMLID_16_" class="st0" d="M137.1,53c0,0,8.9,18.8,9.3,30.5c14.4,0,93.5,1,103.5,3.1c0-11.3-8.2-24.7-8.2-24.7"/><path id="XMLID_13_" class="st0" d="M135,57.7c0,0-0.5,3,2,9c2.5,6,1.7,21,1.7,21"/><path id="XMLID_18_" class="st0" d="M135.9,87.5c0,0,111.5,1.9,121,5.6c1.2,9.2,1.2,8.2,1.2,8.2s-109.7-3.9-115.7-3.1s-5.5,0-5.5,0l-1-10.3"/><path id="XMLID_19_" class="st0" d="M98.6,253.1c0,0,6.6,5.8,1.1,19.3"/><path id="XMLID_17_" class="st0" d="M173.2,238.6c0,0,47.8-1,59.8-5.7c0,8.6,0,10.7,0,10.7s-43,6.6-60,4.3c0-5.6,0-8.9,0-8.9"/></g></svg>
                </div>
            </div>
            <div class="svg-wrapper">
                <div class="progress-circle"><span>1416</span> TIES</div>
                <div class="progress-svg-container">
                    <svg id="progress-ties-svg" class="progress-svg" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><g id="XMLID_2_"><path id="XMLID_21_" class="st0" d="M183.4,55.3c0,0-3.1-4.3-6.2-8.4c-3.2-4.1-7.2-8.5-11.7-10.5c-4.5-2-8.5-6.5-8.5-6.5s-5.2-7.2,1.1-12c6.3-4.8,32.3-6.9,32.3-6.9s20.4-2.3,27.6,0c7.2,2.3,12.8,2.6,14.4,6.5s1.2,12.6,2,14.3c0,0,1,6,0.4,8.8c-0.6,2.8-1.1,10.8-13.5,20.1c-5.3,4-6.9,3.3-8.3,3.7c-1.4,0.4-3.7,0.4-3.7,0.4"/><path id="XMLID_37_" class="st0" d="M158.6,31.4c2.1-4.8,33.7-6.8,33.7-6.8s24.5-1.3,30.6,1.1c4.1,1.6,5.8,2.1,5.8,2.1"/><path id="XMLID_38_" class="st0" d="M231.4,21.6c0,0-2.7,6.1-2.7,7.5c0,1.4,0.5,2.4-1.7,3.9c-2.3,1.5-10.6,8.3-11.2,9.7c-0.7,1.4-4.1,4.9-5.8,8.9c-1.6,4-3.2,5.6-3.7,6c-0.5,0.4,1.1,3.9,0.6,6.3"/><path id="XMLID_39_" class="st0" d="M208.6,65.5c0,0-5.6-5.5-13.2-6.7c-7.6-1.2-15.2,2.7-15.2,2.7s5.7,6.7,7,9.2s2.8,5.2,2.9,7.9c2.8-2.2,8.6,1.1,10.1,2.1c1.5,1,1.1,1.4,1.1,1.4s0.2-4.6,1.9-7.9S208.6,65.5,208.6,65.5"/><path id="XMLID_40_" class="st0" d="M211.9,48.1c0,0-0.1,7.8-2,10.1c-1.9,2.3-3,4.8-3,4.8"/><path id="XMLID_41_" class="st0" d="M183.4,60.3c0,0-1.2-2.3,0-3.7c1.2-1.4,3.1-1.1,3.1-1.1s2.6,0.9,4.9,1.3s14.8,0.9,14.8,0.9"/><path id="XMLID_42_" class="st0" d="M181.6,61c0,0-5.5-0.1-7.4-1.4c-1.9-1.3-12.6-9.6-15.6-14.4c-3-4.8-3.5-8-3-11.4c0.4-3.5-0.5-9.5-0.5-9.5"/><path id="XMLID_44_" class="st0" d="M157.1,29.9c0,0-2.8-5.5,8.5-8.3c11.3-2.8,39.8-4.1,43.1-3.4s18.2,1.9,22,5.3"/><path id="XMLID_43_" class="st0" d="M191.4,78c-1,2.1-1.5,4.6-3.1,8.5c-1.6,3.9-10.8,22.1-11.1,44.7s-4.7,56.8-4.9,73.6c-0.2,16.8-4.6,50.4-5.6,55.9c2.6,5.6,21.4,26,26.3,29.3c8-4.6,25.5-22.6,26.2-24.4c0.7-1.8-4.1-73.9-3.8-79.5c0.3-5.6-1.8-47.8-2.5-52.5c-0.7-4.7-1.9-25.7-3.6-29.3c-1.7-3.6-9.1-22-9.1-23.7"/><path id="XMLID_45_" class="st0" d="M190.7,79.7c0,0,8,6.8,12.3,14.7c4.3,7.9,5.6,7.5,5.6,7.5"/><path id="XMLID_46_" class="st0" d="M186.4,90.8c0,0,10.7,10,15.8,17c5.1,7,9.6,13.4,9.6,13.4"/><path id="XMLID_47_" class="st0" d="M182.2,101.9c0,0,12.4,12.9,14.4,15.5s16.6,18.5,16.6,18.5"/><line id="XMLID_49_" class="st0" x1="179" y1="114.4" x2="214.2" y2="151.6"/><path id="XMLID_48_" class="st0" d="M177.2,129.1c0,1,19.4,21.3,22.5,23.9c3,2.6,13.5,13.1,15.4,16.5"/><path id="XMLID_51_" class="st0" d="M176.6,144.8c0,0.3,16.4,16.8,19.5,20.8c3.1,3.9,15.7,15.4,17.1,17.2c1.4,1.8,2.2,3.4,2.2,3.4"/><path id="XMLID_52_" class="st0" d="M175.5,160.3c0.9,1,14.3,15.7,17.5,19.2c3.2,3.4,16.7,15.7,18.8,19.1c2.1,3.4,3.6,5.1,3.6,5.1"/><path id="XMLID_53_" class="st0" d="M174.2,175.7l23.5,25.5c0,0,14.9,16.2,16.5,18.2c1.6,2,3,2.9,3,2.9"/><path id="XMLID_54_" class="st0" d="M172.9,192.2l24.9,26.4c0,0,10,12.4,14.3,16.2c4.3,3.8,6.2,6.2,6.2,6.2"/><path id="XMLID_55_" class="st0" d="M172.2,208.2c0,0,14.2,14.9,16.5,17.7c2.3,2.8,16.7,20.6,19.2,22.9c2.4,2.3,11.3,10.4,11.3,11.2"/><path id="XMLID_50_" class="st0" d="M171.1,224.4c0,0.5,15,18.7,17.6,21.3c2.6,2.6,21.1,21.9,24,25.8"/><path id="XMLID_57_" class="st0" d="M169.2,241.8c0,0,32.3,35.8,35,39.3"/><path id="XMLID_58_" class="st0" d="M167.2,257.3c0,0,22.3,28.3,27.7,31.5"/><path id="XMLID_56_" class="st0" d="M184.7,67c0,0,0.6-3.5,3.6-5.5c2.9-2,4.7-2.3,4.7-2.3"/><path id="XMLID_59_" class="st0" d="M190,74.8c0,0-2.2-3.7,1.9-6.2c4-2.5,13.2-3.4,15.6-1.2"/><path id="XMLID_61_" class="st0" d="M194.5,78c0,0,3.2-2.8,7.9-1.2"/><path id="XMLID_62_" class="st0" d="M210.5,64.8c0,0,2.2-3.1,2.7-5.2c0.5-2.1-0.5-2.6,0-6.2c0.5-3.6,2.5-10.7,2.5-10.7"/><path id="XMLID_60_" class="st0" d="M228.2,32c0,0-3.2,7.4-4,13.8c-0.8,6.4-2,13.2-5.5,16.7"/><path id="XMLID_63_" class="st0" d="M232.8,22.9c0,0-1.9,7.2-0.8,11s-0.1,12.6-2,18.3"/><path id="XMLID_65_" class="st0" d="M222.9,12.4c-0.4-0.1-8.3,5.6-12,6.2"/><path id="XMLID_66_" class="st0" d="M202.7,24.3c0.5,0,6-3.7,7.2-5.7"/><path id="XMLID_67_" class="st0" d="M196.8,18.2c0.3,0,8.7-7.8,10.2-8.2"/><path id="XMLID_68_" class="st0" d="M188.8,24.9c0,0,5.7-4.6,7.3-6.7"/><path id="XMLID_69_" class="st0" d="M172.8,26.7c0.6-0.1,9.8-6.4,9.5-7.6"/><path id="XMLID_70_" class="st0" d="M172.1,20.4c0,0,9.1-6,8.8-8.3"/><path id="XMLID_71_" class="st0" d="M160.2,23.6c0.3-1.1-1.9-0.4,4.4-8.5"/><path id="XMLID_64_" class="st0" d="M159.1,30.7c0,0-1.2-0.5,2.5-4s4.4-5.3,4.4-5.3"/><path id="XMLID_72_" class="st0" d="M215,24.3c0,0,5,0,7-1.4c2-1.4,3.2-1.8,3.2-1.8"/><path id="XMLID_73_" class="st0" d="M226.8,21.6c0.8-0.4,2.9-2.9,4.6-2.2c1.7,0.6,2.1,3.3,2.1,3.3"/><line id="XMLID_75_" class="st0" x1="169.8" y1="56.2" x2="177.6" y2="53.8"/><path id="XMLID_74_" class="st0" d="M175.4,48.1c0.2,0.8,3.5,6.1,3.9,9.1c0.4,2.9,0,3.8,0,3.8"/><path id="XMLID_77_" class="st0" d="M176.3,45.6c-0.7,0.4-2.4-0.3-4.9,0s-7.9,0.4-8.8,0.1c-1-0.3-3.9-0.5-3.9-0.5"/><path id="XMLID_76_" class="st0" d="M155.5,33.8c0,0,2.9,2.8,4.6,2.9s4.5-0.8,4.5-0.8"/></g></svg>
                </div>
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