<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Module
 * @since 1.0.0
 */

get_header();
?>
<div class="content clearfix">
	<div class="featured">
		<div class="container">
	
			<div class="featured__title">
				<h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'module' ); ?></h2>
			</div>

			<div class="featured__detail">
				<p><?php _e( 'It looks like nothing was found at this location.', 'module' ); ?></p>
			</div><!-- .page-content -->
		</div>		
	</div>
</div>
<?php
get_footer();
?>