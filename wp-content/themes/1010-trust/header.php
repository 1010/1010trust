<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right'); bloginfo( 'name' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_enqueue_script("jquery"); ?>
    <?php	wp_head(); ?>
    <!--[if lt IE 8]>
      <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.corner.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/1010trust_ie.js"></script>
    <![endif]-->
  </head>
  
  <body <?php body_class(); ?>>
    <div id="wrapper">
      <div id="blob_head">
        <a href="<?php bloginfo( 'home' ); ?>"><img id="headerimg" alt="10:10 Trust" src="<?php bloginfo('template_url') ?>/img/1010trust-header.png" /></a>
        <?php wp_page_menu(array('show_home'=>true, 'exclude'=>52)); ?>
      </div><!-- #blob_head -->
