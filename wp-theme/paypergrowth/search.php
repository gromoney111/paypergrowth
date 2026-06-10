<?php
/**
 * Search Results Template
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Search Results</span>
        <h1>Results for: &ldquo;<?php echo esc_html(get_search_query()); ?>&rdquo;</h1>
        <p><?php printf(esc_html__('%d results found', 'paypergrowth'), $wp_query->found_posts); ?></p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <!-- Search Form -->
        <div style="max-width: 600px; margin: 0 auto 40px;">
            <?php get_search_form(); ?>
        </div>

        <?php if (have_posts()) : ?>
            <div class="services-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="service-card fade-in">
                        <div style="padding: 25px;">
                            <span style="font-size: 0.8rem; color: var(--primary); font-weight: 600; text-transform: uppercase;">
                                <?php echo get_post_type_object(get_post_type())->labels->singular_name; ?>
                            </span>
                            <h3 style="margin: 10px 0;">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="learn-more">View &rarr;</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php paypergrowth_pagination(); ?>

        <?php else : ?>
            <div class="section-header">
                <h2>No Results Found</h2>
                <p>Sorry, we couldn't find any results matching your search. Try different keywords or browse our pages below.</p>
            </div>
            <div class="services-grid" style="max-width: 600px; margin: 30px auto 0;">
                <div class="service-card" style="text-align: center;">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Back to Homepage</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
