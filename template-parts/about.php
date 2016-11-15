<section class="about-home">
	<div class="content">
		<div class="description">
			<?php
				$my_page = get_page_by_title( 'about' );
			?>
			<?php  echo $my_page->post_content ?>
		</div>
		
		<div class="wrap-areas">
			<div class="areas">
				<a href="<?php echo get_stylesheet_directory_uri();?>/dicas"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/dicas.svg" alt=""></a>
				<p>Dicas</p>
			</div>
			<div class="areas">
				<a href="<?php echo get_stylesheet_directory_uri .'/receitas';?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/receitas.svg" alt=""></a>
				<p>Receitas</p>
			</div>
			<div class="areas">
				<a href="<?php echo get_home_url().'/#cursos';?>" class="scroll">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/chef2.svg" alt="">
				</a>
				<p>Cursos</p>
			</div>
			<div class="clear"></div>
		</div>

		<a href="<?php echo get_stylesheet_directory_uri();?>/about" class="btn-more"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/apple.png" alt="">saiba mais...</a>

	</div>
</section>