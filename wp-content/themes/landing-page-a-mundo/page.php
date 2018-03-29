<?php get_header(); ?>
<br/><br/><br/>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-10">
        <?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>
        </div>
        <div class="col-xs-12 col-md-2">
		    <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>