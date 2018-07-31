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
	 <div class="col-md-8 bg-info text-white border-right border-dark">
	 <h1>This is the about Page </h1>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quod voluptate animi, asperiores et esse quam provident molestias sed, iure, itaque accusantium dignissimos hic sint saepe ipsam? Optio, aperiam nulla officiis autem saepe consequuntur voluptatum veniam eos ullam dolorem magnam sit aut. Ab consequatur accusantium voluptatibus, a velit sit est molestiae culpa praesentium ipsam ea atque eos. Cupiditate molestias quisquam ab rem alias error fugit dolore, molestiae, impedit quasi voluptatem.</p>

	 </div>


	<div class="col-md-4 bg-light text-dark p-3 mb-2">
	<?php get_sidebar(); ?>
	</div>

	</div>
	</div>
<?php
// get_sidebar();
get_footer();
