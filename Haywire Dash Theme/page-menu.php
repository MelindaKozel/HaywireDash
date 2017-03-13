<?php get_header(); ?>
<main><a name="top"></a>
        <div class="bg" id="menubg" role="presentation">
            <div class="container">
                <img id="shaker" src="<?php echo get_template_directory_uri(); ?>/images/Shaker.png" alt="lightning salt shaker thingy">
        <h1><span class="highlight">Tonight's</span> Menu</h1>
          <p class="italics subhead">Last updated: <br>
              <?php the_field('date_update'); ?><br>
                          <?php the_field('time_update'); ?></p>

      

          <a href="#pricing"><p class="italics fineprint" id="clickforprice">(Click here for pricing information)</p></a>


        <section id="menu">   
            <ul class="menu-section">


<?php 
            $args = array(
                'post_type'              => array( 'tonights_menu' ),
            );


            $tonightsMenu = new WP_Query( $args );

    // The Loop
            if ( $tonightsMenu->have_posts() ) {
            while ( $tonightsMenu->have_posts() ) {
                     $tonightsMenu->the_post();
 ?>                    
                <li class="menuitem">
                        <a href="<?php the_permalink(); ?>"><img class="menuImage" src="<?php the_field('food_image'); ?>" /><br>
                        <p strong class="title"><?php the_field('dish_name'); ?></p></a>
                          <hr>
                          <p><?php the_field('dish_description'); ?>
                          <?php the_field('dietary'); ?></p>
                </li>
              
              
<?php    }
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata(); 
?>
</ul>
</section>
<h3>&mdash; Tonight's <span class="highlight">Drinks</span> &mdash;</h3>

<section id="menu">   
<ul class="menu-section">
<?php 
            $args = array(
                'post_type'              => array( 'drink_menu' ),

            );


            $drinkMenu = new WP_Query( $args );

    // The Loop
            if ( $drinkMenu->have_posts() ) {
            while ( $drinkMenu->have_posts() ) {
                     $drinkMenu->the_post();
 ?>                    
                <li class="menuitem">
                        <a href="<?php the_permalink(); ?>"><p strong class="title"><?php the_field('drink_name'); ?></p></a>
                          <hr>
                          <p><?php the_field('drink_description'); ?></p>
                </li>
              
              
<?php    }
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata(); 
?>

</ul>
</section>  
<h2 class="bigger subhead" id="pricing" name="pricing">Pricing <br></h2>
<ul class="pricetable"> 
    <?php 
            $args = array(
                'post_type'              => array( 'pricing' ),
            );


            $priceList = new WP_Query( $args );

    // The Loop
            if ( $priceList->have_posts() ) {
            while ( $priceList->have_posts() ) {
                     $priceList->the_post();
 ?>                    
                <li>
                        <?php echo the_field('course_type'); ?><span> : </span><?php echo the_field('price'); ?>
                </li>
              
              
<?php    }
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata(); 
?>

</ul>
<p class="pricetable">*Two first plates, one main course and one dessert to share.</p>
<p class="backtotop"><a href="#top">[Back to top]</a></p>
</main>

<?php get_footer(); ?>