<?php
/**
 * Template Name: Contact
 * @package sunvalley
 */
get_header();
?>
<main class="main-container <?= pageClass(); ?>">
<?php while ( have_posts() ) : the_post(); ?>
		<div class="page-wrapper">
			<div class="page-content">
			<div id="stick-header"></div>
				<div class="inner-content">
					<div class="row type-2">
						<div class="layout flex first">
						<div class="form flex">
							<div class="logo"><i><?php inline_svg("akz"); ?></i></div>
							<?php gravity_form(1, false, false, false, '', true, 12); ?>
						</div>
						<div class="details">
							<div class="flex first">
								<div class="image">
									<img src='<?= getImage('ray-immelman_opt.jpg'); ?>'/>			</div>
								<div class="ray">
									<p>Ray Immelman</p>
									<p>Chief Executive Officer</p>
									<p>Managing Partner</p>
								</div>
							</div>
							<div class="flex second">
								<div class="image">
									<img src='<?= getImage('contact-image_opt.jpg'); ?>'/>			</div>
								<div class="contact-info">
									<p>sunvalley, Inc.</p>
									<p>Corporate Headquarters</p>
									<p>3930 E. Ray Rd.</p>
									<p>Suite 130</p>
									<p>Phoenix, AZ 85044</p>
									<p>
										<a href="mailto:info@sunvalley.com ">info@sunvalley.com </a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php endwhile; ?>
</main>
</div>
<?php get_footer(); ?>
