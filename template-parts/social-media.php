<?php
	$args = array('post_type' => 'contato', 'numberposts'=>1); 
	$my_posts = get_posts( $args );
	if($my_posts):
	    foreach ($my_posts as $post):setup_postdata( $post );
    ?>
		<ul>
			<li>
				<a href="<?php echo types_render_field('facebook'); ?>" target="blank">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/facebook.svg" alt="">
				</a>
			</li>
			<li>
				<a href="<?php echo types_render_field('instagram'); ?>" target="blank">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram.svg" alt="">
				</a>
			</li>
		</ul>
<?php endforeach; endif; ?>