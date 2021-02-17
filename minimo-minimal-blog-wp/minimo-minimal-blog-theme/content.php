                <div class="card">
                    <?php if(has_post_thumbnail()) : ?>
                    <img src="<?= the_post_thumbnail_url('thumbnail'); ?>" class="card-img-top" alt="">
                    <?php endif; ?>

                    <!-- If Single Or Page Post Page Display Full Content -->
                    <?php if(is_single() || is_page()) : ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h5>
                        <p class="card-text">
                            <?php the_content(); ?>
                        </p>
                    </div>

                    <!-- Else Display Excerpt -->
                    <?php else : ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h5>
                        <p class="card-text">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>

                    <?php endif; ?>
                    <div class="card-footer" style="background: none; border: 0px;">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                            <?php the_author(); ?>
                        </a>
                    </div>
                </div>