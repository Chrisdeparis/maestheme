<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Maes Theme</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

<?php
      if( is_front_page() ):
        $maes_classes = array('maes-class', 'my-class' );
      else:
        $maes_classes = array('no-maes-class');
      endif;
   ?>
  <body <?php body_class($maes_classes); ?>>

    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
