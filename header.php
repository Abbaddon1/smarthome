<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home Application</title>
    <?php wp_head(); ?>

   
</head>
<body>
    <div class="wrapper"> 

        <div class="head__wrapper">

                <div class="header__container">
                    <!-- header menu -->
                <header class="header"> 
                    <div class="header__menu__container">
                        <nav class="header__menu">
                            <ul class="container__menu__links">
                           <li> <a class="menu__link" data-goto=".header" href="#">Home</a></li> 
                           <li> <a class="menu__link" data-goto=".about__us" href="#">About</a></li> 
                            <li> <a class="menu__link" data-goto=".testimonials" href="#">Testimonials</a></li>
                            <li> <a class="menu__link" data-goto="footer" href="#">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__logo"><p>smartHome</p></div>
                        <div class="header__login">
                            <a href="#">Login</a>
                            <button>Sign up</button>
                        </div>
                    </div>
                </header>