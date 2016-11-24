<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/inc/fullPage/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/inc/fullPage/examples.css" />
	   
	 
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/fullPage/jquery.slimscroll.min.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/fullPage/jquery.fullPage.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/fullPage/examples.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-trinam.css" />
	
	<?php if(!wpmd_is_phone()){
	?>
	<script type="text/javascript">
	
		jQuery(document).ready(function() {
			jQuery('#fullpage').fullpage({
				anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7'],
				menu: '#menu',
				sectionsColor: ['#fff', '#fff', '#fff'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['', '', '', '', '', '', '']
			});
		});
	</script>
	<?php } ?>	
	<script type="text/javascript">
		jQuery(document).ready(function() {
			
			jQuery('.menu-btn').click( function(){
				jQuery('#menu').toggle();
				
				
			});
		});	
	</script>
	
</head>

<body <?php body_class(); ?>>
 

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5768b62380b3cce25e3ff954/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
 