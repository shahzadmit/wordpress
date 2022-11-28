<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 1.0
 */

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?php echo get_template_directory_uri() . '/assets/incl/bootstrap-5.0.2-dist/css/bootstrap.min.css' ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/sln5fnl.css">
        <link href="<?php echo get_template_directory_uri() . '/assets/incl/font-awesome-4.7.0/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri() . '/assets/css/style.css' ?>" rel="stylesheet">
        <link rel="apassets/ple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/site.webmanifest">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <title>Elwa</title>
    </head>

<body <?php body_class(); ?>>
<header class="top_header">
    <div class="logo">
        <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex d-xs-flex d-sm-flex d-md-block justify-content-between align-items-center menus_global_wrapper">
                    <button class="d-block d-xs-block d-sm-block d-md-none btn btn-primary custom_button-5 top_menu_button" type="button" data-bs-toggle="offcanvas" data-bs-target="#modibleMenu" aria-controls="modibleMenu">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="modibleMenu" aria-labelledby="modibleMenuLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="modibleMenuLabel">Das Menü</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div id="mainmenu" class="d-none d-xs-none d-sm-none d-md-flex align-items-center">
                            <nav id="index-navigation" class="index-navigation" role="navigation">
                                <div class="menu-mainmenu_de-container">
                      	  <?php
                            $args = array(
                                'menu' => 'mainmenus' ,
                                'theme_location' => 'primary',
                                'container' => 'ul',
                                'menu_class' => 'd-flex flex-wrap nav-menu',
                            );
                            wp_nav_menu($args);
                            ?>
                                </div>
                            </nav>
                        </div>
                        <div class="right_info d-flex">
                            <div class="card align-items-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/user.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary card-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Händler
                                    </button>
                                </div>
                            </div>
                            <div class="card align-items-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/settings.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary card-text" data-bs-toggle="modal" data-bs-target="#modal_ers">
                                        Ersatzteile
                                    </button>
                                </div>
                            </div>
                            <div class="card align-items-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary card-text" data-bs-toggle="modal" data-bs-target="#modal_contakt">
                                        Kontakt
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
