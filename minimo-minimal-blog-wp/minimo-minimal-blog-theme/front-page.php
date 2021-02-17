<?php get_header(); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <img src="<?php echo get_theme_mod('top_img', get_bloginfo('template_url') .'/assets/images/topimg.png') ?>" class="img-fluid"  alt="" />
        </div>
    </div>
</div>
<div class="container mt-5 w-50">
    <div class="row">
        <div class="col-md-6">
            <div class="card box">
                <?php if(is_active_sidebar('box1')) :?>
                <?php dynamic_sidebar('box1'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6">
        <div class="card box">
                <?php if(is_active_sidebar('box2')) :?>
                <?php dynamic_sidebar('box2'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6">
        <div class="card box">
                <?php if(is_active_sidebar('box3')) :?>
                <?php dynamic_sidebar('box3'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6">
        <div class="card box">
                <?php if(is_active_sidebar('box4')) :?>
                <?php dynamic_sidebar('box4'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="mid-section mt-5 text-center">
    <div class="pt-5">
        <h4>Sign up for our newsletter</h4>
        <form action="">
            <div class="form-group mt-5">
                <input type="text" placeholder="Enter a valid email address" />
                <input id="sendbtn" type="image" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/sendicon.png" />
            </div>
        </form>
    </div>
</div>

<div class="container pl-5 pr-5 mt-5">
    <div class="row">
        <div class="col-md-6">
        <div class="card box">
                <?php if(is_active_sidebar('box5')) :?>
                <?php dynamic_sidebar('box5'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6">
        <div class="card box">
                <?php if(is_active_sidebar('box6')) :?>
                <?php dynamic_sidebar('box6'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

<?php get_footer(); ?>