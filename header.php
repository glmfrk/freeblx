<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="<?php language_attributes();?>">
<!--<![endif]-->
<head>

<!-- Basic Page Needs ================================================== 
================================================== -->

<meta charset="<?php bloginfo('charset') ;?>">

<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="author" content="Faruk">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Mobile Specific Metas ================================================== 
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS ==================================================
================================================== -->

<link rel="stylesheet" href="<?php echo esc_url (get_template_directory_uri());?>/css/base.css">
<link rel="stylesheet" href="<?php echo esc_url (get_template_directory_uri());?>/css/skeleton.css">
<link rel="stylesheet" href="<?php echo esc_url (get_template_directory_uri());?>/css/screen.css">
<link rel="stylesheet" href="<?php echo esc_url (get_template_directory_uri());?>/css/prettyPhoto.css" type="text/css" media="screen" />

<!-- Favicons ==================================================
================================================== -->

<link rel="shortcut icon" href="<?php echo esc_url (get_template_directory_uri());?>/images/favicon.png">
<link rel="apple-touch-icon" href="<?php echo esc_url (get_template_directory_uri());?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url (get_template_directory_uri());?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url (get_template_directory_uri());?>/images/apple-touch-icon-114x114.png">

<!-- Google Fonts ==================================================

<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

================================================== -->
<link rel="stylesheet" href="<?php echo esc_url (get_template_directory_uri());?>/css/font/font-awesome.min.css" />
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url');?>" />

<?php wp_head();?>

</head>
<body <?php body_class();?>>

<!--Content Part ==================================================
================================================== -->
<div class="header_top">
	<div class="container social_container">


		<div id="Search" >
			<input type="text" placeholder="Find Your Topic"/>
			<button>search</button>
		</div>
		<ul class="social_menu">
			<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/socials/twitter.png" alt="twitter" /></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/socials/facebook.png" alt="facebook" /></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/socials/dribbble.png" alt="dribbble" /></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/socials/linkedin.png" alt="linkedin" /></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/socials/youtube.png" alt="youtube" /></a></li>
		</ul>
		<div class="ph_Eml">
			<span class="icon-envelope"><a href="#">gulamfrk@gmail.com</a></span>
			<span class="icon-phone"><b>01740-803644</b></span>
		</div>
	</div>
</div>
<div id="header">
  <div class="container"> 
    <!-- Header | Logo, Menu
		================================================== -->
    <div class="logo"><a href="<?php bloginfo ('home');?>"><img src="<?php echo esc_url (get_template_directory_uri());?>/images/logo.png" alt="" /></a></div>
    <div class="mainmenu">
	
		  <?php 
	  
	  if(function_exists ('wp_nav_menu')){
		  wp_nav_menu(array(
		  
		  	'theme_location' => 'top',
		  	'container' => 'div',
		  	'container_id' => 'mainmenu',
		  	'menu_class' => 'sf-menu',
		  	'depth' => '5',
			'walker' => new Freeblx_Walker()
			
		  
		  ));
	  }
	  
	  ?>
	  

    </div>
    <!-- mainmenu ends here --> 

  </div>
  <!-- container ends here --> 
</div>
<!-- header ends here --> 