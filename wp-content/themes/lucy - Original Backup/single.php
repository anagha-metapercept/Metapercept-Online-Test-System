<?php
/**
 * The template for displaying all pages.
 *
 * @package Lucy
 */
 get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
        <div class="heading-name bg-source" >
            <div class="wrap-grid">
            	<h3><?php echo esc_html(get_theme_mod('pp_blog_page')); ?></h3>
            </div>
        </div>
        
<?php endwhile; ?>
<?php get_footer(); ?>