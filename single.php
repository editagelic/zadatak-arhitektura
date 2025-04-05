<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Arhitektura_Teme
 */

get_header();
?>

	<main id="primary" class="site-main">

    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-detail'); ?>>

        <!-- HEADER: SLIKA -->
        <?php 
        $image = get_field('cover_image'); 
        if ($image): ?>
            <div class="blog-image-wrapper">
                <img class="blog-featured-image" src="<?php echo esc_url($image); ?>" alt="<?php the_field('blog_title'); ?>">
            </div>
        <?php endif; ?>

        <!-- TEKST ISPOD SLIKE -->
        <div class="blog-meta-wrapper">
            <h1 class="blog-title-detail"><?php the_field('blog_title'); ?></h1>
            <p class="blog-author-detail"><?php the_field('blog_author'); ?></p>
            <span class="blog-category-detail"><?php the_field('blog_category'); ?></span>
        </div>

        <div class="blog-wrapper">
			<div class="blog-content">
				<?php the_content(); ?>
				<h3>This article was written by <?php the_field('author_of_the_article'); ?>.</h3>
			</div>
		</div>


    </article>


	</main><!-- #main -->

<?php

get_footer();
