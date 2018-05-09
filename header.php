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

<nav id="nav-main" class="container-flex">
  <div class="logo">
    <img src="<?php bloginfo("template_url");?>/theme/img/logo-1.png" alt="">
  </div>

   <ul id="menu" class="">
      <?php wp_nav_menu( 'menu2' ); ?>

<!--     <li class="menu-item"><a href="">home</a></li>
    <li class="menu-item"><a href="">¿Quienes somos?</a></li>
    <li class="menu-item"><a href="">Contactanos</a></li>
    <li class="menu-item"><a href="">¿Cómo puedo aportar?</a></li>
    <li class="menu-item trigger"><a href="">Publicaciónes</a>
      <ul class="sub-menu">
        <li class="sub-menu-item"><a href="">convocatorias</a></li>
        <li class="sub-menu-item"><a href="">Enlace</a></li>
        <li class="sub-menu-item"><a href="">Blog</a></li>
 -->      </ul>
    </li>
  </ul>    
</nav>