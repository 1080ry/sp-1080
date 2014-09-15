<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <title>
      <?php if ( is_home() || is_front_page() ) : ?>
      <?php bloginfo('name'); ?>
      <?php else : ?>
      <?php the_title(); ?> |
      <?php bloginfo('name'); ?>
      <?php endif; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <!--CSS-->
    <link href="
    <?php bloginfo('template_url'); ?>/css/sp-style.css" rel="stylesheet" >
    <!--googlefont-->
    <link href='http://fonts.googleapis.com/css?family=Passion+One:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:600italic' rel='stylesheet' type='text/css'>
    <!-- font awesome -->
    <link href="
    <?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="
    <?php bloginfo('template_url'); ?>/favicon.ico">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <?php wp_head()?>
  </head>
  <body>
    <noscript>
      <div class="no-script">サイトを快適に利用するためには、JavaScriptを有効にしてください。</div>
    </noscript>
    <div class="wrapper">
      <nav id="menu">
        <ul>
          <li>
            <a href=""><i class="fa fa-angle-right"></i> カテゴリ</a>
          </li>
          <li>
            <a href=""><i class="fa fa-angle-right"></i> カテゴリ</a>
          </li>
          <li>
            <a href=""><i class="fa fa-angle-right"></i> カテゴリ</a>
          </li>
          <li>
            <a href=""><i class="fa fa-angle-right"></i> カテゴリ</a>
          </li>
          <li>
            <a href=""><i class="fa fa-angle-right"></i> カテゴリ</a>
          </li>
          <li>
            <a href=""><i class="fa fa-angle-right"></i> カテゴリ</a>
          </li>
          <li>
            <a href=""><i class="fa fa-angle-right"></i> カテゴリ</a>
          </li>
          <li>
            <a href=""><i class="fa fa-angle-right"></i> カテゴリ</a>
          </li>
        </ul>
      </nav>
      <!--TOPページ以外でパンくずリストを表示する-->
      <?php if ( !is_home() && !is_front_page() ) : ?>
      <div class="breadcrumbs">
        <ol>
          <?php
  if(function_exists('bcn_display'))
  { bcn_display();  }?>
        </ol>
      </div>
      <?php endif; ?>
      <header class="header">
        <h1 class="logo">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/img/sp/logo.png" width="75" height="40" alt="1080ry.com">
          </a>
        </h1>
        <div class="menu_btn"></div>
      </header>