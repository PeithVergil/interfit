<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="author" content="lolkittens" />
		
		<title>
			<?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;
		
			wp_title( '|', true, 'right' );
		
			// Add the blog name.
			bloginfo( 'name' );
		
			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
		
			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		
			?>
		</title>
		
		<?php wp_enqueue_style('bootstrap_css'); ?>
		<?php wp_enqueue_style('bootstrap_css_res'); ?>
		
		<?php wp_enqueue_script('bootstrap_js'); ?>
		
		<?php wp_enqueue_style('interfit_css'); ?>
		
        <?php wp_head(); ?>
        
		<?php if ( is_home() || is_front_page() ) { ?>
	    	<?php wp_enqueue_script('cloud_carousel_js'); ?>
	    	
	    	<script type="text/javascript">
			(function($) {
		        $(function(){
					$(".carousel-images").CloudCarousel({			
						xPos: 505,
						yPos: 150,
						xRadius: 1011/1.4,
						yRadius: 986/4.6,
						buttonLeft: $('.left_nav_button'),
						buttonRight: $('.right_nav_button'),
					});
		        });
			})(jQuery);
			</script>
	    <?php } ?>
	</head>
	<body>
		<div class="wrapper">
			<div class="header">
				<div class="ip-1">
					<div>
						<a href="index.html" id="logo"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="logo"/></a>
						<div class="navigation">
							<ul>
								<li><a href="<?php echo esc_url(home_url()); ?>">Home</a></li>
								<li><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a></li>
								<li><a href="<?php echo esc_url( home_url( '/visual-training-stations/' ) ); ?>">Visual Training Stations</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
