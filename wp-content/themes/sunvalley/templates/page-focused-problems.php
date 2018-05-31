<?php
/**
 * Template Name: Focused Problems
 * @package sunvalley
 */
get_header();
?>
<div id="stick-header"></div>
<main class="main-container <?= pageClass(); ?>">	
<?php while ( have_posts() ) : the_post(); ?>
	<div class="bg"><img src="<?= backgroundImage(); ?>" /></div>
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
				<div class="inner-content">
					<?php getPageContent(); ?>
				</div>
			</div>
<?php endwhile; ?>
</main>
</div>
<?php get_footer(); ?>
