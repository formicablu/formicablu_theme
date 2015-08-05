<?php
/**
 * @package formicablu
 */
?>

<article id="post-<?php the_ID(); ?> " <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<h2><?php echo rwmb_meta("formicablu_subtitle"); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">

	<?php 

		get_template_part( 'show', get_post_type() ); 

	?>
	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php formicablu_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
