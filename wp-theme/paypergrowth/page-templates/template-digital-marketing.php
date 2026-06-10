<?php
/**
 * Template Name: Digital Marketing Service
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Digital Marketing Services</span>
        <h1>360&deg; Digital Marketing Solutions for India</h1>
        <p>From SEO to social media, we create integrated digital strategies that build your brand, drive traffic, and convert visitors into loyal customers.</p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="service-detail fade-in">
            <div class="service-detail-text">
                <h2>Holistic Digital Marketing Strategy</h2>
                <p>In today's digital-first India, your brand needs a comprehensive online presence. We combine multiple channels into a unified strategy that amplifies your reach and drives sustainable growth.</p>
                <ul class="service-features">
                    <li>Search Engine Optimization (SEO) &mdash; Organic growth</li>
                    <li>Social Media Marketing &mdash; Facebook, Instagram, LinkedIn</li>
                    <li>Content Marketing &mdash; Blogs, videos, infographics</li>
                    <li>Email Marketing &mdash; Nurture & convert leads</li>
                    <li>Online Reputation Management &mdash; Build trust</li>
                    <li>Marketing Automation &mdash; Scale your efforts</li>
                </ul>
            </div>
            <div class="service-image-placeholder" aria-hidden="true">&#128241;</div>
        </div>
    </div>
</section>

<section class="section bg-gray" aria-labelledby="dm-services-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Services</span>
            <h2 id="dm-services-heading">Digital Marketing Services We Offer</h2>
            <p>A complete suite of digital marketing solutions tailored for the Indian market.</p>
        </div>
        <div class="services-grid">
            <?php
            $dm_services = array(
                array('&#128270;', 'SEO Services', 'On-page, off-page, technical SEO & local SEO to rank higher on Google and drive organic traffic that converts.'),
                array('&#128242;', 'Social Media Marketing', 'Strategic content creation, community management, and paid social campaigns across all major platforms.'),
                array('&#9997;&#65039;', 'Content Marketing', 'High-quality blogs, articles, videos, and infographics that establish authority and drive engagement.'),
                array('&#128231;', 'Email Marketing', 'Automated email sequences, newsletters, and drip campaigns that nurture leads and boost retention.'),
                array('&#11088;', 'Reputation Management', 'Monitor, manage, and improve your online reputation across review platforms and social media.'),
                array('&#128202;', 'Analytics & Reporting', 'Comprehensive tracking setup, custom dashboards, and data-driven insights for continuous improvement.'),
            );
            foreach ($dm_services as $svc) :
            ?>
                <div class="service-card fade-in">
                    <div class="service-icon" aria-hidden="true"><?php echo $svc[0]; ?></div>
                    <h3><?php echo esc_html($svc[1]); ?></h3>
                    <p><?php echo esc_html($svc[2]); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="dm-approach-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Approach</span>
            <h2 id="dm-approach-heading">How We Drive Digital Growth</h2>
        </div>
        <div class="process-grid">
            <?php
            $steps = array(
                array('Discovery & Research', 'Understand your business, audience, competitors, and market opportunities in depth.'),
                array('Strategy Development', 'Create a tailored multi-channel strategy aligned with your business objectives and budget.'),
                array('Execution & Launch', 'Implement campaigns across channels with precision, creativity, and attention to detail.'),
                array('Monitor & Optimize', 'Track KPIs, analyze performance, and continuously optimize for better results.'),
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

<!-- FAQ -->
<section class="section bg-gray" itemscope itemtype="https://schema.org/FAQPage" aria-labelledby="dm-faq-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">FAQs</span>
            <h2 id="dm-faq-heading">Frequently Asked Questions</h2>
        </div>
        <div class="faq-list">
            <?php
            $faqs = array(
                array('How long does SEO take to show results?', 'SEO is a long-term strategy. You can expect to see initial improvements in 3-4 months, with significant results in 6-12 months. We focus on sustainable growth rather than quick fixes that may get penalized.'),
                array('Which social media platforms should my business be on?', 'It depends on your target audience. For B2B, LinkedIn is essential. For B2C in India, Instagram and Facebook dominate. We\'ll analyze your audience and recommend the platforms with highest ROI potential.'),
                array('Do you provide content creation services?', 'Yes! Our in-house team of writers, designers, and video creators produce high-quality content tailored for your brand. From blog posts to social media creatives to video scripts&mdash;we handle it all.'),
                array('Can I combine digital marketing with PPC services?', 'Absolutely, and we recommend it! Combining paid and organic strategies creates a powerful flywheel effect. Our integrated packages offer the best value and results.'),
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
        <h2>Ready to Build Your Digital Presence?</h2>
        <p>Get a free digital marketing audit and discover growth opportunities you're missing.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white">Get Free Digital Audit &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
