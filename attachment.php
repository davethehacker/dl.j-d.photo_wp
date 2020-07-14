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
        <?php while (have_posts()) : the_post(); ?>

            <?php
            $events = wp_get_post_terms($post->ID, array('event'));
            $artists = wp_get_post_terms($post->ID, array('artist'));
            foreach ($events as $event) {
                echo '<h1>' . $event->name . '</h1>';
            }

            foreach ($artists as $artist) {
                echo '<h2>' . $artist->name . '</h2>';
            }
            ?>

            <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons Lizenzvertrag" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />Dieses Werk
            ist lizenziert unter einer <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons
                Namensnennung 4.0 International Lizenz</a>.
            <p>Du darfst die Bilder unbegrenz nutzen, veröffentlichen und bearbeiten.</p>
            <p>Dabei musst du J-D Photo als Urheber erkenntlich machen. </br>Du kannst dafür die Website <a href="https://j-d.photo">j-d.photo</a> oder <a href="https://www.instagram.com/j_d.photo_/">@j_d.photo_</a> auf Instagram verlinken.</p>
            <a href="<?php echo wp_get_attachment_url() ?>"><button>Akzeptieren und herunterladen</button></a>
    </main>
<?php endwhile; ?>
<?php wp_footer(); ?>
</body>

</html>