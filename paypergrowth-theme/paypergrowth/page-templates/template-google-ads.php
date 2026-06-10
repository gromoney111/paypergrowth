<?php
/**
 * Template Name: Google Ads Service
 * @package PayPerGrowth
 */
get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Google Ads Services</span>
        <h1>Google Ads Management That Drives Revenue</h1>
        <p>Certified Google Premier Partner delivering high-performance PPC campaigns across Search, Display, Shopping & YouTube.</p>
        <?php ppg_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="service-detail fade-in">
            <div class="service-detail-text">
                <h2>Why Google Ads With PayPerGrowth?</h2>
                <p>As a Google Premier Partner, we have exclusive tools, beta features, and dedicated Google support.</p>
                <ul class="service-features">
                    <li>Google Search Ads for high-intent keyword targeting</li>
                    <li>Display Network campaigns for brand awareness</li>
                    <li>Google Shopping Ads for e-commerce</li>
                    <li>YouTube Video Ads for engagement & reach</li>
                    <li>Performance Max campaigns (AI-driven)</li>
                    <li>Remarketing & audience targeting</li>
                </ul>
            </div>
            <div class="service-image-placeholder">&#127919;</div>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="section-header fade-in"><span class="section-label">Our Process</span><h2>How We Manage Your Google Ads</h2></div>
        <div class="process-grid">
            <div class="process-card fade-in"><h4>Account Audit</h4><p>Deep-dive analysis identifying waste and opportunities.</p></div>
            <div class="process-card fade-in"><h4>Strategy & Planning</h4><p>Custom strategy based on goals and competitor analysis.</p></div>
            <div class="process-card fade-in"><h4>Campaign Build</h4><p>Meticulous structure, keywords, and ad copy creation.</p></div>
            <div class="process-card fade-in"><h4>Optimize & Scale</h4><p>Continuous A/B testing and budget optimization for max ROAS.</p></div>
        </div>
    </div>
</section>

<section class="section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
        <div class="section-header fade-in"><span class="section-label">FAQs</span><h2>Google Ads Questions</h2></div>
        <div class="faq-list">
            <?php
            $faqs = array(
                array('What budget do I need?','We work with budgets starting from &#8377;25,000/month. Ideal budget depends on industry and goals.'),
                array('How long to see results?','Google Ads delivers immediate traffic. Peak optimization takes 2-4 weeks of data gathering.'),
                array('Are you a Google Partner?','Yes, we\'re a Google Premier Partner&mdash;the highest tier with exclusive access and support.'),
                array('B2B and B2C campaigns?','Yes, we manage both across e-commerce, SaaS, healthcare, education, real estate, and more.'),
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
        <h2>Ready to Dominate Google?</h2>
        <p>Get a free Google Ads audit and discover untapped revenue.</p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">Get Free Audit &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
