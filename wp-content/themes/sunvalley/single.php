<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sunvalley
 */

get_header();
?>
<div id="stick-header"></div>
<main class="main-container">
<?php while ( have_posts() ) : the_post(); ?>
	<div class="page-wrapper">
		<article class="article-content">
			<div class="inner-content">
				<div class="article-title">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="article-body">
					<?php the_content(); ?>
				</div>
			</div>
		</article>
	</div>
<?php endwhile; ?>
</main>

<?php get_footer(); ?>
