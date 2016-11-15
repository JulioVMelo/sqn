<?php get_header(); ?>
<section class="dicas">
	<div class="destaque">
	</div>
	<div class="content">
		<div class="titulo">
				<h2>Dicas</h2>
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/ideia.svg" alt="">			
				<div class="clear"></div>
		</div>
		<?php 
            $args = array('post_type' => 'dica', 'numberposts'=>0); 
            $my_posts = get_posts( $args );
            if($my_posts):
                foreach ($my_posts as $post):setup_postdata( $post );
        ?>
		<div class="dicas-panel">
			<?php the_post_thumbnail('medium'); ?>
			<div class="text">
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				<?php the_excerpt(); ?>
				<a id="link" href="<?php the_permalink(); ?>"><i><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/apple.png" alt=""></i>Ler mais</a>
			</div>
			<div class="clear"></div>
		</div>
		<?php 
              endforeach;
            else:
         ?>
                <p>Não há dicas adicionadas</p>
        <?php 
            endif;
        ?>	
		<div class="clear"></div>
	</div>
</section>
<?php get_footer(); ?>