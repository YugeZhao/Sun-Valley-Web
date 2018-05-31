<?php
/**
 * Template Name: Different Problem
 * @package sunvalley
 */
get_header();
?>
<main class="main-container <?= pageClass(); ?>">
<?php while ( have_posts() ) : the_post(); ?>
		<div class="bg"><i><?php inline_svg("bg2"); ?></i></div>
		<div class="page-wrapper">
			<div class="page-title">
				<h1 style="<?= textShadowColor() ?>">
					<?php the_title(); ?>
				</h1>
			</div>
			<div class="below-page-title">
				<h2 <?= belowTitleColor(); ?>>
					<?php the_field("below_page_title"); ?>
				</h2>
			</div>
			<div class="page-content">
			<div id="stick-header"></div>
				<div class="inner-content">
					<?php getPageContent(); ?>
				</div>
			</div>
<?php endwhile; ?>
</main>
</div>
<?php get_footer(); ?>
