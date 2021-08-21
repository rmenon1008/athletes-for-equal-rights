<?php
/*
 * Template Name: Right Sidebar ( Content, Primary Sidebar )
 *
 * Template Post Type: post, page
 *
 * The template for displaying Page/Post with Sidebar on right
 *
 * @package FF_Multipurpose
 */

get_header();

$show_content = ff_multipurpose_gtm( 'ff_multipurpose_show_homepage_content' );

if ( $show_content || ! is_front_page() ) :
    ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content/content', get_post_type() );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php
    get_sidebar();
endif;
get_footer();
