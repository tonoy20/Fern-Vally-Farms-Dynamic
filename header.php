 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>

 <head>
     <meta charset="<?php bloginfo('charset'); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php bloginfo('name'); ?></title>
     <link rel="icon" type="image" href="<?php echo get_template_directory_uri();?>/images/icons/silhouette_meadow_weed_lawn_ecology_plant_leaf_grass_icon_233523.ico">
     <!-- icon -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,800;1,400;1,500;1,600;1,800&family=Ropa+Sans&display=swap" rel="stylesheet">

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,800;1,400;1,500;1,600;1,800&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
     <!-- slick slider  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
     <?php wp_head(); ?>
 </head>
 <header class="header">
     <!-- Top Bar -->
     <nav class="">
         <div class="topnav">
             <div class="d-flex justify-content-between">
                 <div class="d-flex justify-content-between container">
                     <div class="d-flex align-items-center">
                         <p class="logo_p"><img class="top_logo" src="<?php  the_field('header_icon_1', 'option'); ?>"><?php the_field('header_title_1', 'option'); ?></p>
                     </div>
                     <div class="d-flex">
                         <ul class="nav_ul">
                             <li class="list-inline-item nav-item">
                                 <p class="logo_p"><img class="top_logo" src="<?php the_field('header_icon_2', 'option'); ?>"><?php the_field('header_title_2', 'option'); ?></p>
                             </li>
                             <li class="list-inline-item nav-item">
                                 <p class="logo_p"><a href="mailto:<?php the_field('header_email_link', 'option'); ?> "><img class="top_logo" src="<?php the_field('header_icon_3', 'option'); ?>"></a><?php the_field('header_title_3', 'option'); ?></p>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </nav>
     <!-- Main Navigation -->

     <nav class="nav_down">
         <div class="container">
             <div class="row">
                 <div class="col-3">
                     <div class="pt-3">
                         <a href="#"><img class="toplogo" src="<?php the_field('header_big_logo', 'option') ?>"></a>
                     </div>
                 </div>
                 <div class="col-9 pt-4">
                     <div class="row login-div">
                         <div class="col-6 searchbar">
                             <form class="form-inline">
                                 <div class="sear">
                                     <div class="form-group has-search">
                                         <input type="text" class="form-control" placeholder="Search"><span class="form-control-feedback"><i class="headic bi bi-search"></i></span></input>
                                     </div>
                                 </div>
                             </form>
                             <!--  -->
                         </div>
                         <div class="">
                             <p class="">
                                 <a class="login" href="#">LOGIN</a><a class="login" href="#">|</a>
                                 <a class="login" href="#">REGISTER</a>
                                 <a class="login" href="#"><i class="bi bi-cart4 cart_icon"></i></a>
                             </p>
                         </div>
                     </div>

                     <div class="downbar pt-5">
                         <!--  -->
                         <div class="row nav_home">
                             <div class="pt-1">
                                 <div class="navbar-collapse d-flex">
                                     <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container'=> 'navbar-collapse d-flex', 'menu_class' => 'downbar_ul'  )); ?>
                                     <ul class="downbar_ul navbar_nav">
                                         <li class="list-inline-item">
                                             <a class="downbar_a" href="#"><i class="bi bi-facebook"></i></a>
                                         </li>
                                         <li class="list-inline-item">
                                             <a class="downbar_a" href="#"><i class="bi bi-twitter"></i></a>
                                         </li>
                                         <li class="list-inline-item">
                                             <a class="downbar_a" href="#"><i class="bi bi-camera-fill"></i></a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         
                     </div>
                 </div>
             </div>
         </div>
     </nav>
 </header>