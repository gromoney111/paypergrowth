<?php
/**
 * Archive Template
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label"><?php echo esc_html(post_type_archive_title('', false)); ?></span>
        <h1><?php the_archive_title(); ?></h1>
        <?php the_archive_description('<p>', '</p>'); ?>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="services-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="service-card fade-in">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('service-card', array('style' => 'border-radius: var(--radius-lg) var(--radius-lg) 0 0; width: 100%;')); ?>
                            </a>
                        <?php endif; ?>
                        <div style="padding: 25px;">
                            <time datetime="<?php echo get_the_date('c'); ?>" style="font-size: 0.85rem; color: var(--gray-500);">
                                <?php echo get_the_date(); ?>
                            </time>
                            <h3 style="margin: 10px 0;">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="learn-more">Read More &rarr;</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php paypergrowth_pagination(); ?>

        <?php else : ?>
            <div class="section-header">
                <h2>No Content Found</h2>
                <p>There are no posts to display yet. Check back soon!</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
