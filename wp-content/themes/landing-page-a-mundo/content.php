<div class="blog-post">
    <?php if ( !is_home() && !is_front_page() ){ ?>
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
    <?php } ?>
 <?php the_content(); ?>

</div><!-- /.blog-post -->