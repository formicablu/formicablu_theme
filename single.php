<?php
/**
 * The template for displaying all single posts.
 *
 * @package formicablu
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php 
			get_template_part( 'content', 'single' ); 
			?>

			<?php  
    $navigation = '';
    $previous   = get_previous_post(); //'<div class="nav-previous">%link</div>', "%title" );
    $next       = get_next_post();// '<div class="nav-next">%link</div>', "%title" );

	$pterms = array();
	$nterms = array();


	foreach ( get_the_terms( $previous->ID, 'cat' ) as $term ) {
		$pterms[] = $term->slug;
	}

	foreach ( get_the_terms( $next->ID, 'cat' ) as $term ) {
		$nterms[] = $term->slug;
	}

	if ($previous)
		$pt = '<div class="nav-previous nav-dir cat-'. implode(" ", $pterms).'"><a href="'.get_permalink($previous->ID).'">'.__($previous->post_title).'</a></div>';
	else
		$pt = "";

	if ($next)
		$nt = '<div class="nav-next nav-dir cat-'. implode(" ", $nterms).'"><a href="'.get_permalink($next->ID).'">'.__($next->post_title).'</a></div>';
	else
		$nt = "";

	
    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
        $navigation = _navigation_markup( $pt . $nt, 'post-navigation' );
    }
 
    echo $navigation;
			?>

			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
