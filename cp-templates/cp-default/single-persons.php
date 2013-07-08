<?php
	get_header();
?>
<?php roots_content_before(); ?>
<?php do_action('cp_content_before'); ?>
<div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
	<?php roots_sidebar_before(); ?>
	<?php do_action('cp_sidebar_before'); ?>
	<aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
		<?php roots_sidebar_inside_before(); ?>
		<?php do_action('cp_sidebar_inside_before'); ?>
		<div class="well">
			<?php dynamic_sidebar( 'persons' ); ?>
		</div>
		<?php roots_sidebar_inside_after(); ?>
		<?php do_action('cp_sidebar_inside_after'); ?>
	</aside><!-- /#sidebar -->
	<?php roots_sidebar_after(); ?>
	<?php do_action('cp_sidebar_after'); ?>
	<?php roots_main_before(); ?>
	<?php do_action('cp_main_before'); ?>
	<div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
		<?php roots_loop_before(); ?>
		<?php do_action('cp_loop_before'); ?>
		<?php get_template_part( 'loop', 'single' ); ?>
		<?php roots_loop_after(); ?>
		<?php do_action('cp_loop_after'); ?>
	</div><!-- /#main -->
	<?php roots_main_after(); ?>
	<?php do_action('cp_main_after'); ?>
</div><!-- /#content -->
<?php roots_content_after(); ?>
<?php do_action('cp_content_after'); ?>
<?php get_footer(); ?>
<!-- <?php echo basename( __FILE__ ); ?> -->