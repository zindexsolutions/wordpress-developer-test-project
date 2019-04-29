<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Module
 * @since 1.0.0
 */

?>
<!-- footer start -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-5">
					<div class="footer__left">
						<a href="<?php echo site_url(); ?>" class="f-logo">
							<?php $logo = (get_field('footer_logo', 'option'))?get_field('footer_logo', 'option'):THEME_IMAGES.'f-logo.svg'; ?>
							<img src="<?php echo $logo ?>" alt="f-logo" class="img-fluid">
						</a>
						<?php $content = get_field('content', 'option');
						if($content)
						{?>
						<div class="f-detail">
							<p><?php echo $content ?></p>
						</div>
						<?php 
						}?>
					</div>
				</div>
				<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' )) : ?>
				<div class="col-sm-12 col-md-8 col-lg-5">
					<div class="footer__links">
						<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
						<div class="block">
							<?php dynamic_sidebar('sidebar-2'); ?>
						</div>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
						<div class="block">
							<?php dynamic_sidebar('sidebar-3'); ?>
						</div>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'sidebar-4' )) : ?>
						<div class="block">
							<?php dynamic_sidebar('sidebar-4'); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>

				<div class="col-sm-12 col-md-4 col-lg-2">
					<div class="footer__right">
						<div class="selectbox">
							<div class="dropdown">
								<button class="dropdown-toggle" type="button" id="dropdownMenuButton"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg width="15" height="15">
										<use xlink:href="#earth-icon"></use>
									</svg>
									english <span>(uk)</span>
									<svg width="8" height="5">
										<use xlink:href="#select-arrow"></use>
									</svg>
								</button>

								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="#">spanish <span>(ES)</span></a>
									<a class="dropdown-item" href="#">spanish <span>(ES)</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- footer end -->
	<?php wp_footer(); ?>
</body>
</html>