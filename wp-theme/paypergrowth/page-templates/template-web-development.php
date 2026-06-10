<?php
/**
 * Template Name: Web Development Service
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Web Development & Design</span>
        <h1>Websites Built to Convert Visitors Into Customers</h1>
        <p>Custom-designed, performance-optimized websites that look stunning, load fast, and drive real business results for Indian businesses.</p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="service-detail fade-in">
            <div class="service-detail-text">
                <h2>Why Your Website Is Your Best Salesperson</h2>
                <p>Your website is often the first impression customers have of your business. We build websites that are not just beautiful&mdash;they're engineered for conversions, speed, and search engine visibility.</p>
                <ul class="service-features">
                    <li>Custom designs &mdash; No templates, 100% unique to your brand</li>
                    <li>Mobile-first responsive &mdash; Perfect on all devices</li>
                    <li>SEO-optimized &mdash; Built for Google rankings from day one</li>
                    <li>Lightning fast &mdash; Sub-3 second load times</li>
                    <li>Conversion focused &mdash; UX designed to drive actions</li>
                    <li>CMS powered &mdash; Easy for you to manage content</li>
                </ul>
            </div>
            <div class="service-image-placeholder" aria-hidden="true">&#128187;</div>
        </div>
    </div>
</section>

<section class="section bg-gray" aria-labelledby="web-services-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">What We Build</span>
            <h2 id="web-services-heading">Web Development Services</h2>
            <p>From simple landing pages to complex web applications&mdash;we build it all.</p>
        </div>
        <div class="services-grid">
            <?php
            $web_services = array(
                array('&#127970;', 'Corporate Websites', 'Professional corporate websites that establish credibility and showcase your brand story effectively.'),
                array('&#128722;', 'E-Commerce Websites', 'Feature-rich online stores with payment gateway integration, inventory management, and optimized checkout flows.'),
                array('&#128640;', 'Landing Pages', 'High-converting landing pages designed specifically for your PPC and marketing campaigns.'),
                array('&#128241;', 'Web Applications', 'Custom web apps, dashboards, and portals built with modern frameworks for scalability.'),
                array('&#128260;', 'Website Redesign', 'Modernize your outdated website with fresh design, improved UX, and better performance.'),
                array('&#9881;&#65039;', 'Maintenance & Support', 'Ongoing website maintenance, security updates, performance monitoring, and technical support.'),
            );
            foreach ($web_services as $svc) :
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

<section class="section" aria-labelledby="web-process-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Process</span>
            <h2 id="web-process-heading">How We Build Your Website</h2>
        </div>
        <div class="process-grid">
            <?php
            $steps = array(
                array('Discovery & Planning', 'Understanding your goals, audience, and requirements to create a comprehensive project plan.'),
                array('UI/UX Design', 'Wireframes and visual designs that prioritize user experience and conversion optimization.'),
                array('Development', 'Clean, semantic code with modern frameworks ensuring speed, security, and scalability.'),
                array('Testing & Launch', 'Rigorous testing across devices and browsers, followed by a smooth, monitored launch.'),
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
<section class="section bg-gray" itemscope itemtype="https://schema.org/FAQPage" aria-labelledby="web-faq-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">FAQs</span>
            <h2 id="web-faq-heading">Frequently Asked Questions</h2>
        </div>
        <div class="faq-list">
            <?php
            $faqs = array(
                array('How long does it take to build a website?', 'A typical corporate website takes 4-6 weeks. E-commerce sites take 6-10 weeks. Landing pages can be done in 1-2 weeks. Timeline depends on complexity, content readiness, and feedback cycles.'),
                array('What technologies do you use?', 'We use modern tech stacks including React, Next.js, WordPress, Shopify, and custom solutions. The choice depends on your specific needs, budget, and maintenance requirements.'),
                array('Will my website be SEO-friendly?', 'Absolutely. SEO is built into our development process from day one. We handle technical SEO, page speed optimization, schema markup, mobile responsiveness, and proper site architecture.'),
                array('Do you provide hosting and maintenance?', 'Yes, we offer managed hosting and ongoing maintenance packages. This includes security updates, performance monitoring, backups, and content updates as needed.'),
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
        <h2>Ready for a Website That Actually Works?</h2>
        <p>Let's discuss your project and create a website that drives real business results.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white">Start Your Web Project &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
