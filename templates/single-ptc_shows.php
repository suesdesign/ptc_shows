<?php
/**
 * @package PTC Shows
 * @version 1.0
 */

?>


<?php 
	get_header();
?>

<main id="maincontent" role="main">

	<header>
		<h1 class="entry-title">
			<?php the_title(); ?>
		</h1>
	</header>

	<div id="ptc_shows-list">

	<?php if ( have_posts () ) : ?>

		
	<?php while ( have_posts() ) : the_post(); ?>

	<div class="ptc_shows">

		
	<?php the_content(); ?>

	</div><!--.ptc_shows-->

	<?php endwhile; else :?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>
