<?php get_header(); ?>


    <main>
        <div class="bg" id="homebg" role="presentation">
            <div class="container">
                <img id="shaker" src="<?php echo get_template_directory_uri(); ?> /images/Shaker.png" alt="lightning salt shaker thingy">
                <h1><?php the_title(); ?></h1>
                <p class="intro-subhead"><em>Welcome to <span class="">Haywire&nbsp;Dash</span>, a dining experience unlike any&nbsp;other.</em></p>

                <div class="timebox">
                    <p class="title">Hours</p>
                    <hr class="thinline" />
                    <p class="italics">Tuesday through Saturday, <br />5:00 <span class="smallcaps">pm</span> &ndash; 11:00 <span class="smallcaps">pm</span></p>
                </div>
            </div>
        </div>

        <!-- =============== Bio =============-->

        <section id="bio">
            <h2><span class="highlight">Tonight's Chef:</span></h2>

            <div class="container">
                <hr>
                <article>
                    <h3><?php the_field('chef_name'); ?></h3>
                    <p><?php the_field('chef_bio'); ?></p>
                </article>
                <aside>
                    <figure>
                        <img id="chefphoto" src="<?php the_field('chef_photo'); ?>" alt="Tonight's chef, James Davis" />
                        <figcaption><?php the_field('chef_photo_caption'); ?></figcaption>
                    </figure>
                </aside>
            </div>
        </section>
    </main>


 <?php get_footer(); ?>