<?php get_header(); ?>
<section class="InnerPage">
	<div class="InnerPage__title">
		<h1>Blog</h1>
	</div>
	<div class="InnerPage__content">

		<!-- section -->
		<?php get_template_part('loop'); ?>

		<?php get_template_part('pagination'); ?>
	</div>
</section>
<!-- /section -->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
