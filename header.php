 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cofee</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <?php wp_head(); ?>
</head>

<body>
<header class="header" id="top">
    <div class="container">
        <div class="header__inner">
            <div class="header__left">
            <?php wp_nav_menu( array('menu' => 'menuleft','container'=> 'ul', 'menu_id' => '','menu_class' => '')); ?>
                                   
            </div>
            <div class="header__center">
                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
            </div>
            <div class="header__right">
                <div>
                <?php wp_nav_menu( array('menu' => 'menurighit','container'=> 'ul', 'menu_id' => '','menu_class' => '')); ?>

                </div>
                <div>
                     <img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt="">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/toggle.png" alt="">
                </div>
                <div class="cart">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg><p id="count">0</p></div>
            </div>
        </div>
    </div>
     
  </header>