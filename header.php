<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title><?php bloginfo( 'title' ); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<header>	
			<div class="content">
				<h1 class="logo"><a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt=""></a></h1>
				<a href="#" class="btn-menu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu2.png" alt=""></a>
			<div class="clear"></div>
			<nav class="menu">
				<ul>
					<li><a href="<?php echo get_home_url();?>">HOME</a></li>
					<li><a href="<?php echo get_stylesheet_directory_uri .'/about';?>">SOBRE</a></li>
					<li><a href="<?php echo get_stylesheet_directory_uri .'/dicas';?>">DICAS</a></li>
					<li><a href="<?php echo get_stylesheet_directory_uri .'/receitas';?>">RECEITAS</a></li>
					<?php if (is_page(array('about','dicas','receitas','cursos-realizados')) || is_single()): ?>
						<li><a href="<?php echo get_home_url().'/#cursos';?>">CURSOS</a></li>
						<li><a href="<?php echo get_home_url().'/#contact';?>">CONTATO</a></li>
					<?php else: ?>
						<li><a href="<?php echo get_home_url().'/#cursos';?>" class="scroll">CURSOS</a></li>
						<li><a href="<?php echo get_home_url().'/#contact';?>" class="scroll">CONTATO</a></li>
					<?php endif; ?>
				</ul>
			</nav>
			</div>
			<div class="tel-contato">
				<p>Entre em contato conosco!</p>
				<?php 
		            $args = array('post_type' => 'contato', 'numberposts'=>1); 
		            $my_posts = get_posts( $args );
		            if($my_posts):
		                foreach ($my_posts as $post):setup_postdata( $post );
        		?>
				<ul>
					<?php if(types_render_field('telefone-fixo')){ ?>
						<li><i class="fa fa-phone"></i><?php echo types_render_field('telefone-fixo'); ?></li>
					<?php }else{} ?>

					<li><i class="fa fa-whatsapp"></i><?php echo types_render_field('telefone-movel'); ?></li>
				</ul>
			<?php endforeach; endif; ?>
			</div>
		</header>