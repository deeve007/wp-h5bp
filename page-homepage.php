<?php 
/**
 * Template Name: Homepage Template
 */
 
get_header(); ?>

<section class="section-content">

<?php the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<header class="entry-header">
    		<h1 class="entry-title"><?php the_title(); ?></h1>
    	</header><!-- .entry-header -->
    
    	<div class="entry-content">
    		<?php the_content(); ?>
    	</div><!-- .entry-content -->
    </article><!-- #post-<?php the_ID(); ?> -->
    
    <?php comments_template( '', true ); ?>
    
</section><!-- .section-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>