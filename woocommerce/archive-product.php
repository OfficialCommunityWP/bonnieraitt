<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<?php $home_slider_query = new WP_Query(array( 'post_type' => 'store_slides', 'posts_per_page' => -1)); ?>
	<?php if ($home_slider_query->have_posts()): ?>

	<section class="slider-container">
		<div class="container">
		<div class="play-pause">
			<button class="pause-slideshow slider-button" aria-label="Stop automatic slide show" title="Stop Automatic Slideshow"
			>
				<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-label="Pause">
					<path d="M144 479H48c-26.5 0-48-21.5-48-48V79c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zm304-48V79c0-26.5-21.5-48-48-48h-96c-26.5 0-48 21.5-48 48v352c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48z"
					></path>
				</svg>
				<span class="screen-reader-text">Stop Automatic Slide Show</span>
			</button>

			<button class="play-slideshow slider-button" aria-label="Play automatic slide show" title="Play Automatic Slideshow">
				<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-label="Play">
					<path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"
					></path>
				</svg>
				<span class="screen-reader-text">Play Automatic Slide Show</span>
			</button>
		</div>
		<!-- play-pause -->

		<button class="slider-prev slider-button" aria-label="Previous Slide" title="Previous Slide">
			<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-label="Previous"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
			<span class="screen-reader-text">Previous Slide</span>
		</button>

		<button class="slider-next slider-button" aria-label="Next Slide" title="Next Slide">
			<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-label="Next"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
			<span class="screen-reader-text">Next Slide</span>
		</button>
		<div class="slider">
		<?php while ( $home_slider_query->have_posts() ) : $home_slider_query->the_post(); ?>

			<div class="hero-slides fade">
				<div class="home-slide">
				<?php 
					$image = get_field('image');
					$link = get_field('slide_link');
					$linkType = get_field('link_type_selector');
				?>

				<?php if (strlen($link)>0): ?>
					
					<?php 
					//  Show the image in an external link 
					if($linkType == 'external'): ?>
						<a href="<?php echo $link; ?>" target="_blank">
							<?php echo wp_get_attachment_image($image, 'homeHero', false, ["loading" => "lazy"]); ?>
						</a>
					<?php endif; ?>
			
					<?php 
					//Show the image in an internal link 
					if($linkType == 'internal'): ?>
						<a href="<?php echo $link; ?>">
							<?php echo wp_get_attachment_image($image, 'homeHero', false, ["loading" => "lazy"]); ?>
						</a>
					<?php endif; ?>

					<?php 
					// Just show the image if no link entered 
					else: ?>
					<?php echo wp_get_attachment_image($image, 'homeHero', false, ["loading" => "lazy"]); ?>
				<?php endif; ?>
				</div>
				<!-- home-slide -->
			</div>
			<!-- hero-slides -->
			<?php endwhile; ?>
		</div>
		<!-- slider -->
	</div>
</section>
		<?php endif; ?>
		<?php wp_reset_postdata() ?>
<div class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h2 class="woocommerce-products-header__title page-title contentTitle"><?php woocommerce_page_title(); ?></h2>
    <?php endif; ?> 



	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</div>

<div class="categories">
		<?php dynamic_sidebar('categories'); ?>
</div>
<div class="breadcrumb-after-utility-row">
	<?php woocommerce_breadcrumb(); ?>
</div>

<div class="utility-row">
	<div class="sort">
		<?php woocommerce_catalog_ordering(); ?>
		<?php woocommerce_result_count(); ?>
	</div>
	<!-- categories -->

	<div class="cart-and-currency">
		<div class="header-cart">
			<a class="header-cart-link button" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
				<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="jc-svg" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" aria-label="Shopping Cart"><path d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg> 
				View Cart
			</a>
		</div>

		<?php dynamic_sidebar('currency'); ?>

	</div>
	<!-- cart-and-currency -->
</div>
<!-- utility-row -->

<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );



get_footer( 'shop' );
