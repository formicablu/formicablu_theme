<?php
/**
 * @package formicablu
 */
?>


<div class="band">
<div class="container">

<div class="fix_img" style="background-image:url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail')[0];?>);">
	
</div>

</div>
</div>

<div class="prj-info">
	<span class="client">
		<?php 
		$client = get_post(rwmb_meta("formicablu_project_client", array(), $post->ID)); 
		echo do_shortcode($client->post_title);
		?>
	</span>
	<span class="period">
		<span class="from">
			<?php echo rwmb_meta("formicablu_from_date", array(), $post->ID); ?>
		</span>
		<span class="to">
			<?php echo rwmb_meta("formicablu_to_date", array(), $post->ID); ?>
		</span>
	</span>
</div>

<div class="exc pack">
	<hr width="25%">
	<?php the_excerpt(); ?>
	<hr width="25%">
</div>
<div class="pack cont">

		<?php the_content(); ?>
</div>

<div class="pack invite">
	<?php
		$i = rwmb_meta("formicablu_invite", array(), $post->ID);
		$l = rwmb_meta("formicablu_link", array(), $post->ID);

		echo "<div class='cta'>{$i}</div>";
		echo "<div class='cta'><a tarfet='blank' href='{$l}'>{$l}</a></div>";
	?>
</div>

<script>
	jQuery(function(){
		if(jQuery(".project").hasClass("cat-servizio")){
			jQuery("#menu-item-81").addClass("current-menu-item");
		}
		if(jQuery(".project").hasClass("cat-prodotto")){
			jQuery("#menu-item-98").addClass("current-menu-item");
		}
	});

</script>

