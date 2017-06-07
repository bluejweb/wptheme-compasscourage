<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Cookie|Josefin+Sans|Lobster+Two" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'navigation/main' ); ?>

<header class="masthead">
    <div class="wrap">
        <div class="site-title">
            <span class="wordmark"><?php bloginfo( 'name' ); ?><small class="annotation"><?php echo get_bloginfo( 'description', 'display' ); ?></small></span>
        </div>
    </div>
</header>

<div class="wrap content">





