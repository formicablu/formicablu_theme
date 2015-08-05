<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package formicablu
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="/MyFontsWebfontsKit.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<div class="pagetop"></div>
	<header id="masthead" class="site-header" role="banner">

	<nav class="navbar navbar-default">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo file_get_contents("/var/www/formicablu.it/wp-content/themes/formicablu/logo.svg");?></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
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
	  </div><!-- /.container-fluid -->

	    
	</nav>

	<?php 
		$full_url = "http://". $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
		$q = strpos($full_url, "?")===false?"?":"&";
		$full_url .= $q . "lang=";
	?>

	<script>
	$("#main-navbar-collapse").append("<ul class='nav navbar-nav pull-right'><li class='lang_en'><a href='<?php echo $full_url;?>en'>English</a></li><li class='lang_it'><a href='<?php echo $full_url;?>it'>Italiano</a></li></ul>");
	var lang = "<?php echo get_locale(); ?>";
	lang= lang.split("_")[0];
	$(".lang_"+lang).hide();
	</script>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
