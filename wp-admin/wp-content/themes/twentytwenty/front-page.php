<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

<div id="header-image">
    <header class="archive-header has-text-align-center header-footer-group">
        
        <div class="archive-header-inner section-inner medium">

            <h1 class="title">Athletes are standing up for<br><h class="athlete"><?php echo do_shortcode( '[typed string0="Black Lives Matter" string1="LGBTQ+ rights" string2="equal opportunity" string3="gender equality" string4="equal rights" typeSpeed="70" startDelay="200" backSpeed="70" backDelay="1000" shuffle="0"]</h>' ); ?></h1>

        </div><!-- .archive-header-inner -->

    </header><!-- .archive-header -->
    </div>
<?php

if ( have_posts() ) {

    $i = 0;

    while ( have_posts() ) {
        $i++;
        if ( $i > 1 ) {
            echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
        }
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );

    }
}
?>

<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();