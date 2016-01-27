<?php /* Template Name: Contact Us Page */ get_header(); ?>

<!-- section -->
<section class="InnerPage">
	<div class="InnerPage__title">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="InnerPage__content">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="col-xs-12 col-sm-5">
					<?php the_content(); ?>
				</div>
				<div class="col-xs-12 col-sm-7">
					<div class="formulario">
						<form action="sendEmail" method="POST" role="form" class="ajaxSend" data-action="sendEmail">

							<div class="form-group col-xs-12 col-sm-6">
								<label for="">Name</label>
								<input type="text" name="name" class="form-control" id="" placeholder="Peter Example">
							</div>
							<div class="form-group col-xs-12 col-sm-6">
								<label for="">Email</label>
								<input type="email" name="email" class="form-control" id="" placeholder="example@test.com">
							</div>
							<div class="form-group col-xs-12">
								<textarea name="message" id="inputMessage" class="form-control" rows="3" required="required"></textarea>					
							</div>
							<div class="form-group col-xs-12">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
					<div class="clearfix"></div>
					<div class="alert Emailstatus" role="alert">...</div>
				</div>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>
</div>
</section>
<!-- /section -->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
