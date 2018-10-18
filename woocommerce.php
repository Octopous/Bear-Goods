<?php get_header(); ?>

<div class="banner" style="background-image:url(<?php the_field('omslagfoto', 5);?>); background-repeat: no-repeat;">
<div class="bannertext">
    <h1><?php the_field('omslagtitel', 5); ?></h1><br>
    <h2><?php the_field('omslagbeschrijving', 5); ?></h2>
    
    </div>
</div>
<div class="sidebar">
    <div class="sidebarcontainer">
<?php get_product_search_form() ?>
        </div>
</div>
<div class="statusbar"></div>
<div class="producten">
    <div class="grid">
<?php woocommerce_content(); ?>
</div></div>
<?php get_sidebar(); ?>


<?php get_footer(); ?>