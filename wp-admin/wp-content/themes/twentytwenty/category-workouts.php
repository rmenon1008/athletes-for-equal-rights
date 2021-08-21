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
 * <?php
*
*	$archive_title    = '';
*	$archive_subtitle = '';
*
*	if ( $archive_title || $archive_subtitle ) {
*		?>
*
*		<header class="archive-header has-text-align-center header-footer-group">
*
*			<div class="archive-header-inner section-inner medium">
*
*				<?php if ( $archive_title ) { ?>
*					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
*				<?php } ?>
*
*				<?php if ( $archive_subtitle ) { ?>
*					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
*				<?php } ?>
*
*			</div><!-- .archive-header-inner -->
*
*		</header><!-- .archive-header -->
*
*		<?php
*	} ?>
 */

get_header();
?>
<style>
    .entry-categories {
        display:none;
    }
	.entry-content * {
		max-width: 120rem !important;
	}
	
</style>


    
<main id="site-content" role="main">
	
	<?php

	$archive_title='Workouts';
	$archive_subtitle='';

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header archive-header-workouts has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="entry-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}
	
	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true"/>';
			}
			
            
			the_post();
			
			get_template_part( 'template-parts/content', get_post_type() );
			
		}
	} ?>

	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();