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
		<h1 class="taxonomy_title">
			<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			echo $term->name; ?>
		</h1>
	</header>

	<div id="ptc_shows-list">

	<?php if ( have_posts () ) : ?>

	<?php 
  		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  		query_posts($query_string.'&posts_per_page=12&paged='.$paged);
  	?>

		<?php while ( have_posts() ) : the_post(); ?>

	<div class="ptc_shows">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<h2 class="ptc_shows-title"><?php the_title(); ?></h2>
		
		<?php the_content(); ?>
		</a>
	</div><!--.ptc_shows-->

	<?php endwhile; else :?>
	<?php endif; ?>
	
	</div><!--.ptc_shows-->

	<!--bottom navigation to older and newer posts if there is more than one page of posts-->
	<div class="page-navigation">
		<?php
		/*
		** pagination
		*/
		global $wp_query;
		$big = 999999999; // need an unlikely integer
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
		) );
		?>

		<?php wp_reset_postdata(); ?>
	</div><!--.navigation-->

</main>

<?php get_footer(); ?>
