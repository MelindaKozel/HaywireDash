<?php get_header(); ?>

 <main>
        <div class="bg" id="aboutbg">
            <div class="container">

                <section id="aboutsection">   
                     <h1>About <span class="highlight">Us</span></h1>
                    <ul class="aboutlist">
    <?php 
            $args = array(
                'post_type'              => array( 'about_columns' ),
            );


            $aboutColumns = new WP_Query( $args );

    // The Loop
            if ( $aboutColumns->have_posts() ) {
            while ( $aboutColumns->have_posts() ) {
                     $aboutColumns->the_post();
    ?>                    
                <li class="menuitem">
                            <img class="icons" src="<?php the_field('about_icon'); ?>" /><br>
                            <?php the_field('about_description'); ?>
                        </li>   
              
              
    <?php    }
        } else {
    // no posts found
        }

// Restore original Post Data
wp_reset_postdata(); 
?>  
                    </ul>
                </div>
            </section>
        </div>

    </main>
               
     





<?php get_footer(); ?>