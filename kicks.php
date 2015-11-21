<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sample_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?><img id="vans2" src="<?php echo get_template_directory_uri()."/assets/imgs/vans.gif"; ?> "></a></h1>
				</header><!-- .entry-header -->

			<div class="entry-content">
				<div id="histoy_wrapper">
				<img src="<?php echo get_template_directory_uri()."/assets/imgs/vans2.jpg"; ?> ">
				<p id="history_p">
				<?php the_content(); ?>
				</p>	
				<?php
					wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'midterm' ),
					'after'  => '</div>',
				) );
				?>
				</div>
			</div><!-- .entry-content -->
			
			
			</article><!-- #post-## -->


				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php// get_sidebar(); ?>
<?php// get_footer(); ?>
