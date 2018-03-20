<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true);
    } else {
      bloginfo('name'); echo " - "; bloginfo('description');
    }
  ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav id="nav-main">
  <ul id="menu">
    <li class="menu-item">home</li>
    <li class="menu-item">¿Quienes somos?</li>
    <li class="menu-item">Contactanos</li>
    <li class="menu-item">¿Cómo puedo aportar?</li>
    <li class="menu-item">Publicaciónes
      <ul class="sub-menu">
        <li class="sub-menu-item">convocatorias</li>
        <li class="sub-menu-item">Enlace</li>
        <li class="sub-menu-item">Blog</li>
      </ul>
    </li>
  </ul>    
</nav>