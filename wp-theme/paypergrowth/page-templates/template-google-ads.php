<?php
/**
 * Template Name: Google Ads Service
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Google Ads Services</span>
        <h1>Google Ads Management That Drives Revenue</h1>
        <p>Certified Google Premier Partner agency delivering high-performance PPC campaigns for Indian businesses across Search, Display, Shopping & YouTube.</p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<!-- Service Detail -->
<section class="section">
    <div class="container">
        <div class="service-detail fade-in">
            <div class="service-detail-text">
                <h2>Why Google Ads With PayPerGrowth?</h2>
                <p>As a Google Premier Partner, we have access to exclusive tools, beta features, and dedicated Google support. Our certified experts craft campaigns that maximize every rupee of your ad spend.</p>
                <ul class="service-features">
                    <li>Google Search Ads for high-intent keyword targeting</li>
                    <li>Display Network campaigns for brand awareness</li>
                    <li>Google Shopping Ads for e-commerce businesses</li>
                    <li>YouTube Video Ads for engagement & reach</li>
                    <li>Performance Max campaigns for AI-driven optimization</li>
                    <li>Remarketing & audience targeting strategies</li>
                </ul>
            </div>
            <div class="service-image-placeholder" aria-hidden="true">&#127919;</div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="section bg-gray" aria-labelledby="process-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Process</span>
            <h2 id="process-heading">How We Manage Your Google Ads</h2>
            <p>A proven 6-step methodology that consistently delivers results.</p>
        </div>
        <div class="process-grid">
            <?php
            $steps = array(
                array('Account Audit', 'Deep-dive analysis of your existing campaigns, identifying waste and opportunities for improvement.'),
                array('Strategy & Planning', 'Custom strategy based on your goals, industry benchmarks, and competitor analysis in the Indian market.'),
                array('Campaign Build', 'Meticulous campaign structure, keyword research, ad copy creation, and landing page recommendations.'),
                array('Launch & Monitor', 'Campaign launch with real-time monitoring, bid management, and quality score optimization.'),
                array('Optimize & Scale', 'Continuous A/B testing, negative keyword refinement, and budget allocation for maximum ROAS.'),
                array('Report & Grow', 'Transparent weekly reports with actionable insights and strategic recommendations for growth.'),
            );
            foreach ($steps as $step) :
            ?>
                <div class="process-card fade-in">
                    <h4><?php echo esc_html($step[0]); ?></h4>
                    <p><?php echo esc_html($step[1]); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Services List -->
<section class="section">
    <div class="container">
        <div class="service-detail reverse fade-in">
            <div class="service-detail-text">
                <h2>Google Ads Services We Offer</h2>
                <p>Comprehensive Google Ads management covering every campaign type to reach your target audience at every stage of the buying journey.</p>
                <ul class="service-features">
                    <li>Search Campaign Management &mdash; Target high-intent keywords</li>
                    <li>Display Advertising &mdash; Visual ads across 2M+ websites</li>
                    <li>Google Shopping &mdash; Product listing ads for e-commerce</li>
                    <li>YouTube Advertising &mdash; Video ads for massive reach</li>
                    <li>App Install Campaigns &mdash; Drive mobile app downloads</li>
                    <li>Local Service Ads &mdash; For local businesses across India</li>
                    <li>Conversion Rate Optimization &mdash; Landing page improvements</li>
                    <li>Google Analytics Setup & Tracking &mdash; Complete measurement</li>
                </ul>
            </div>
            <div class="service-image-placeholder" aria-hidden="true">&#128202;</div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section bg-gray" aria-labelledby="faq-heading" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">FAQs</span>
            <h2 id="faq-heading">Frequently Asked Questions</h2>
        </div>
        <div class="faq-list">
            <?php
            $faqs = array(
                array('What budget do I need for Google Ads in India?', 'We work with budgets starting from &#8377;25,000/month. However, the ideal budget depends on your industry, competition, and goals. During our free audit, we\'ll recommend an optimal budget for your specific situation.'),
                array('How long before I see results from Google Ads?', 'Google Ads can deliver immediate traffic once campaigns go live. However, optimization for peak performance typically takes 2-4 weeks as we gather data and refine targeting, bids, and ad copy.'),
                array('Are you a certified Google Partner?', 'Yes, PayPerGrowth is a Google Premier Partner &mdash; the highest tier of Google\'s partner program. This gives us access to exclusive tools, beta features, and direct support from Google\'s team.'),
                array('Do you manage both B2B and B2C Google Ads campaigns?', 'Absolutely. We have extensive experience managing campaigns for both B2B and B2C businesses across industries including e-commerce, SaaS, healthcare, education, real estate, and more.'),
                array('What\'s your management fee structure?', 'Our pricing is transparent and based on your monthly ad spend. We offer flexible plans starting at &#8377;15,000/month for management fees. Visit our pricing page for detailed packages.'),
            );
            foreach ($faqs as $faq) :
            ?>
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="faq-question" itemprop="name"><?php echo $faq[0]; ?> <span class="icon">+</span></div>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text"><?php echo $faq[1]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Dominate Google Search Results?</h2>
        <p>Get a free Google Ads audit and discover how much revenue you're leaving on the table.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white">Get Free Google Ads Audit &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
