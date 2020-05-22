<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post-card">
            <div class="post-card__head">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <small>Published <?php echo get_the_date('F dS'); ?></small>
                <p>
                    <?php the_excerpt(); ?>
                </p>

            </div>
            <div class="post-card__body">
                <div class="img-container">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>

                <?php
                $fname = get_the_author_meta('first_name');

                if (empty($fname)) {
                    $name = get_the_author();
                } else {
                    $name = $fname;
                }
                ?>

                <p>/<?php echo $name; ?></p>
            </div>

            <div class="post-card__footer">
                <div>
                    <?php echo get_comments_number(get_the_ID()); ?>
                    Comments</span></div>
                <div>
                    <p>
                        <strong><?php echo get_the_date('F dS Y'); ?></strong>
                        <br />
                        <?php echo get_the_date('H:i'); ?>
                    </p>
                </div>
            </div>
        </div>


<?php endwhile;
else : endif; ?>
