<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */
<?php
/* Template Name: Home Page */
get_header();
?>

<section class="hero-banner">
    <h1>Welcome to Bizland Final Project</h1>
    <p>Your destination for amazing projects and ideas.</p>
</section>

<section class="section-one">
    <h2>Our Mission</h2>
    <p>We aim to provide innovative solutions.</p>
</section>

<section class="section-two">
    <h2>Our Vision</h2>
    <p>We envision a world driven by technology and creativity.</p>
</section>

<section class="section-three">
    <h2>Our Values</h2>
    <p>Integrity, passion, and excellence.</p>
</section>

<section class="section-four">
    <h2>Our Team</h2>
    <p>Meet the team behind our vision.</p>
</section>

<section class="section-five">
    <h2>Join Us</h2>
    <p>Get involved and become part of our journey.</p>
</section>

<?php get_footer(); ?>
/*
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
	<div id="primary" <?php astra_primary_class(); ?>>
		<?php
		astra_primary_content_top();

		astra_content_loop();

		astra_pagination();

		astra_primary_content_bottom();
		?>
	</div><!-- #primary -->
<?php
if ( astra_page_layout() == 'right-sidebar' ) :

	get_sidebar();

endif;

get_footer();
