<?php get_header(); ?>

        <div class="callout large home-hero">
            <div class="row column text-center">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/dest/img/welcome-el-segundo.png" alt="welcome to el segundo">
                <p class="lead">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="row">
            <div class="medium-6 columns medium-push-6">

                <img class="thumbnail" src="<?php bloginfo('template_url'); ?>/assets/src/img/water-tower.jpg">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            </div>
            <div class="medium-6 columns medium-pull-6">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>

            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="medium-4 columns">
                <h3>Headline</h3>
                <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
            </div>
            <div class="medium-4 columns">
                <h3>Headline</h3>
                <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
            </div>
            <div class="medium-4 columns">
                <h3>Headline</h3>
                <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
            </div>
        </div>
        <hr>
        <div class="row column">
            <ul class="vertical medium-horizontal menu expanded text-center">
                <li>
                    <a href="#">
                        <div class="stat">28</div><span>Visitor</span></a>
                </li>
                <li>
                    <a href="#">
                        <div class="stat">43</div><span>Services</span></a>
                </li>
                <li>
                    <a href="#">
                        <div class="stat">95</div><span>Resident</span></a>
                </li>
                <li>
                    <a href="#">
                        <div class="stat">59</div><span>Business</span></a>
                </li>
                <li>
                    <a href="#">
                        <div class="stat">18</div><span>Government</span></a>
                </li>
            </ul>
        </div>

    <?php get_footer(); ?>
