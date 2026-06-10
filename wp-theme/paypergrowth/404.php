<?php
/**
 * 404 Error Page Template
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Error 404</span>
        <h1>Page Not Found</h1>
        <p>Oops! The page you're looking for doesn't exist or has been moved.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header">
            <h2>Let's Get You Back on Track</h2>
            <p>Here are some helpful links to get you where you need to go:</p>
        </div>
        <div class="services-grid" style="max-width: 800px; margin: 0 auto;">
            <div class="service-card fade-in" style="text-align: center;">
                <div class="service-icon" style="margin: 0 auto 15px;" aria-hidden="true">&#127968;</div>
                <h3>Homepage</h3>
                <p>Start from the beginning</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary" style="margin-top: 15px;">Go Home</a>
            </div>
            <div class="service-card fade-in" style="text-align: center;">
                <div class="service-icon" style="margin: 0 auto 15px;" aria-hidden="true">&#128188;</div>
                <h3>Our Services</h3>
                <p>Explore what we offer</p>
                <?php $services_page = get_page_by_path('google-ads'); ?>
                <a href="<?php echo $services_page ? esc_url(get_permalink($services_page)) : '#'; ?>" class="btn btn-outline" style="margin-top: 15px;">View Services</a>
            </div>
            <div class="service-card fade-in" style="text-align: center;">
                <div class="service-icon" style="margin: 0 auto 15px;" aria-hidden="true">&#128222;</div>
                <h3>Contact Us</h3>
                <p>Get in touch with our team</p>
                <?php $contact_page = get_page_by_path('contact'); ?>
                <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-outline" style="margin-top: 15px;">Contact</a>
            </div>
        </div>

        <!-- Search Form -->
        <div style="max-width: 500px; margin: 50px auto 0; text-align: center;">
            <p style="margin-bottom: 15px; font-weight: 600;">Or try searching:</p>
            <?php get_search_form(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
