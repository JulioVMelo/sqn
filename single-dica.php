<?php get_header(); ?>
<section class="dica">
	<div class="content">
	<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	<h2><?php the_title();?></h2>
	<?php if(wp_is_mobile()){ ?>
	<?php the_post_thumbnail('medium');?>
	<?php }else{ ?>
	<?php the_post_thumbnail('single');?>
	<?php }; ?>
	<?php 
		the_content();
	?>

	<?php 
		endwhile;  
		endif;
	?>		
	</div>
</section>
<?php get_footer(); ?>