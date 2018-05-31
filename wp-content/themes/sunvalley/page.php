<?php
/**
 * The default page template
 * @package sunvalley
 */
get_header();
?>
<main class="main-container">
<?php while ( have_posts() ) : the_post(); ?>
	<div class="wrapper">
		<div class="page-title">
			<h1><?php the_title(); ?></h1>
		</div>
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
