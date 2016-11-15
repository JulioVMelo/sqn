<section class="last-add">
	<article class="content">
		<h2>Últimas dicas</h2>
		<span class="borda"></span>
		<?php 
            $args = array('post_type' => 'dica', 'numberposts'=>3); 
            $my_posts = get_posts( $args );
            if($my_posts):
                foreach ($my_posts as $post):setup_postdata( $post );
         ?>
	        <div class="card">
				<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail('medium'); ?>
				</a>
				<?php the_excerpt(); ?>
				<div class="clear"></div>
				<div class="btn-more">
					<a href="<?php the_permalink();?>" class="read-more"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/apple.png" alt="">ler mais</a>
				</div>	
			</div>
        <?php 
              endforeach;
            else:
         ?>
                <p>Nenhuma dica foi adicionada</p>
        <?php 
            endif;
        ?>
		<div class="clear"></div>
	</article>
</section>