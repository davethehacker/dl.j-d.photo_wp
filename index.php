<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

    <script src="<?php echo get_template_directory_uri(); ?>/script.js" type="text/javascript"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="main-body">
    <?php wp_body_open(); ?>

    <main>
        <?php the_post_thumbnail(); ?> <?php while (have_posts()) : the_post(); ?>
        <article>
            <?php the_content(); ?>
        </article>
        <?php endwhile; ?>
    </main>

    <?php wp_footer(); ?>
</body>

</html>