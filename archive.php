<?php get_header(); ?>

<section class="section-content">

	<?php if ( have_posts() ) : ?>

	<header class="section-header">
		<h1 class="section-title">
			<?php 
			if ( is_day() ) :
				printf( __( 'Daily Archives: %s', 'theme' ), get_the_date() );
			elseif ( is_month() ) :
				printf( __( 'Monthly Archives: %s', 'theme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentythirteen' ) ) );
			elseif ( is_year() ) :
				printf( __( 'Yearly Archives: %s', 'theme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentythirteen' ) ) );
			else :
				_e( 'Archives', 'theme' );
			endif;
			?>
		</h1>
	</header>

	<?php rewind_posts(); ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="entry-meta"><?php theme_posted_on(); ?></div>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<?php if ( comments_open() ) : ?>
		<footer class="entry-meta">
			<span class="comments-link"><?php comments_popup_link(); ?></span>
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