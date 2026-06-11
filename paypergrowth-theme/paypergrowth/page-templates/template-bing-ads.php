<?php
/**
 * Template Name: Bing Ads Service
 * @package PayPerGrowth
 */
get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Bing Ads Services</span>
        <h1>Bing Ads Management for Untapped Growth</h1>
        <p>Lower competition, better CPCs, and high-value professional audiences on Microsoft's network.</p>
        <?php ppg_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="service-detail fade-in">
            <div class="service-detail-text">
                <h2>Why Bing Ads for Indian Businesses?</h2>
                <p>Microsoft Advertising powers Bing, Yahoo, AOL, and partner sites with growing market share among professionals.</p>
                <ul class="service-features">
                    <li>30-40% lower CPC compared to Google Ads</li>
                    <li>Higher average order value demographics</li>
                    <li>Less competition = better ad positions</li>
                    <li>LinkedIn profile targeting for B2B</li>
                    <li>Easy import from Google Ads campaigns</li>
                    <li>Reach Windows/Edge/Outlook users</li>
                </ul>
            </div>
            <div class="service-image-placeholder">&#128269;</div>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="section-header fade-in"><span class="section-label">Our Process</span><h2>Bing Ads Management Approach</h2></div>
        <div class="process-grid">
            <div class="process-card fade-in"><h4>Opportunity Analysis</h4><p>Evaluate your industry's potential on the Bing network.</p></div>
            <div class="process-card fade-in"><h4>Campaign Migration</h4><p>Import and optimize your Google Ads for Bing's audience.</p></div>
            <div class="process-card fade-in"><h4>Audience Targeting</h4><p>Leverage LinkedIn and in-market audiences unique to Microsoft.</p></div>
            <div class="process-card fade-in"><h4>Performance Optimization</h4><p>Continuous bid management and ad testing.</p></div>
        </div>
    </div>
</section>

<section class="section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
        <div class="section-header fade-in"><span class="section-label">FAQs</span><h2>Bing Ads Questions</h2></div>
        <div class="faq-list">
            <?php
            $faqs = array(
                array('Is Bing Ads worth it in India?','Yes. Growing market share, lower CPCs, and professional audience make it excellent ROI.'),
                array('Can you import my Google campaigns?','Absolutely. We import and then optimize specifically for the Bing audience.'),
                array('Minimum budget for Bing Ads?','We recommend &#8377;15,000/month minimum. Lower CPCs mean your budget goes further.'),
                array('How does LinkedIn targeting work?','Microsoft integrates LinkedIn data for targeting by company, industry, and job function.'),
            );
            foreach ($faqs as $f) : ?>
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="faq-question" itemprop="name"><?php echo $f[0]; ?> <span class="icon">+</span></div>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text"><?php echo $f[1]; ?></p></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Unlock Microsoft Advertising</h2>
        <p>Discover untapped audiences with Bing. Get your free analysis.</p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">Get Free Analysis &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
