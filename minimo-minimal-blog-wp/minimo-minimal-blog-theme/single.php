<?php get_header(); ?>

<div class="container pl-5 pr-5">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php wp_footer(); ?>
<?php get_footer(); ?>