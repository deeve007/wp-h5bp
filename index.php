<?php get_header(); ?>

<section class="section-content">

	<header class="section-header">
		<h1 class="section-title">Recent Entries</h1>
	</header>

	<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo 'Permalink to ' . the_title_attribute( 'echo=0' ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="entry-meta"><?php theme_posted_on(); ?></div>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
		<footer class="entry-meta">
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'theme' ), __( '1 Comment', 'theme' ), __( '% Comments', 'theme' ) ); ?></span>
		</footer><!-- #entry-meta -->
		<?php endif; ?>
	</article><!-- #post-<?php the_ID(); ?> -->

	<?php endwhile; ?>

	<?php theme_content_nav( 'nav-below' ); ?>

	<?php else : ?>

	<article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title">Nothing Found</h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<p>There are no posts here.</p>
		</div><!-- .entry-content -->
	</article><!-- #post-0 -->

	<?php endif; ?>

</section><!-- .section-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>