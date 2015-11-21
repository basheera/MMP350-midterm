<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sample_Theme									
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
		<?php endif; ?>
			
    <div id="vanWrapper1">
    	<div id="vanHomeWr1">
                                   
                <div class="text-left">

					<?php /* Loop One Begin */ ?>
					<?php query_posts('category_name=vansAbout'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<h1>
                    <?php the_title(); ?>
                    </h1>
                    <p>
					<?php the_content(); ?>
					</p>
					<?php endwhile; ?>
						
				</div>
               
                    
            
                <div class="text-right">                  
                    <?php /* Loop Two  Begin */ ?>                  
                    <?php rewind_posts(); ?>
                    
                    <?php
                    
                    $args = array( 'post_type' => 'skateboarding_photos', 'posts_per_page' => 10 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    
                    <h1>
                    <?php the_title(); ?>
                    </h1>
                 
                    
                    <div id="warppedTour" class="box_Vans">
                    <?php the_content(); ?>
                    </div>
                    
                    
                    <?php endwhile;
                    
                    ?>
     
           </div> 
    </div>			
		
	        


<?php // the_posts_navigation(); ?>


<?php else : ?>

<?php //get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>
		
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://www.parsecdn.com/js/parse-1.6.7.min.js"></script>

<?php //get_sidebar(); ?>
<?php createFooter(); ?>
