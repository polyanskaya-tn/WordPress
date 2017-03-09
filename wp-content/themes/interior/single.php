<?php get_header(); ?>

<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="box">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">

                                                <!--
                                            	<div class="indent-left p2">
                                                	<h3 class="p0">Latest Income</h3>
                                                </div>
                                            -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
            <div class="indent-left indent-right">
                <h3 class="p2 color-4 prev-indent-bot"><?php the_title(); ?></h3>
                <figure class="img-indent2 frame2 p2"><?php the_post_thumbnail( 'full', '' ); ?></figure>
                <?php the_content(); ?>
                    <span class="price fleft">$45.99</span>
            </div>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
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
                        	<h3 class="p2">New Furniture</h3>
                            <div class="wrapper">
                            	<figure class="img-indent frame2"><img src="<?php bloginfo('template_url'); ?>/images/page4-img7.jpg" alt="" /></figure>
                                <p class="prev-indent-bot color-4">At vero eos eaccusa mus etusto odio.</p>
                                <p class="prev-indent-bot">Tium voluptatum del eniti atque corrupti quos dolores.</p>
                                <a class="button" href="#">View More</a>
                            </div>
                        </article>
                        <article class="grid_8">
                        	<h3 class="prev-indent-bot2">Our Pricing</h3>
                            <div class="wrapper">
                            	<div class="grid_4 alpha">
                                	<div class="indent-right2">
                                        <ul class="price-list">
                                            <li><span>$6700.00</span><a href="#">Totam rem aperiam eaque</a><strong>&nbsp;</strong></li>
                                            <li><span>$4370.00</span><a href="#">Inventore veritatis quasi</a><strong>&nbsp;</strong></li>
                                            <li><span>$5780.00</span><a href="#">Nemo enim ipsam voluptatem</a><strong>&nbsp;</strong></li>
                                            <li><span>$2300.00</span><a href="#">Voluptas sit aspernatur aut</a><strong>&nbsp;</strong></li>
                                            <li><span>$3650.00</span><a href="#">Sed quia consequuntur magni</a><strong>&nbsp;</strong></li>
                                            <li class="last"><span>$7900.00</span><a href="#">Ratione voluptatem sequi</a><strong>&nbsp;</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid_4 omega">
                                	<div class="indent-right2">
                                        <ul class="price-list">
                                            <li><span>$6700.00</span><a href="#">Totam rem aperiam eaque</a><strong>&nbsp;</strong></li>
                                            <li><span>$4370.00</span><a href="#">Inventore veritatis quasi</a><strong>&nbsp;</strong></li>
                                            <li><span>$5780.00</span><a href="#">Nemo enim ipsam voluptatem</a><strong>&nbsp;</strong></li>
                                            <li><span>$2300.00</span><a href="#">Voluptas sit aspernatur aut</a><strong>&nbsp;</strong></li>
                                            <li><span>$3650.00</span><a href="#">Sed quia consequuntur magni</a><strong>&nbsp;</strong></li>
                                            <li class="last"><span>$7900.00</span><a href="#">Ratione voluptatem sequi</a><strong>&nbsp;</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>


