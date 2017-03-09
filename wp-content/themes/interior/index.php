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
                                            	<div class="indent-left p2">
                                                	<h3 class="p0">Latest Income</h3>
                                                </div>
<?php 
$cnt = 0;

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
    if (!$cnt || ($cnt == 1)) {
        echo '<div class="wrapper p4">';  
        $cnt=1;
    }
?>
    <article class="grid_4 <?php if ($cnt == 1) echo 'alpha'; else if ($cnt == 3) echo 'omega'; ?> ">
        <div class="indent<?php if ($cnt == 1) echo '-left'; else if ($cnt == 3) echo '-right'; else echo '3'; ?> ">
            <figure class="frame2 p2"><?php the_post_thumbnail( 'full', '' ); ?></figure>
            <p class="color-4 prev-indent-bot"><?php the_title(); ?></p>
            <?php the_excerpt(); ?>
            <div class="wrapper">
                <span class="price fleft">$45.99</span>
                <a class="button fright" href="<?php the_permalink(); ?>">Read More</a>
            </div>

        </div>
    </article>
<?php 
    if ($cnt == 3) {
        echo '</div>';
        $cnt = 0;    
    } 
?>
<?php $cnt++; ?>
<?php endwhile; ?>
<!-- post navigation -->
    <div class="pagination">
        <?php
        //global $wp_query;
        /* pagination */
        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;'
        ) );
        ?>
    </div>

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
