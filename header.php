<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <?php wp_head(); ?>

</head>


<?php

wp_nav_menu(
  array(
    'theme_location' => 'main-navigation',
    'container' => 'nav',
    'container_class' => 'nav',
    'menu_class' => 'nav'
));

?>    

<body <?php body_class('body'); ?>> 