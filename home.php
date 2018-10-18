<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="lightbox">


<div>
    <div class="carousel">
        <ul class="slides">
            <input type="radio" name="radio-buttons" id="img-1" checked />
            <li class="slide-container">
                <div class="slide-image" style="background-image:url(<?php the_field('afbeelding_1');?>);">
                   <div class="bannertext">
                        <h1><?php the_field('titel_1'); ?></h1><br>
                        <h2><?php the_field('beschrijving_1'); ?></h2>
                       <br><a href="<?php the_field('productlink_1');?>" class="redbutton">Bekijk in shop <span class="buttonarrow"></span></a>
                    </div>
                </div>
                <div class="carousel-controls">
                    <label for="img-3" class="prev-slide">
                        <span><div class="prev"></div></span>
                    </label>
                    <label for="img-2" class="next-slide">
                      <span><div class="next"></div></span>
                    </label>
                </div>
            </li>
            <input type="radio" name="radio-buttons" id="img-2" />
            <li class="slide-container">
                <div class="slide-image" style="background-image:url(<?php the_field('afbeelding_2');?>);">
                   <div class="bannertext">
                        <h1><?php the_field('titel_2'); ?></h1><br>
                        <h2><?php the_field('beschrijving_2'); ?></h2>
                       <br><a href="<?php the_field('productlink_2');?>" class="redbutton">Bekijk in shop <span class="buttonarrow"></span></a>
                    </div>
                </div>
                <div class="carousel-controls">
                    <label for="img-1" class="prev-slide">
                        <span><div class="prev"></div></span>
                    </label>
                    <label for="img-3" class="next-slide">
                        <span><div class="next"></div></span>
                    </label>
                </div>
            </li>
            <input type="radio" name="radio-buttons" id="img-3" />
            <li class="slide-container">
                <div class="slide-image" style="background-image:url(<?php the_field('afbeelding_3');?>);">
                   <div class="bannertext">
                        <h1><?php the_field('titel_3'); ?></h1><br>
                        <h2><?php the_field('beschrijving_3'); ?></h2>
                       <br><a href="<?php the_field('productlink_3');?>" class="redbutton">Bekijk in shop <span class="buttonarrow"></span></a>
                    </div>
                </div>
                <div class="carousel-controls">
                    <label for="img-2" class="prev-slide">
                        <span><div class="prev"></div></span>
                    </label>
                    <label for="img-1" class="next-slide">
                        <span><div class="next"></div></span>
                    </label>
                </div>
            </li>
            
        </ul>
    </div>
</div>

    
</div>
 
<svg class="medal" width="40" height="40" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.27 39.3"><defs><style>.cls-1{fill:#e20814;}.cls-2{font-size:24.26px;fill:#fff;font-family:Montserrat-ExtraBoldItalic, Montserrat;font-weight:700;font-style:italic;}</style></defs><circle class="cls-1" cx="19.68" cy="19.27" r="19.32"/><text class="cls-2" transform="translate(5.23 28.26)">#1</text></svg><h2>Bestsellers</h2>

<div class="bestsellers"></div>












<?php get_sidebar(); ?>


<?php get_footer(); ?>