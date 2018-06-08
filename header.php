<!DOCTYPE html>
<html>
<head>
<title>TrungTien</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">
</head>
<body>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header">
          <div class="header_left"><a class="logo" href="<?php bloginfo('home_url') ?>">Thuy<strong>Nguyen</strong> <span><?php bloginfo('description') ?></span></a></div>
          <div class="header_right">
			 <div class="slick_slider2">
                <div class="single_featured_slide">
					<a href="https://network.topdev.vn/out&amp;a&amp;c&amp;ZndGQkg0WjNobUU9" target="_blank"><img class="img-responsive" src="<?php bloginfo('template_directory') ?>/assets/image/banner1.png"> </a>
				</div>
				<div class="single_featured_slide">
					<a href="https://network.topdev.vn/out&amp;a&amp;c&amp;ZmZBTGFCUCt5R1k9" target="_blank"><img class="img-responsive" src="<?php bloginfo('template_directory') ?>/assets/image/banner2.png"> </a>    
				</div>
				<div class="single_featured_slide">
					<a href="https://network.topdev.vn/out&amp;a&amp;c&amp;L3NhMDNZWEs1Lzg9" target="_blank"><img class="img-responsive" src="<?php bloginfo('template_directory') ?>/assets/image/banner3.png"> </a>			
				</div>
            </div>
		  </div>
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="latest_slider"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse">
            <?php wp_nav_menu( array(
                'theme_location' => 'cat-nav',
                'container' => 'ul',
                'menu_class' => 'nav navbar-nav custom_nav',
            ) ); ?>
        </div>
      </div>
    </nav>
  </div>