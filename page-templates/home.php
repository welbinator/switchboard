<?php /* Template Name: Home Page */ ?>
<?php echo get_header(); ?>
<main id="content-area">
    
    <div class="column game">
        <div class="gradient"></div>
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>yellow-bg-logo.svg" alt="">
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>switchboard-logo-mobile.svg" alt="">
        <a href="/game" class="custom-link"><div class="overlay">
            <p>The Game</p>
        </div></a>
    </div>
    <div class="column journey">
        <div class="gradient"></div>
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>orange-bg-logo.svg" alt="">
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>switchboard-logo-mobile.svg" alt="">
        <a href="/journey" class="custom-link"><div class="overlay">
            <p>The Journey</p>
        </div></a>
    </div>
    <div class="column press">
        <div class="gradient"></div>
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>purple-bg-logo.svg" alt="">
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>switchboard-logo-mobile.svg" alt="">
        <a href="/press" class="custom-link"><div class="overlay">
            <p>Press</p>
        </div></a>
    </div>
    <div class="column events">
        <div class="gradient"></div>
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>blue-bg-logo.svg" alt="">
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>switchboard-logo-mobile.svg" alt="">
        <a href="/events" class="custom-link"><div class="overlay">
            <p>Events</p>
        </div></a>
    </div>
    <div class="column contact-us">
        <div class="gradient"></div>
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>grey-bg-logo.svg" alt="">
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>switchboard-logo-mobile.svg" alt="">
        <a href="/contact-us" class="custom-link"><div class="overlay">
            <p>Contact</p>
        </div></a>
    </div>
   </main>
   <?php echo get_footer(); ?>