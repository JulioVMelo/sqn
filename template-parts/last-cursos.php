<a id="cursos"></a>
<section class="next-cursos">
	<div class="content">
		<h2>Proximos Cursos</h2>
		<?php 
            $args = array('post_type' => 'curso', 'numberposts'=>3); 
            $my_posts = get_posts( $args );
            if($my_posts):
                foreach ($my_posts as $post):setup_postdata( $post );
        ?>
		<div class="info">
			<h3><?php the_title(); ?></h3>
			<div class="curso-detalhe">
				<i class="fa fa-calendar"><p><?php echo types_render_field('data'); ?></p></i>
				<i class="fa fa-clock-o"><p><?php echo types_render_field('horario'); ?></p></i>
				<i class="fa fa-map-marker"><p><?php echo types_render_field('local'); ?></p></i>
				<i class="fa fa-certificate"><p><?php echo types_render_field('reserva'); ?></p></i>
			</div>
			<a href="<?php echo types_render_field('mapa');?>" target="blank">Ver mapa<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/map.svg" alt=""></a>
		</div>
	<?php endforeach; endif?>
		<div class="clear"></div>
		<a href="<?php echo get_stylesheet_directory_uri .'/cursos-realizados';?>" class="ver-cursos"><i></i>Ver cursos realizados</a>
	</div>
</section>