<?php get_header(); ?>

<div class="container pl-5 pr-5">

    <div class="row">

        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <div class="col-md-6">
            <?php get_template_part('content', get_post_format()); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>


    </div>
</div>

<div class="mid-section mt-5 text-center">
    <div class="pt-5">
        <h4>Sign up for our newsletter</h4>
        <form action="">
            <div class="form-group mt-5">
                <input type="text" placeholder="Enter a valid email address" />
                <input id="sendbtn" type="image" src="assets/images/sendicon.png" />
            </div>
        </form>
    </div>
</div>

<div class="container pl-5 pr-5 mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img src="https://source.unsplash.com/user/erondu/1600x900" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <img src="https://source.unsplash.com/user/erondu/1600x900" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

<?php get_footer(); ?>