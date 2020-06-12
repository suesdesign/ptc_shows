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


	<?php if ( have_posts () ) : ?>

		
	<?php while ( have_posts() ) : the_post(); ?>

	<div class="ptc_shows-single">

		
	<?php $show_infos = array('story', 'dates', 'photos', 'songs', 'videos', 'education_pack', 'fun_and_games');
	echo '<div class="js-tabs"><ul class="js-tablist">';
	
	foreach($show_infos as $show_info) {
		if(get_field($show_info)) {
			$field = get_field_object($show_info);
			echo '<li class="js-tablist__item"><a href="#' 
			. $field['name'] 
			. '" id="label_' 
			. $field['name'] 
			. '" class="js-tablist__link">'
			. $field['label'] 
			. '</a></li>';
		}
	}
	
	echo '</ul>';
	foreach($show_infos as $show_info) {
			$field = get_field_object($show_info);
			echo '<div class="js-tabcontent" id="' . $field['name'] . '">';
			the_field($show_info);
			echo '</div>';
	}
	echo '</div><!--#tabs-->';
	?>

	</div><!--.ptc_shows-->

	<?php endwhile; else :?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>
