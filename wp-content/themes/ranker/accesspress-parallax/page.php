<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package accesspress_parallax
 */


get_header(); ?>

<?php 
if(of_get_option('enable_parallax') == 1 && is_front_page() && get_option( 'show_on_front' ) == 'page'){
	get_template_part('index','parallax');
}else{
?>

<div class="mid-content clearfix">
	<div id="primary-fullwidth" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php echo $post->post_content; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php } ?>

<?php get_footer();
