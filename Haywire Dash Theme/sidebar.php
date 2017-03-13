
<div id="r_sidebar">
<h3 class="highlight">Tonight's Menu:</h3>
<ul class="sidebarList">


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
				<li class="sidebarListItem">
					<a href="<?php the_permalink(); ?>">
						<p strong class="title"><?php the_field('dish_name'); ?></p></a>
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

<h3 class="highlight">Tonight's Drink List:</h3>
		<ul class="sidebarList">
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
					<li class="sidebarListItem">
						<a href="<?php the_permalink(); ?>"><p strong class="title"><?php the_field('drink_name'); ?></p></a>
					</li>


					<?php    }
				} else {
    // no posts found
				}

// Restore original Post Data
				wp_reset_postdata(); 
				?>




			</div>




