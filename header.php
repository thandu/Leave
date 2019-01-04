<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
	<div class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></div>
    <div class="site-description"><?php bloginfo( 'description' ); ?></div>
	<div class="site-logo-link">
<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
        echo '<img src="'. esc_url( $logo[0] ) .'">';
} else {
        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
}
?>
	</div>
	
	

  <nav id="main-nav" class="main-navigation">
    <?php
       wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '' ) ); ?>
    <div class="clear"></div>
</nav>
  
</header>