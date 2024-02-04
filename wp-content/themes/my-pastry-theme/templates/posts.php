<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
    <p>
        <?php the_post_thumbnail(); ?>
    </p>
    <p>
        <?php the_content(); ?>
    </p>
    <p>
        <?php the_content(); ?>
    </p>
<?php
    endwhile;
endif;
?>
</div>