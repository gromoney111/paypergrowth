<?php
/**
 * Template Name: Pricing
 * @package PayPerGrowth
 */
get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Pricing</span>
        <h1>Transparent Pricing, No Hidden Fees</h1>
        <p>Choose a plan that fits your business. All plans include dedicated account management.</p>
        <?php ppg_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">PPC Management</span>
            <h2>Google Ads & Bing Ads Packages</h2>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card fade-in">
                <h3>Starter</h3>
                <div class="price">&#8377;15,000<span>/month</span></div>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Up to &#8377;50K ad spend</li>
                    <li><span class="check">&#10003;</span> 1 Platform (Google OR Bing)</li>
                    <li><span class="check">&#10003;</span> Up to 3 campaigns</li>
                    <li><span class="check">&#10003;</span> Monthly reporting</li>
                    <li><span class="cross">&#10007;</span> Landing page design</li>
                    <li><span class="cross">&#10007;</span> Dedicated manager</li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-outline" style="width:100%;justify-content:center;">Get Started</a>
            </div>
            <div class="pricing-card featured fade-in">
                <div class="pricing-badge">Most Popular</div>
                <h3>Growth</h3>
                <div class="price">&#8377;35,000<span>/month</span></div>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Up to &#8377;2L ad spend</li>
                    <li><span class="check">&#10003;</span> Google & Bing both</li>
                    <li><span class="check">&#10003;</span> Up to 10 campaigns</li>
                    <li><span class="check">&#10003;</span> Weekly reporting</li>
                    <li><span class="check">&#10003;</span> 1 Landing page</li>
                    <li><span class="check">&#10003;</span> Dedicated manager</li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary" style="width:100%;justify-content:center;">Get Started</a>
            </div>
            <div class="pricing-card fade-in">
                <h3>Enterprise</h3>
                <div class="price">&#8377;75,000<span>/month</span></div>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Unlimited ad spend</li>
                    <li><span class="check">&#10003;</span> All platforms + YouTube</li>
                    <li><span class="check">&#10003;</span> Unlimited campaigns</li>
                    <li><span class="check">&#10003;</span> Real-time dashboard</li>
                    <li><span class="check">&#10003;</span> 3 Landing pages</li>
                    <li><span class="check">&#10003;</span> Senior strategist</li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-outline" style="width:100%;justify-content:center;">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">FAQs</span>
            <h2>Pricing Questions</h2>
        </div>
        <div class="faq-list">
            <?php
            $faqs = array(
                array('Is ad spend included in the fee?','No, ad spend is separate and billed directly to you by Google/Microsoft. Our pricing covers management, optimization, and reporting.'),
                array('What\'s the minimum contract?','We recommend 3 months for PPC and 6 months for SEO. Month-to-month available at slightly higher rates.'),
                array('Can I upgrade my plan?','Yes! Upgrade anytime. Downgrades at end of billing cycle with 15 days notice.'),
                array('Do you offer custom packages?','Absolutely. Contact us for a personalized quote based on your specific needs.'),
            );
            foreach ($faqs as $f) : ?>
                <div class="faq-item"><div class="faq-question"><?php echo $f[0]; ?> <span class="icon">+</span></div><div class="faq-answer"><p><?php echo $f[1]; ?></p></div></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Not Sure Which Plan?</h2>
        <p>Let's discuss your goals and find the perfect fit.</p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">Get Recommendation &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
