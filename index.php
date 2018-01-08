<?php
get_header();


if (have_posts()):
    
    
    while (have_posts()): the_post();
?>
        <h1><?php echo the_title(); ?> </h1>
        <p><?php echo the_content(); ?></p>

<?php
    endwhile;

else:

    echo "no post";

endif;

get_footer();
