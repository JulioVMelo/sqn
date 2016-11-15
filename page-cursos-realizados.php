<?php get_header(); ?>
<section class="past-cursos">
	<h2>Cursos realizados</h2>
	<i class="fa fa-camera"></i>
		<?php 
            $args = array('post_type' => 'foto', 'numberposts'=>0); 
            $my_posts = get_posts( $args );
            if($my_posts):
                foreach ($my_posts as $post):setup_postdata( $post );
        ?>
	<div class="content">
		
		<div class="past-curso">
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
			<ul>
				<li><?php echo types_render_field('fotos', array('separator'=>'</li><li>')); ?></li>
			</ul>
		</div>
	</div>
	<?php endforeach; endif; ?>
</section>
<?php get_footer(); ?>