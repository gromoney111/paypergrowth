<?php get_header(); ?>

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
        </div>
        <div class="services-grid" style="max-width:800px;margin:0 auto;">
            <div class="service-card" style="text-align:center;">
                <div class="service-icon" style="margin:0 auto 15px;">&#127968;</div>
                <h3>Homepage</h3>
                <a href="<?php echo home_url('/'); ?>" class="btn btn-primary" style="margin-top:15px;">Go Home</a>
            </div>
            <div class="service-card" style="text-align:center;">
                <div class="service-icon" style="margin:0 auto 15px;">&#128188;</div>
                <h3>Our Services</h3>
                <a href="<?php echo home_url('/google-ads/'); ?>" class="btn btn-outline" style="margin-top:15px;">View Services</a>
            </div>
            <div class="service-card" style="text-align:center;">
                <div class="service-icon" style="margin:0 auto 15px;">&#128222;</div>
                <h3>Contact Us</h3>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-outline" style="margin-top:15px;">Contact</a>
            </div>
        </div>
        <div style="max-width:500px;margin:50px auto 0;text-align:center;">
            <?php get_search_form(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
