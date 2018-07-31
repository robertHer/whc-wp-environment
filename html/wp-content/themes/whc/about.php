<?php
/**
 * The template for displaying all single posts
 * 
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-underscores
 */

get_header();
?>
	<div class="container-fluid">
	<div class="row">
	 <div class="col-md-8 bg-info text-white">
	 <h1>This is the about Page </h1>
	 </div>


	<div class="col-md-4 bg-light text-dark p-3 mb-2">
	<?php get_sidebar(); ?>
	</div>

	</div>
	</div>
<?php
// get_sidebar();
get_footer();
