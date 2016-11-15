<?php get_header();  ?>
<section class="about">
	<div class="destaque">
	</div>
	<?php 
            $args = array('post_type' => 'informacao', 'numberposts'=>1); 
            $my_posts = get_posts( $args );
            if($my_posts):
                foreach ($my_posts as $post):setup_postdata( $post );
     ?>
	<div class="content">
		<h2><?php the_title(); ?></h2>
		<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/melancia.svg" alt="">
		<p><?php echo types_render_field('descricao'); ?></p>
		

		<div class="curriculo">
			<h2>Idealizadora</h2>
			<div class="dados">
				<?php the_post_thumbnail('curriculo'); ?>

				<div class="dado">
					<p><?php echo types_render_field('nome'); ?></p>
					<p><?php echo types_render_field('crn'); ?></p>
					<p><?php echo types_render_field('formacao'); ?></p>
					<p><?php echo types_render_field('adicional'); ?></p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php endforeach; endif; ?>
		<div class="redes-sociais">
			<h2>Siga nos</h2>
			<?php get_template_part( 'template-parts/social-media' ) ?>
		</div>

		<?php 
            $args = array('post_type' => 'informacao', 'numberposts'=>1); 
            $my_posts = get_posts( $args );
            if($my_posts):
                foreach ($my_posts as $post):setup_postdata( $post );
     	?>

		<div class="apresentacoes">
			<h2>Sabores que nutrem na TV</h2>
			<div class="apresentacao">
				<div class="video">
					<ul>
						 <li><?php echo types_render_field('video', array('separator'=>'</li><li>')); ?></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
	</div>
</section>
<section class="mapa">
	<div class="content">
		<h3>Localização</h3>
		<i class="fa fa-map-marker"></i>
		<p><?php echo types_render_field('rua'); ?>, <?php echo types_render_field('cidade'); ?></p>
		<p><?php echo types_render_field('numero-residencial'); ?></p>
		<p><?php echo types_render_field('bairro'); ?></p>
		<a href=""><button>Ver mapa</button></a>
	</div>
</section>
	<?php endforeach; endif; ?>
<?php get_footer(); ?>



