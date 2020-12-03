<?php ini_set('display_errors', 0);?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="キーワードでサイトを説明">
    <meta name="description" content="どんなサイトか短い文章で説明">
    <title>サイトのタイトル</title>

    <link rel="shortcut icon" href="favicon.ico">
<?php wp_head() ?>
</head>

<body class="drawer drawer--left">
  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
        <?php 
        wp_nav_menu( array( 
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => 'drawer-menu',
            'depth' => 1,
        ) ); 
        ?>
        <!-- <li><a class="drawer-brand" href="#">Brand</a></li>
        <li><a class="drawer-menu-item" href="#">Nav1</a></li>
        <li><a class="drawer-menu-item" href="#">Nav2</a></li> -->
    </nav>
  </header>
  <main role="main">
    <!-- Page content -->
