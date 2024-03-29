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
<?php
    $slider= new Wp_Query( array(
        'post_type' => 'slider', 
        'order' => 'asc',
        'posts_per_page' => -1
        ));
?>

<?php if ( $slider->have_posts() ) : ?>

                                    <div id="thumbs" class="navigation">
                                        <ul class="thumbs noscript">

    <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
    <!-- post -->
        <li>
            <a class="thumb" href="<?php echo get_post_meta( get_the_ID(), 'url', true); ?>" title=""> 
                <?php the_post_thumbnail( 'full' ); ?>
                <span></span> 
            </a>
        </li>

    <?php endwhile; ?>
   <!-- post navigation -->
                                        </ul>
                                    </div>
    <?php                                    
        /* Restore original Post Data */
        wp_reset_postdata();
    ?>
<?php else: ?>
    <!-- no posts found -->
    <h3> Place slider here </h3>
<?php endif; ?>
                                                 
                                </div>
                                <div class="inner-2">
                                    <div class="wrapper">
                                        <span class="title t2 img-indent3">2011</span>
                                        <div class="extra-wrap indent-top2">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel">
                                <h3 class="color-1 p2">Projects Archive</h3>
                                <a class="prev" href="#">Prev</a>
                                <a class="next" href="#">Next</a>
                                <div class="jCarouselLite">
                                    <ul id="carousel">
                                        <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/page3-img1.jpg" alt="" /><span>2011</span></a></li>
                                        <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/page3-img2.jpg" alt="" /><span>2010</span></a></li>
                                        <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/page3-img3.jpg" alt="" /><span>2009</span></a></li>
                                        <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/page3-img4.jpg" alt="" /><span>2008</span></a></li>
                                    </ul>
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
                            <div class="indent-right2">
                                <h3 class="prev-indent-bot">Publications</h3>
                                <p class="color-4 prev-indent-bot">At vero eos et accusamus et iusto odio dignissi tum deleniti atque corrupti quos</p>
                                <p>Dolores et quas molestias excepturi sint occae cati cupiditate non provident, similique sunt in culpa qui officia deserunt.</p>
                                <a class="button" href="#">View More</a>
                            </div>
                        </article>
                        <article class="grid_4">
                            <h3 class="p2">Art of Placement</h3>
                            <div class="wrapper">
                                <figure class="img-indent frame2"><img src="<?php bloginfo('template_url'); ?>/images/page3-img5.jpg" alt="" /></figure>
                                <div class="extra-wrap">
                                    <p class="img-indent-bot">At vero eos eaccusa mus etusto odio tium voluptatum deleniti atque corrupti quos dolores et quas.</p>
                                    <a class="button" href="#">View More</a>
                                </div>
                            </div>
                        </article>
                        <article class="grid_4">
                            <h3 class="prev-indent-bot2">External Links</h3>
                            <ul class="list-2">
                                <li><a href="#">Totam rem aperiam eaque ipsa quae abillo</a></li>
                                <li><a href="#">Inventore veritatis quasi architecto beatae vitae</a></li>
                                <li><a href="#">Nemo enim ipsam voluptatem quia</a></li>
                                <li><a href="#">Voluptas sit aspernatur aut odit aut fugit</a></li>
                                <li><a href="#">Sed quia consequuntur magni dolores eos</a></li>
                                <li class="last-item"><a href="#">Ratione voluptatem sequi nesciunt</a></li>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>
