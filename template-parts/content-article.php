<div class="article__container">
    <header class="article__header">
        <h2>
            <?php echo get_the_title(); ?>
        </h2>
        <img class="article__header-img" src="  <?php the_post_thumbnail_url(); ?>"
            alt="<?php the_title(''); ?>miniaturka">
        <div class="article__info">
            <span class="article__info-date">
                <?php the_date(); ?>
            </span>
            <div class="article__info-tag">
                <?php
                the_tags('<span class="article__info-tag"><i class="fa fa-tag"></i>', '</span><span class="article__info-tag"><i class="fa fa-tag"></i>', '</span>');
                ?>
            </div>
        </div>
    </header>
    <div class="article__content">

        <?php

        the_content();
        ?>
    </div>
    <?php
    comments_template();
    ?>


</div>