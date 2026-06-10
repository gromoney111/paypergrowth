<?php
/**
 * Template Name: Service Page
 * Description: A flexible template for service pages (Google Ads, Bing Ads, Digital Marketing, Web Development)
 *
 * @package PayPerGrowth
 */

get_header();

// Get custom fields (can be set via ACF or custom meta boxes)
$service_label = get_post_meta(get_the_ID(), 'service_label', true) ?: get_the_title() . ' Services';
$service_subtitle = get_post_meta(get_the_ID(), 'service_subtitle', true) ?: get_the_excerpt();
$service_icon = get_post_meta(get_the_ID(), 'service_icon', true) ?: '&#127919;';
$cta_text = get_post_meta(get_the_ID(), 'cta_text', true) ?: 'Get Free ' . get_the_title() . ' Audit &rarr;';
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label"><?php echo esc_html($service_label); ?></span>
        <h1><?php the_title(); ?></h1>
        <?php if ($service_subtitle) : ?>
            <p><?php echo esc_html($service_subtitle); ?></p>
        <?php endif; ?>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<!-- Main Content from WordPress Editor -->
<section class="section">
    <div class="container">
        <div class="policy-content">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p>Get a free audit and discover how we can help grow your business.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white"><?php echo $cta_text; ?></a>
    </div>
</section>

<?php get_footer(); ?>
