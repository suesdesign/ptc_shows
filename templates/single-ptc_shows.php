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

		
	<?php $show_infos = array('story', 'dates', 'photos', 'songs', 'videos', 'education_pack', 'fun_&_games');
	echo '<div class = "show_info_tabs">';
	foreach($show_infos as $show_info) {
		if(get_field($show_info)) {
			$field = get_field_object($show_info);
			echo '<h2>' . $field['label'] . '</h2>';
		}
	}
	echo '</div><!--.show_info-->';
	echo '<div class = "show_info_tabs">';
	foreach($show_infos as $show_info) {
			the_field($show_info);
	}
	echo '</div><!--.show_info-->';
	?>

	</div><!--.ptc_shows-->

	<?php endwhile; else :?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>
