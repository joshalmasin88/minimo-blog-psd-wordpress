<?php get_header(); ?>

<div class="container pl-5 pr-5">
    <div class="row">
        <div class="col-md-8 mt-5">

            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>



        <div class="col-md-4 mt-5 pr-4">
            <div class="author-aboutme">
                <?php 
                $authorid = get_the_author_meta('ID');
                $get_author_gravatar = get_avatar_url($authorid, array('size' => 450));
                ?>
                <img src="<?= $get_author_gravatar; ?>" class="img-fluid" alt="" />
                <h4 class="pt-4">About me</h4>
                <p>
                    <?php the_author_meta('description'); ?>
                </p>
            </div>

            <div class="mt-4">
                <?php if(is_active_sidebar('sidebar')) :?>
                <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
<?php wp_footer(); ?>