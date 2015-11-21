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
			<div class="entry-content kicks">
				<div id="kicks_wrapper">
				<?php query_posts('category_name=vansBoxes'); ?>	
				<?php while ( have_posts() ) : the_post(); ?>

				<article id="post <?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?><img id="vans2" src="<?php echo get_template_directory_uri()."/assets/imgs/vans.gif"; ?> "></a></h1>
				</header><!-- .entry-header -->

			
			        
					<div class="box_Vans" id="<?php the_title();?>">			
					
				       </div>
				
			
			
			
			</article><!-- #post-## -->
				<h1> <?php the_title(); ?> </h1>



			<?php endwhile; // End of the loop. ?>
			
			</div>
						
				</div>
			</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php// get_sidebar(); ?>
<?php// get_footer(); ?>
