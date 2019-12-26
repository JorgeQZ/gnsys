<?php get_header() ?>
<div class="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"> 
    <div class="banner-title">
        <?php the_title() ?>
    </div>
</div>
<?php get_footer() ?>