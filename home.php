<?php
/*
Template Name: home
*/
?>

<?php get_header();?>
    
                   
                   <!-- header text -->
                    <div class="header__text__container">
                        <h1>Smart Home Application</h1>
                        <p>Wisdom new and valley answer. 
                            Contented it so is discourse recommend. 
                            Man its upon him call mile. An pasture 
                            he himself believe ferrars besides cottage.</p>
                    </div>

                    <!-- social text -->
                    <div class="social__container">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/fb__header.svg" alt="facebook"></a>
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/inst__header.svg" alt="instagram"></a>
                        <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/twit.svg" alt="twitter"></a>
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/in__header.svg" alt="in"></a>
                    </div>

                    <!-- header background -->
                    <div class="header__bg__line__left"></div>
                    <div class="header__bg__line__center"></div>
                    <div class="header__bg__line__right"></div>
                    <div class="header__bg__circle__left"></div>
                    <div class="header__bg__circle__center"></div>
                    <div class="header__bg__circle__right"></div>
                    <div class="header__bg__circle__right__top"></div>


                
                </div>
                <div class="smartphones__container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/phones.svg" alt="phones">
                </div>

                    <!-- buttons app -->

                <div class="applications">
                    <div class="app__img__container left">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/Apple__button.svg" alt="apple button">
                        <a href="#"><div class="click__area__left"></div></a>
                    </div>
                    
                    <div class="app__img__container right">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/Google__button.svg" alt="google button">
                        <a href="#"><div class="click__area__right"></div></a>
                    </div>
                </div>
        </div>
                <!--  background -->
        <main>
        <div class="body__bg">
            <div class="body__lines__bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/intro__bg1.svg" alt="lines"></div>
            <div class="body__lines__bg2"><img src="<?php bloginfo('template_url'); ?>/assets/img/about__bg.svg" alt="about bg lines"></div>
            <div class="body__lines__bg3"><img src="<?php bloginfo('template_url'); ?>/assets/img/about__bg.svg" alt="about bg lines"></div>
            <div class="dody__circle__left__bg"></div>
            <div class="dody__circle__right__bg"></div>
            <div class="dody__circle__centre__bg"></div>


        </div>
                <!--  about us -->

        <section class="about__us">
                <h2 class="about__title">About us</h2>
                         
         
                <!--  first card -->

            <div class="first__card__container">


                <div class="first__card__img__container">
                    <img class="first__card__img" src="<?php the_field('card__photo1')?>">
                    <div class="first__card__bg"></div>
                </div>


                <div class="first__card__text">
                    <h3><?php the_field('title_card1')?></h3>
                    <p>Ye am depending propriety sweetness 
                        distrusts belonging collected. Smiling 
                        mention he in thought equally musical. 
                        Wisdom new and valley answer. Contented
                        it so is discourse recommend. Man its upon
                        him call mile. An pasture he himself believe
                        ferrars besides cottage.</p>
                    <button>Learn more</button>
                </div>
            </div>
            
     

                <!--  second card -->
            
                <div class="second__card__container">

                    <div class="second__card__img__container">
                        <img class="second__card__img" src="<?php the_field('card__photo2')?>">
                        <div class="second__card__bg"></div>
                    </div>
    
    
                    <div class="second__card__text">
                        <h3><?php the_field('title_card2')?></h3>
                        <p><?php the_field('main__text__card2')?></p>
                        <button>Learn more</button>
                    </div>
                </div>

                <!--  third card -->

                <div class="third__card__container">

                    <div class="third__card__img__container">
                        <img class="third__card__img" src="<?php bloginfo('template_url'); ?>/assets/img/about tel3.svg" alt="tel1">
                        <div class="third__card__bg"></div>
                    </div>
    
    
                    <div class="third__card__text">
                        <h3>Control Electric Appliences</h3>
                        <p>Ye am depending propriety sweetness 
                            distrusts belonging collected. Smiling 
                            mention he in thought equally musical. 
                            Wisdom new and valley answer. Contented
                            it so is discourse recommend. Man its upon
                            him call mile. An pasture he himself believe
                            ferrars besides cottage.</p>
                        <button>Learn more</button>
                    </div>
                </div>



      

        </section>


        <section class="clients">
            <div class="clients__title__text">
                <h2>Our Clients</h2>
                <p>Wisdom new and valley answer. 
                    Contented it so is discourse recommend. 
                    Man its upon him call mile. An pasture 
                    he himself believe ferrars besides cottage.</p>
            </div>
            <div class="clients__logo__container">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo1.svg" alt="logo1">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo2.svg" alt="logo2">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo3.svg" alt="logo3">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo4.svg" alt="logo4">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo5.svg" alt="logo5">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo6.svg" alt="logo6">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo7.svg" alt="logo7">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo8.svg" alt="logo8">
            </div>
            
        </section>


        <section class="testimonials">
            <div class="testimonials__title__text">
                <h2>Testimonials</h2>
                <p class="subtitle">Wisdom new and valley answer. 
                    Contented it so is discourse recommend. 
                    Man its upon him call mile. An pasture 
                    he himself believe ferrars besides cottage.</p>
            </div>
            <div class="testimonials__cards">
                <!-- card 1 -->
                <div class="testimonials__card">
                    <div class="testimonials__content__card">
                        <p class="test__text__info"> Our company, we do ongoing research with 
                            our target audience. This includes 30-45
                             minute phone interviews. It was difficult 
                             to conduct the interview, really listen,
                              and ask good follow up questions</p>
                        <div class="testimonials__fcs">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cham__testim.svg" alt="cham">
                            <div class="testimonials__post">
                                <p>Cham</p>
                                <p class="text__post">Product designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="testimonials__card">
                    <div class="testimonials__content__card">
                        <p class="test__text__info">We meet new clients and more often than
                             not establish long-term business relationships, all through
                              Guru. The flexibility in how projects can be structured</p>
                        <div class="testimonials__fcs">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/scopic__testim.svg" alt="scorpic">
                            <div class="testimonials__post">
                                <p>Scopic Software</p>
                                <p class="text__post">Custom IT Solutions Firm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="testimonials__card">
                    <div class="testimonials__content__card">
                        <p class="test__text__info">It is easy to communicate with clients
                             through their message system and their SafePay feature ensures 
                             that all funds are secured prior to any work being done.</p>
                        <div class="testimonials__fcs">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/russel__im.svg" alt="russel">
                            <div class="testimonials__post">
                                <p>Russell Lee</p>
                                <p class="text__post">Writer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 4 -->
                <div class="testimonials__card">
                    <div class="testimonials__content__card">
                        <p class="test__text__info">At SOLACE Engineers, we provide engineering 
                            solutions and other services on various freelancing platforms.
                             Among them all, Guru is the best and our first choice to invite 
                             clients.</p>
                        <div class="testimonials__fcs">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/solace__testim.svg" alt="solace">
                            <div class="testimonials__post">
                                <p>Solace Engineers Inc.</p>
                                <p class="text__post">Engineering Firm</p>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
            <div class="testimonials__icon">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/client__icon__left.png" alt="icon__left">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/client__icon__right.jpg" alt="icon__right">
            </div>
            
        </section>

        <section class="faq">
            <h2>FAQ's</h2>

            <div class="faq__cards">


                <div class="faq__card 1">
                    <div class="faq__img">
                        <p class="faq__plus">+</p>
                        <p class="faq__minus">-</p>
                    </div>
                    <div class="faq__question">
                        <p>Chamber reached do he nothing be?</p>
                        <div class="faq__answer">
                            <p>Our asked sex point her she seems.
                                New plenty she horses parish design you. 
                                Stuff sight equal of my woody. Him children 
                                bringing goodness suitable she entirely put far daughter.</p>
                        </div>
                    </div>
        
                
                </div>
                

                <div class="faq__card 2">
                    <div class="faq__img">
                        <p class="faq__plus">+</p>
                        <p class="faq__minus">-</p>
                    </div>
                    <div class="faq__question">
                        <p>Stuff sight equal of my woody?</p>
                        <div class="faq__answer">
                            <p>Our asked sex point her she seems.
                                New plenty she horses parish design you. 
                                Stuff sight equal of my woody. Him children 
                                bringing goodness suitable she entirely put far daughter.</p>
                        </div>
                    </div>
        
                
                </div>

                <div class="faq__card 3">
                    <div class="faq__img">
                        <p class="faq__plus">+</p>
                        <p class="faq__minus">-</p>
                    </div>
                    <div class="faq__question 3">
                        <p>At by pleasure of children be?</p>
                        <div class="faq__answer">
                            <p>Our asked sex point her she seems.
                                New plenty she horses parish design you. 
                                Stuff sight equal of my woody. Him children 
                                bringing goodness suitable she entirely put far daughter.</p>
                        </div>
                    </div>
        
                
                </div>

                <div class="faq__card 4">
                    <div class="faq__img">
                        <p class="faq__plus">+</p>
                        <p class="faq__minus">-</p>
                    </div>
                    <div class="faq__question">
                        <p>Amounted repeated as believed in confined?</p>
                        <div class="faq__answer">
                            <p>Our asked sex point her she seems.
                                New plenty she horses parish design you. 
                                Stuff sight equal of my woody. Him children 
                                bringing goodness suitable she entirely put far daughter.</p>
                        </div>
                    </div>
        
                
                </div>

                <div class="faq__card 5">
                    <div class="faq__img">
                        <p class="faq__plus">+</p>
                        <p class="faq__minus">-</p>
                    </div>
                    <div class="faq__question">
                        <p>In am do giving to afford parish settle easily garret?</p>
                        <div class="faq__answer">
                            <p>Our asked sex point her she seems.
                                New plenty she horses parish design you. 
                                Stuff sight equal of my woody. Him children 
                                bringing goodness suitable she entirely put far daughter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="download">
                
                <div class="download__text__buttons__container">
                    <h2>Download App</h2>
                    <p>Wisdom new and valley answer. Contented it so is discourse recommend.
                     Man its upon him call mile. An pasture he himself believe ferrars
                     besides cottage.</p>
                     <div class="download__buttons">
                        
                            <a href="#"><div class="download__clickarea__left"></div></a>
                            <img class="download__left__button" src="<?php bloginfo('template_url'); ?>/assets/img/Google__button.svg" alt="Google__button">
                        

                        
                            <img class="download__right__button" src="<?php bloginfo('template_url'); ?>/assets/img/Apple__button.svg" alt="Apple__button">
                            <a href="#"> <div class="download__clickarea__right"></div></a>
                     </div>
                </div>
                
                     <div class="download__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/download__img.svg" alt="telephone">
                     </div>
        </section>

        <section class="subscribe">
            <div class="subscribe__container">
                <div class="subscribe__text__container">
                    <h3>Subscribe to get updated</h3>
                    <p> At vero eos et accusamus et iusto odio 
                        dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque .</p>
                </div>
                <button class="subscribe__button">Get start</button>
                <div class="subscribe__circle__bg"></div>
                
            </div>
        </section>
    </main>


    <?php get_footer();?>
