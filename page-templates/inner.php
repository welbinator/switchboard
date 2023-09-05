<?php /* Template Name: Inner Pages */ ?>
<?php echo get_header(); ?>
<main>
    
    <div class="<?php print strtolower(get_the_title()); ?> inner column">
        <div class="gradient"></div>
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>inner-page-panel-logo.svg" alt="">
        <img src="<?php echo get_template_directory_uri() . '/inc/img/' ?>switchboard-logo-mobile.svg" alt="">
        <div class="overlay">
            <p><?php the_title(); ?></p>
        </div>
    </div>
<div class="inner-content">
    <h1><?php the_title(); ?></h1>
<?php the_content() ?>
</div>
    
</main>

    


<?php echo get_footer(); ?>