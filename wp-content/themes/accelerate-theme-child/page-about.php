<?php
/**
 * The template for displaying the About Page
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<section class="about-page">
<div id="primary" class="site-content">
	
	<h2>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>	
	
		<h4>Our Services</h4>
		<p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
		<h3>Content Strategy</h3>
		<p>Bacon ipsum dolor amet bacon jowl meatloaf, tri-tip fatback pastrami porchetta corned beef sirloin pork pork belly brisket cupim shankle. Cupim beef alcatra kielbasa filet mignon, biltong shank. Beef ribs meatball pig corned beef flank. Pancetta kevin picanha t-bone, alcatra pig doner landjaeger tri-tip corned beef prosciutto sirloin pork belly pork chop. Strip steak beef beef ribs capicola.</p>
	
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			
<?php endwhile; // end of the loop. ?>

					<?php wp_reset_query(); ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	</section>

<?php get_footer(); ?>