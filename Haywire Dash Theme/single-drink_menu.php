<?php get_header(); ?>


<div class="flexSingle">




<?php while(have_posts()) {
	the_post(); ?>

	<div class="singleMenuItem">
    	<h1 style="text-align: left"><?php the_title(); ?></h1>
    	<img class="singleMenuImage" src="<?php the_field('drink_image'); ?>" /><br>
    	<p class="singleItemDescription"><?php the_field('drink_description'); ?></p>
    </div>


	<?php } ?>




<?php get_sidebar(); ?>


</div>


<?php get_footer(); ?>