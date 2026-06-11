<?php
/**
 * Template Name: Digital Marketing Service
 * @package PayPerGrowth
 */
get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Digital Marketing</span>
        <h1>360&deg; Digital Marketing Solutions</h1>
        <p>From SEO to social media, integrated strategies that build your brand and drive conversions.</p>
        <?php ppg_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="service-detail fade-in">
            <div class="service-detail-text">
                <h2>Holistic Digital Strategy</h2>
                <p>In today's digital-first India, you need a comprehensive online presence across multiple channels.</p>
                <ul class="service-features">
                    <li>Search Engine Optimization (SEO)</li>
                    <li>Social Media Marketing (Facebook, Instagram, LinkedIn)</li>
                    <li>Content Marketing (Blogs, Videos, Infographics)</li>
                    <li>Email Marketing & Automation</li>
                    <li>Online Reputation Management</li>
                    <li>Marketing Automation & CRM</li>
                </ul>
            </div>
            <div class="service-image-placeholder">&#128241;</div>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="section-header fade-in"><span class="section-label">Services</span><h2>What We Offer</h2></div>
        <div class="services-grid">
            <?php
            $svcs = array(
                array('&#128270;','SEO Services','On-page, off-page, technical & local SEO to rank higher on Google.'),
                array('&#128242;','Social Media','Strategic content, community management, and paid social campaigns.'),
                array('&#9997;','Content Marketing','High-quality blogs, videos, and infographics that drive engagement.'),
                array('&#128231;','Email Marketing','Automated sequences and campaigns that nurture leads.'),
                array('&#11088;','Reputation Management','Monitor and improve your online reputation.'),
                array('&#128202;','Analytics & Reporting','Custom dashboards and data-driven insights.'),
            );
            foreach ($svcs as $s) : ?>
                <div class="service-card fade-in"><div class="service-icon"><?php echo $s[0]; ?></div><h3><?php echo $s[1]; ?></h3><p><?php echo $s[2]; ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Build Your Digital Presence</h2>
        <p>Get a free digital marketing audit today.</p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">Get Free Audit &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
