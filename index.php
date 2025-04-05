<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arhitektura_Teme
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Sekcija za arhitekturu -->
    <section class="architecture-section">
        <h1 class="architecture-text">ARCHITECTURE for EVERYONE</h1>
    </section>

    <!-- Custom Query za blogove -->
    <article id="custom-query-container" class="custom-query">
        <div class="blog-container">
            <?php 
            // Definisanje Custom Query za blog postove
            $args = array(
                'post_type'      => 'blogs', // Slug vašeg Custom Post Type-a
                'posts_per_page' => -1, // Prikazuje sve postove
                'orderby'        => 'date', // Sortira po datumu objave
                'order'          => 'ASC' // Sortira postove od najstarijeg
            );

            $query = new WP_Query($args);
            
            // Provera da li ima postova
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); 
            ?>
                <div class="blog-item">
                    <?php 
                    // Prikazivanje slike iz Custom Fields (ako postoji)
                    $image = get_field('blog_image');
                    if ($image): ?>
                        <a href="<?php the_permalink(); ?>" class="hover-underline"> <!-- Link oko slike -->
                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_field('blog_title'); ?>">
                    <?php endif; ?>
                    <!-- Prikazivanje blog naslova, autora i kategorije -->
                    <h2 class="blog-title"><?php the_field('blog_title'); ?></h2>
					</a>
                    <p class="blog-author"><?php the_field('blog_author'); ?></p>
                    <span class="blog-category"><?php the_field('blog_category'); ?></span>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </article>
	

</main><!-- #main -->

<?php
get_footer();
