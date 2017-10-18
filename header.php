<?php?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
<meta description="Newt Theme, By:  Rudolph Schmitz">
<!-- The above 2 meta tags must come first according to Bootstrap documentation -->
<meta charset="<?php bloginfo( 'charset' );?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<nav class="newt-nav-main">
<?php wp_nav_menu(); ?>
</nav>