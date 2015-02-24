<?php ?>

<?php if ( ! dynamic_sidebar( 'widgets' ) ) : ?>
<section class="sidebar">
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'widgets' ); ?>
	</div><!-- .widget-area -->
</section><!-- .sidebar -->
<?php endif; // end sidebar widget area ?>