<?php get_header(); ?>

    <?php if (have_posts()){ ?>

        <?php while(have_posts()) {?>
            <?php the_post(); ?>
            <h2>
                <a href ="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div>
                Posted on 
                <a 
                    href ="<?php the_permalink(); ?>">
                    <?php echo get_the_date(); ?>
                </a>
                by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                    <?php echo get_the_author(); ?>
            </a>
            </div>

            <div>
                <?php the_excerpt(); ?>

            </div>
            <a href="<?php the_permalink(); ?>">
                Read more
            </a>
        <?php } ?>

    <?php } else { ?>
        <p>Sorry, no posts match your criteria.</p>
    <?php } ?>

    <!--TEST -->
    <!-- ANOTHER TEST-->

<?php get_footer(); ?>