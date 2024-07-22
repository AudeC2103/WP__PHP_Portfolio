<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Aude CAMPILLO</title>
    <link rel="stylesheet" href="/style.css">
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