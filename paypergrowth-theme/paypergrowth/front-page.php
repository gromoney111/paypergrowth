<?php
/**
 * Template Name: Front Page
 * @package PayPerGrowth
 */
get_header(); ?>

<!-- Hero -->
<section class="hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-text">
                <h1>Grow Your Business With <span class="highlight">Data-Driven</span> Paid Marketing</h1>
                <p>India's trusted paid marketing agency delivering measurable ROI through Google Ads, Bing Ads, and comprehensive digital marketing strategies that scale your revenue.</p>
                <div class="hero-buttons">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary">Get Free Consultation &rarr;</a>
                    <a href="<?php echo home_url('/case-studies/'); ?>" class="btn btn-outline">View Case Studies</a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat"><h3>500+</h3><p>Clients Served</p></div>
                    <div class="hero-stat"><h3>&#8377;150Cr+</h3><p>Ad Spend Managed</p></div>
                    <div class="hero-stat"><h3>3x</h3><p>Average ROAS</p></div>
                </div>
            </div>
            <div>
                <?php if (has_post_thumbnail()) : the_post_thumbnail('hero-image'); else : ?>
                    <div class="hero-image">&#128200;</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="stats-bar">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item fade-in"><h3>500+</h3><p>Happy Clients</p></div>
            <div class="stat-item fade-in"><h3>98%</h3><p>Client Retention</p></div>
            <div class="stat-item fade-in"><h3>10,000+</h3><p>Campaigns Managed</p></div>
            <div class="stat-item fade-in"><h3>8+</h3><p>Years Experience</p></div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="section">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Services</span>
            <h2>Comprehensive Paid Marketing Solutions</h2>
            <p>From strategy to execution, we deliver end-to-end paid marketing services that drive real business growth.</p>
        </div>
        <div class="services-grid">
            <?php
            $services = array(
                array('&#127919;','Google Ads Management','Maximize your ROI with expertly managed Google Search, Display, Shopping & YouTube campaigns.','google-ads'),
                array('&#128269;','Bing Ads Management','Tap into Microsoft\'s advertising network to reach high-intent audiences at lower CPCs.','bing-ads'),
                array('&#128241;','Digital Marketing','Holistic digital marketing including SEO, social media, content marketing, and email campaigns.','digital-marketing'),
                array('&#128187;','Web Development & Design','Custom websites built for conversions with modern design and fast loading speeds.','web-development'),
            );
            foreach ($services as $s) : ?>
                <div class="service-card fade-in">
                    <div class="service-icon"><?php echo $s[0]; ?></div>
                    <h3><?php echo esc_html($s[1]); ?></h3>
                    <p><?php echo esc_html($s[2]); ?></p>
                    <a href="<?php echo home_url('/'.$s[3].'/'); ?>" class="learn-more">Learn More &rarr;</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section why-us">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label" style="color:#93c5fd;">Why Choose Us</span>
            <h2>Why India's Top Brands Trust PayPerGrowth</h2>
            <p>We combine data-driven strategies with creative excellence to deliver results that matter.</p>
        </div>
        <div class="why-grid">
            <div class="why-card fade-in"><div class="icon">&#128202;</div><h4>Data-Driven Approach</h4><p>Every decision backed by analytics. We track, measure, and optimize for maximum ROI.</p></div>
            <div class="why-card fade-in"><div class="icon">&#127942;</div><h4>Google Premier Partner</h4><p>Certified expertise with direct access to Google's latest tools and beta features.</p></div>
            <div class="why-card fade-in"><div class="icon">&#127470;&#127475;</div><h4>India Market Experts</h4><p>Deep understanding of Indian consumer behavior and multilingual campaign management.</p></div>
            <div class="why-card fade-in"><div class="icon">&#129309;</div><h4>Transparent Reporting</h4><p>Real-time dashboards, weekly reports, and monthly strategy calls. No hidden fees.</p></div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section bg-gray">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Client Testimonials</span>
            <h2>What Our Clients Say</h2>
            <p>Don't just take our word for it&mdash;hear from businesses that grew with us.</p>
        </div>
        <div class="testimonials-grid">
            <?php
            $testimonials = array(
                array('PayPerGrowth transformed our Google Ads performance. We saw a 4x increase in leads within 3 months while reducing our cost per acquisition by 40%.','RK','Rajesh Kumar','CEO, TechStart Solutions'),
                array('Their Bing Ads strategy opened up a new channel we hadn\'t considered. The team\'s expertise in the Indian market is unmatched.','PS','Priya Sharma','Marketing Director, EduLearn India'),
                array('From website redesign to running our PPC campaigns, PayPerGrowth has been a one-stop solution. Our online revenue grew 280% in the first year.','AM','Amit Mehta','Founder, ShopEase Commerce'),
            );
            foreach ($testimonials as $t) : ?>
                <div class="testimonial-card fade-in">
                    <div class="quote-icon">&#10077;</div>
                    <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>&ldquo;<?php echo esc_html($t[0]); ?>&rdquo;</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar"><?php echo $t[1]; ?></div>
                        <div><h4><?php echo esc_html($t[2]); ?></h4><span><?php echo esc_html($t[3]); ?></span></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Scale Your Business?</h2>
        <p>Get a free audit of your current paid marketing campaigns and discover untapped growth opportunities.</p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">Get Your Free Audit &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
