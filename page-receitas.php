<?php get_header(); ?>
<section class="receitas">
	<div class="destaque">
	</div>
	<div class="content">
		<div class="titulo">
			<h2>Receitas</h2>
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/chef.svg" alt="">
			<div class="clear"></div>
		</div>
		<?php 
            $args = array('post_type' => 'receita', 'numberposts'=>0); 
            $my_posts = get_posts( $args );
            if($my_posts):
                foreach ($my_posts as $post):setup_postdata( $post );
        ?>
		<div class="receitas-panel">
			<?php the_post_thumbnail('medium'); ?>
			<div class="text">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="ler-mais"><i><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/apple.png" alt=""></i>Ler mais</a>
			</div>
			<div class="clear"></div>
		</div>
		<?php 
              endforeach;
            else:
         ?>
                <p>ocorreu um erro</p>
        <?php 
            endif;
        ?>
		<div class="clear"></div>
		
	</div>
</section>
<?php get_footer(); ?>