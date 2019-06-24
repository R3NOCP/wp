<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <div class="custom-logo">
<?php
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
<img src="<?php echo $image[0]; ?>" alt=""></div>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
    <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <h4><?php bloginfo( 'description' ); ?></h4>
        <nav class="topnav">
			<?php $args = [ 'theme_location' => 'primary' ]; ?>
			<?php wp_nav_menu( $args ) ?>
        </nav>
    </header>
	<?php if(is_page()) : ?>
        <h3>Thanks for visiting our page!</h3>
	<?php endif ?>
