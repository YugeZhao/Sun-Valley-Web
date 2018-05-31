<?php
/**
 * Template Name: Homepage
 * @package sunvalley
 */
get_header();
?>
<main class="main-container">
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
