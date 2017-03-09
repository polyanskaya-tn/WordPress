<?php
	/*
		Template Name: aboutus
	*/
?>

<?php get_header(); ?>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="gallery p3">
                            	<div class="wrapper indent-bot">
                                    <div id="gallery" class="content">
                                       <div class="wrapper">
                                           <div class="slideshow-container">
                                                <div id="slideshow" class="slideshow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="thumbs" class="navigation">
                                        <ul class="thumbs noscript">
                                            <li>
                                                <a class="thumb" href="<?php bloginfo('template_url'); ?>/images/gallery-img1.jpg" title=""> <img src="<?php bloginfo('template_url'); ?>/images/thumb-1.jpg" alt="" /><span></span> </a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="<?php bloginfo('template_url'); ?>/images/gallery-img2.jpg" title=""> <img src="<?php bloginfo('template_url'); ?>/images/thumb-2.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="<?php bloginfo('template_url'); ?>/images/gallery-img3.jpg" title=""> <img src="<?php bloginfo('template_url'); ?>/images/thumb-3.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="<?php bloginfo('template_url'); ?>/images/gallery-img4.jpg" title=""> <img src="<?php bloginfo('template_url'); ?>/images/thumb-4.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="<?php bloginfo('template_url'); ?>/images/gallery-img5.jpg" title=""> <img src="<?php bloginfo('template_url'); ?>/images/thumb-5.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="<?php bloginfo('template_url'); ?>/images/gallery-img6.jpg" title=""> <img src="<?php bloginfo('template_url'); ?>/images/thumb-6.jpg" alt="" /> <span></span></a>
                                            </li>           
                                        </ul>
                                    </div>
                                </div>
                                <div class="inner">
                                    <div class="wrapper">
                                        <span class="title img-indent3">For life</span>
                                        <div class="extra-wrap indent-top2">Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctioam libero tempore cum soluta. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container_12">
                            	<div class="wrapper">
                                	<article class="grid_12">
                                    	<h3 class="color-1">Our Services List</h3>
                                        <div class="wrapper">
                                        	<article class="grid_6 alpha">
                                                <figure class="img-indent frame"><img src="<?php bloginfo('template_url'); ?>/images/page1-img1.jpg" alt="" /></figure>
                                                <div class="extra-wrap">
                                                    <div class="indent-top">
                                                        <ul class="list-1">
                                                             <li><a href="#">Interior Decorating Services</a></li>
                                                             <li class="last"><a href="#">Complete Color <br>Analysis</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </article>
                                            <article class="grid_6 omega">
                                                <figure class="img-indent frame"><img src="<?php bloginfo('template_url'); ?>/images/page1-img2.jpg" alt="" /></figure>
                                                <div class="extra-wrap">
                                                    <div class="indent-top">
                                                        <ul class="list-1">
                                                             <li><a href="#">Design Services <br>for Home Construction</a></li>
                                                             <li class="last"><a href="#">Interior Design Remodeling</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </article>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="bg-bot">
        	<div class="main">
            	<div class="container_12">
                	<div class="wrapper">
                    	<article class="grid_4">
                        	<h3 class="prev-indent-bot">About Us</h3>
                            <p class="prev-indent-bot">At vero eos et accusamus et iusto odio tium voluptatum deleniti atque corrupti quos
dolores et quas molestias excepturi sint occaecati cupiditate.</p>
                            At vero eos et accusamus et iusto odio tium voluptatum deleniti atque corrupti quos
dolores et quas molestias excepturi sint occaecati cupiditate.
                        </article>
                        <article class="grid_4">
                        	<h3 class="prev-indent-bot">Testimonials</h3>
                            <div class="quote">
                            	<p class="prev-indent-bot">At vero eos et accusamus et iusto odio tium voluptatum deleniti atque corrupti quos<br> dolores et quas molestias excepturi sint occaecati cupiditate.</p>
                                <h5>James Reese</h5>
                                Managing Director
                            </div>
                        </article>
                        <article class="grid_4">
<?php dynamic_sidebar('sidebar1'); ?>
<!--
                            <time class="tdate-1" datetime="2011-08-15"><a class="link" href="#">15.08.2011</a></time>
                            <p class="prev-indent-bot">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                            <time class="tdate-1" datetime="2011-08-11"><a class="link" href="#">11.08.2011</a></time>
                            Totam rem aperiam, eaque ipsa quae ab illo inven tore veritatis et quasi architecto.

-->
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>
