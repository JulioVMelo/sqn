<?php get_header(); ?>
<section class="receita">
	<div class="content">
		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
			<h2><?php the_title(); ?></h2>

			<div class="foto-receita">

			<?php if(wp_is_mobile()){ ?>
				<?php the_post_thumbnail('medium');?>
			<?php }else{ ?>
				<?php the_post_thumbnail('single');?>
			<?php }; ?>			
				<span><i class="fa fa-cutlery"></i><?php echo types_render_field('porcoes'); ?></span>
			
				<span><i class="fa fa-clock-o"></i><?php echo types_render_field('tempo'); ?></span>
			
				<div class="clear"></div>
			</div>
			
			<p><?php the_excerpt(); ?></p>
			
			<p>Ingredientes</p>
			
				<ul class="ingredientes">
					<li><?php echo types_render_field('ingredientes', array('separator'=>'</li><li>')); ?></li>
			
				</ul>
			
			<p>Modo de preparo</p>
			
				<ol class="preparo">
					<li><?php echo types_render_field('modo-de-preparo', array('separator'=>'</li><li>')); ?></li>
				</ol>
				
		<?php 
			echo do_shortcode('[fbcomments]');
			
			endwhile;  
			endif;
		?>
	</div>
</section>
<?php get_footer(); ?>