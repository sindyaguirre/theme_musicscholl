<?php get_header() ?>

<main class="home-main">
    <div class="container">
        <ul class="aulas-listagem">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?> 

                    <li class="aulas-listagem-item">
                        <?php // the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?> </h2>
                        <p> <?php the_content(); ?></p>
                    </li>
                    <?php
                }
            }
            ?>

        </ul>

    </div>

</main>
<?php get_footer(); ?>

