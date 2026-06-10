<?php
/**
 * Template Name: Web Development Service
 * @package PayPerGrowth
 */
get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Web Development</span>
        <h1>Websites Built to Convert Visitors Into Customers</h1>
        <p>Custom-designed, performance-optimized websites that look stunning and drive real results.</p>
        <?php ppg_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="service-detail fade-in">
            <div class="service-detail-text">
                <h2>Your Website Is Your Best Salesperson</h2>
                <p>We build websites engineered for conversions, speed, and search engine visibility.</p>
                <ul class="service-features">
                    <li>Custom designs&mdash;100% unique to your brand</li>
                    <li>Mobile-first responsive on all devices</li>
                    <li>SEO-optimized from day one</li>
                    <li>Sub-3 second load times</li>
                    <li>Conversion-focused UX design</li>
                    <li>CMS powered&mdash;easy content management</li>
                </ul>
            </div>
            <div class="service-image-placeholder">&#128187;</div>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="section-header fade-in"><span class="section-label">What We Build</span><h2>Web Development Services</h2></div>
        <div class="services-grid">
            <?php
            $svcs = array(
                array('&#127970;','Corporate Websites','Professional sites that establish credibility.'),
                array('&#128722;','E-Commerce','Online stores with payment integration and optimized checkout.'),
                array('&#128640;','Landing Pages','High-converting pages for your campaigns.'),
                array('&#128241;','Web Applications','Custom dashboards, portals, and tools.'),
                array('&#128260;','Website Redesign','Modernize outdated sites with fresh design.'),
                array('&#9881;','Maintenance','Ongoing support, security, and updates.'),
            );
            foreach ($svcs as $s) : ?>
                <div class="service-card fade-in"><div class="service-icon"><?php echo $s[0]; ?></div><h3><?php echo $s[1]; ?></h3><p><?php echo $s[2]; ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header fade-in"><span class="section-label">Our Process</span><h2>How We Build Your Website</h2></div>
        <div class="process-grid">
            <div class="process-card fade-in"><h4>Discovery</h4><p>Understanding your goals and requirements.</p></div>
            <div class="process-card fade-in"><h4>UI/UX Design</h4><p>Wireframes and visuals for conversion.</p></div>
            <div class="process-card fade-in"><h4>Development</h4><p>Clean code with modern frameworks.</p></div>
            <div class="process-card fade-in"><h4>Launch</h4><p>Testing and smooth, monitored launch.</p></div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Ready for a Website That Works?</h2>
        <p>Let's create a website that drives real business results.</p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">Start Your Project &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
