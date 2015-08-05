<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package formicablu
 */
?>

	</div><!-- #content -->
<div class="bottom-menu">
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
	    <?php wp_nav_menu( array( 
  	'theme_location' 	  => 'primary',
  	'container' 		    => 'div',
  	'container_class' 	=> 'collapse navbar-collapse',
  	'container_id'    	=> 'main-navbar-collapse',
  	'menu_class'      	=> 'nav navbar-nav',
  	'menu_id'         	=> '',
  	'echo'            	=> true,
  	'fallback_cb'     	=> 'wp_page_menu',
  	'before'          	=> '',
  	'after'           	=> '',
  	'link_before'     	=> '',
  	'link_after'      	=> '',
  	'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
  	'depth'           	=> 0,
  	'walker'          	=> ''
    )); ?>      
	    </div><!-- /.navbar-collapse -->
</div>
	<footer id="colophon" class="site-footer " role="contentinfo">
		<div class="site-info container">
			<div class="row">
				<div class="col-xs-6"><span><?php echo file_get_contents("/var/www/formicablu.it/wp-content/themes/formicablu/logo.svg");?></span> la comunicazione lascia una traccia</div>
				<div class="col-xs-6 right"><a href="mailto:info@formicablu.it">mail@formicablu.it</a> · Bologna 051 4072671 · Roma 06 97600589<br /> 
				formicablu srl - sede legale Via Sant'Anna 16/2, 40128 Bologna<br /> 
Iscritta nel registro delle imprese di Bologna Repertorio Economico Amministrativo 447666<br />
Capitale sociale € 10.000 i.v. | Cod. Fisc. e Part. IVA 02544861202<br />
<a href="http://www.formicablu.it/?page_id=493">Termini di utilizzo</a>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-4 col-xs-offset-4 centered">
					<a class="social-icons" target="_blank" href=""><i class="fa fa-fw fa-2x fa-twitter-square"></i></a>
					<a class="social-icons" target="_blank" href=""><i class="fa fa-fw fa-2x fa-facebook-square"></i></a>
					<a class="social-icons" target="_blank" href=""><i class="fa fa-fw fa-2x fa-vimeo-square"></i></a>
					<a class="social-icons" target="_blank" href=""><i class="fa fa-fw fa-2x fa-linkedin-square"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 centered colophon">
					Design: <a href="http://www.emmaboshi.net">Emmaboshi studio</a> - Development: <a href="http://ingmmo.com/">Marco Montanari</a>
				</div>

			</div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->
<?php wp_footer();?>
</body>
</html>
