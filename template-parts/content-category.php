<div class="post__container">
    <a href="<?php the_permalink(); ?>">
        <div class="post">
            <div>
            <img src="  <?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(''); ?>miniaturka">
            </div>
            <div class="post__text">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <p class="post__text-date"><?php the_date(); ?></p>
                <p class="post__text-comments">
                    <?php comments_number(); ?>
                </p>
            
            <div class="post__excerpt">
                <?php
                the_excerpt();
                ?>
            </div>
            <div class="post__actions">
                <?php
                the_tags('<button class="post__actions-tag"><i class="fa fa-tag"></i>', '</button><button class="post__actions-tag"><i class="fa fa-tag"></i>', '</button>');
                ?>
                
            </div>
            </div>
        </div>
    </a>
</div>