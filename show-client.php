<?php
/**
 * @package formicablu
 */
?>

		<?php the_content(); ?>
<div class="row"><i class="fa fa-fw fa-location"></i><?php echo rwmb_meta("formicablu_position");?></div>
<div class="row"><i class="fa fa-fw fa-location"></i><?php echo rwmb_meta("formicablu_address");?></div>
<div class="row"><i class="fa fa-fw fa-users"></i><?php 
 $cts = rwmb_meta("formicablu_contacts");
 foreach ($cts as $ct) {
 	$pid = get_permalink($ct);
 	$pt = get_the_title($ct);
 	echo "<a href='{$pid}'><i class='fa fa-fw fa-user'></i>{$pt}</a> ";
 }
?></div>
<div class="row"><i class="fa fa-fw fa-client_url"></i><?php echo rwmb_meta("formicablu_client_url");?></div>
