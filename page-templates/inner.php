<?php /* Template Name: Inner Pages */ ?>
<?php echo get_header(); ?>
<main>

    <div class="<?php print strtolower(get_the_title()); ?> inner column">
        <div class="gradient"></div>
        <!-- <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>yellow-bg-logo.svg" alt=""> -->
        <img class="desktop-column-image" src="<?php echo esc_url( get_field('column_image') ); ?>" alt="">
        <img class="mobile-column-image" src="<?php echo get_template_directory_uri() . '/inc/img/' ?>switchboard-logo-mobile.svg" alt="">
        <div class="overlay">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>


<div class="inner-content">
    
<?php the_content() ?>
</div>
    
</main>

    


<?php echo get_footer(); ?>