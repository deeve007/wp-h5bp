<?php get_header(); ?>

<section class="section-content">

    <?php the_post(); ?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<header class="entry-header">
    		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
    		<div class="entry-thumbnail">
    			<?php the_post_thumbnail(); ?>
    		</div>
    		<?php endif; ?>
    		
    		<h1 class="entry-title"><?php the_title(); ?></h1>
    	</header><!-- .entry-header -->
    
    	<div class="entry-content">
    		<?php the_content(); ?>
    	</div><!-- .entry-content -->
    </article><!-- #post-<?php the_ID(); ?> -->
    
    <?php comments_template(); ?>
    
</section><!-- .section-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>