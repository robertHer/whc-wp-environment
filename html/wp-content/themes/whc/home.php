<?php
/**
 * The template for displaying all single posts
 * 
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-underscores
 */

get_header();
?>
	<div class="container-fluid">
	<div class="row">
	 <div class="col-md-8 bg-info text-white border-right border-dark text-center">
	 <h1>This is the main Page </h1>
	 <div class="jumbotron text-dark">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

	 </div>


	<div class="col-md-4 bg-light text-dark p-3 mb-2">
	<?php get_sidebar(); ?>
	</div>

	</div>
	</div>
<?php
get_footer();
