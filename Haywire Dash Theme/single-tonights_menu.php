<?php get_header(); ?>



<div class="flexSingle">



<?php while(have_posts()) {
	the_post(); ?>

	<div class="singleMenuItem">
    	<h1 style="text-align: left"><?php the_title(); ?></h1>
    	<img class="singleMenuImage" src="<?php the_field('food_image'); ?>" /><br>
    	<p class="singleItemDescription"><?php the_field('dish_description'); ?></p>
    	<h5 style="text-align: left"><?php the_field('dietary'); ?></h5>
    </div>


	<?php } ?>




<?php get_sidebar(); ?>


</div>


<?php get_footer(); ?>