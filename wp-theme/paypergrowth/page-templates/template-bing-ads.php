<?php
/**
 * Template Name: Bing Ads Service
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Bing Ads Services</span>
        <h1>Bing Ads Management for Untapped Growth</h1>
        <p>Reach high-value audiences on Microsoft's search network with lower competition and better CPCs. Maximize your advertising ROI beyond Google.</p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="service-detail fade-in">
            <div class="service-detail-text">
                <h2>Why Bing Ads Is a Must for Indian Businesses</h2>
                <p>Microsoft Advertising (formerly Bing Ads) powers searches across Bing, Yahoo, AOL, and partner sites. With growing market share in India, especially among professionals and enterprise users, it's an untapped goldmine.</p>
                <ul class="service-features">
                    <li>30-40% lower Cost-Per-Click compared to Google Ads</li>
                    <li>Higher average order value from Bing's demographic</li>
                    <li>Less competition means better ad positions</li>
                    <li>Reach professionals using Windows/Edge/Outlook</li>
                    <li>LinkedIn profile targeting for B2B campaigns</li>
                    <li>Easy import from existing Google Ads campaigns</li>
                </ul>
            </div>
            <div class="service-image-placeholder" aria-hidden="true">&#128269;</div>
        </div>
    </div>
</section>

<section class="section bg-gray" aria-labelledby="bing-process-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Process</span>
            <h2 id="bing-process-heading">Our Bing Ads Management Approach</h2>
            <p>Leverage Microsoft's unique targeting capabilities for maximum impact.</p>
        </div>
        <div class="process-grid">
            <?php
            $steps = array(
                array('Opportunity Analysis', 'Evaluate your industry\'s potential on Bing, analyze competitor presence, and identify keyword opportunities.'),
                array('Campaign Migration', 'Seamlessly import and optimize your Google Ads campaigns for the Bing network\'s unique audience.'),
                array('Audience Targeting', 'Leverage LinkedIn targeting, in-market audiences, and demographic data unique to Microsoft\'s network.'),
                array('Performance Optimization', 'Continuous bid management, ad testing, and budget optimization for peak campaign performance.'),
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

<section class="section">
    <div class="container">
        <div class="service-detail reverse fade-in">
            <div class="service-detail-text">
                <h2>Bing Ads Services We Provide</h2>
                <p>Full-service Microsoft Advertising management to capture every opportunity on the Bing network.</p>
                <ul class="service-features">
                    <li>Bing Search Ads &mdash; Text ads on Bing search results</li>
                    <li>Bing Shopping Campaigns &mdash; Product ads for e-commerce</li>
                    <li>Microsoft Audience Network &mdash; Native ads across MSN & Outlook</li>
                    <li>LinkedIn Profile Targeting &mdash; B2B audience precision</li>
                    <li>Remarketing Campaigns &mdash; Re-engage past visitors</li>
                    <li>Multi-platform Reporting &mdash; Unified insights across channels</li>
                </ul>
            </div>
            <div class="service-image-placeholder" aria-hidden="true">&#128188;</div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section bg-gray" aria-labelledby="bing-faq-heading" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">FAQs</span>
            <h2 id="bing-faq-heading">Frequently Asked Questions</h2>
        </div>
        <div class="faq-list">
            <?php
            $faqs = array(
                array('Is Bing Ads worth it for Indian businesses?', 'Absolutely. Bing\'s market share in India is growing, especially among professional and enterprise users. With lower CPCs and less competition, many businesses see better ROI on Bing compared to Google for certain keywords.'),
                array('Can you import my Google Ads campaigns to Bing?', 'Yes! Microsoft Advertising has a built-in import tool. We\'ll import your Google campaigns and then optimize them specifically for the Bing audience, adjusting bids, targeting, and ad copy as needed.'),
                array('What\'s the minimum budget for Bing Ads?', 'We recommend starting with at least &#8377;15,000/month for Bing Ads. Since CPCs are typically 30-40% lower than Google, your budget goes further and you can test effectively at lower spend levels.'),
                array('How does LinkedIn targeting work on Bing?', 'Microsoft Advertising uniquely integrates LinkedIn data, allowing you to target users by company, industry, and job function. This is incredibly powerful for B2B campaigns targeting specific decision-makers.'),
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

<section class="cta-section">
    <div class="container">
        <h2>Unlock the Power of Microsoft Advertising</h2>
        <p>Discover untapped audiences and lower costs with Bing Ads. Get your free opportunity analysis today.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white">Get Free Bing Ads Analysis &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
