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
        <div class="progress-container">
            <div class="progress-pants">

            </div>
            <div class="progress-shirts"></div>
            <div class="section-lead-text"><strong>5848</strong> dress shirts donated and counting.</div>
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

<section class="section section-participate" id="participate">
    <div class="container">
        <div class="section-icon">
            <img src="/img/section-participate.png" alt="">
        </div>
        <div class="section-lead">
            <span>PARTICIPATE</span><br>
            The more we do, the more we enable them to do.
        </div>

        <div class="section-participate-contain">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-participate-box" onclick="openContactForm();">
                        <div class="section-participate-box-title">
                            DONATE
                        </div>
                        <div class="section-participate-box-content">
                            Time, money, or hands that want to help. Whatever you can give is enough to make a difference.
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="section-participate-box" onclick="openContactForm();">
                        <div class="section-participate-box-title">
                            SIGN-UP
                        </div>
                        <div class="section-participate-box-content">
                            We are happy to come to your school. Let us know who you are and how we can help.
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    consider “the worth of each soul” to be great and equal throughout the world and
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

<div class="modal fade" id="contactFormModal">
    <div class="modal-dialog">
        <div class="modal-content modal-content-form">
            <form id="contactForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        Contact Us
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name<span>*</span> <span></span></label>
                                <input name="name" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email<span>*</span> <span></span></label>
                                <input name="email" class="form-control" type="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Institution</label>
                                <input name="institution" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="phone" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea name="comment" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
        <div class="modal-content modal-content-success">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    Contact Us
                </h4>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h2>Thank you</h2>
                    <p class="lead">
                        We'll get back to you soon.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<script src="/lib/jquery/jquery.min.js"></script>
<script src="/lib/jquery-validate/jquery.validate.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/velocity/velocity.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/main.js"></script>
</body>
</html>