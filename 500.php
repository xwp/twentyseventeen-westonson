<?php
/**
 * The template for displaying 500 pages (internal server errors)
 *
 * @link https://github.com/xwp/pwa-wp
 *
 * @package Twenty_Seventeen_Westonson
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-500 internal-server-error">
				<header class="page-header">
					<img class="page-header-image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/500-image.png'); ?>" alt="A bronze compass sitting on a stone surface with a waterfall in the distance'" />
					<h1 class="page-title"><?php esc_html_e( 'Internal Service Error', 'twentyseventeen-westonson' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<?php
					if ( function_exists( 'wp_service_worker_error_message_placeholder' ) ) {
						wp_service_worker_error_message_placeholder();
					}
					if ( function_exists( 'wp_service_worker_error_details_template' ) ) {
						wp_service_worker_error_details_template();
					}
					?>
			</section><!-- .error-500 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
