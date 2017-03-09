<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php bloginfo('name'); ?>  <?php wp_title(); ?> </title>
    <meta charset="utf-8">

    <?php wp_head(); ?>  

    <script type="text/javascript">
        $(document).ready(function() { 
            $(".jCarouselLite").jCarouselLite({
                  btnNext: ".next",
                  btnPrev: ".prev",       
                  speed: 400,         
                  vertical: false,
                  circular: true,
                  easing:'easeOutQuart',
                  visible: 4,
                  start: 0,
                  scroll: 1
             });
        });
    </script>    

    <!--[if lt IE 7]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
        </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>
<body id="page1">
	<!--==============================header=================================-->
    <header>
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	

                        <!--
                        <nav>
                            <ul class="menu">
                                <li><a class="active" href="index.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="catalogue.html">Catalogue</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                            </ul>
                        </nav>
                        -->

<?php wp_nav_menu( array(
    'theme_location'  => 'primary'


));  ?>

                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	<h1>
                            <a class="logo" href="index.html">Int<strong>e</strong>rior</a>
                            <span>Design</span>
                        </h1>
                    </div>
                    <div class="grid_3">
                    	<form id="search-form" method="post" enctype="multipart/form-data">
                            <fieldset>	
                                <div class="search-field">
                                    <input name="search" type="text" />
                                    <a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"><span>search</span></a>	
                                </div>						
                            </fieldset>
                        </form>
                     </div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header><div class="ic">More Website Templates  @ TemplateMonster.com - August22nd 2011!</div>

