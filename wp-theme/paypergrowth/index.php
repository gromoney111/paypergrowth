<?php
/**
 * Main Index Template (Blog listing)
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Blog</span>
        <h1>Insights & Resources</h1>
        <p>Expert insights on paid marketing, digital strategy, and business growth for Indian businesses.</p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="services-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="service-card fade-in" itemscope itemtype="https://schema.org/BlogPosting">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('service-card', array('itemprop' => 'image')); ?>
                            </a>
                        <?php endif; ?>
                        <div style="padding: 25px;">
                            <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" style="font-size: 0.85rem; color: var(--gray-500);">
                                <?php echo get_the_date(); ?>
                            </time>
                            <h3 itemprop="headline" style="margin: 10px 0;">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p itemprop="description"><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="learn-more">Read More &rarr;</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php paypergrowth_pagination(); ?>

        <?php else : ?>
            <div class="section-header">
                <h2>No Posts Found</h2>
                <p>Check back soon for our latest insights on digital marketing.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Scale Your Business?</h2>
        <p>Get a free audit of your current paid marketing campaigns.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white">Get Your Free Audit &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
