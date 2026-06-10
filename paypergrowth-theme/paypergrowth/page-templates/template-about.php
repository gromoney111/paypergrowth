<?php
/**
 * Template Name: About Us
 * @package PayPerGrowth
 */
get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">About Us</span>
        <h1>We're on a Mission to Grow Indian Businesses</h1>
        <p>Since 2016, we've helped 500+ businesses across India achieve their growth goals through strategic paid marketing.</p>
        <?php ppg_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="about-content fade-in">
            <div>
                <span class="section-label">Our Story</span>
                <h2>From Startup to India's Trusted PPC Agency</h2>
                <p>PayPerGrowth was founded in 2016 with a simple belief: every business in India deserves access to world-class paid marketing expertise without the enterprise price tag.</p>
                <p>Starting with a small team of 3 Google Ads specialists in Mumbai, we've grown into a full-service paid marketing agency serving clients across India&mdash;from bootstrapped startups to publicly listed companies.</p>
                <p>Today, we manage over &#8377;150 Crores in annual ad spend, consistently delivering 3x+ ROAS for our clients.</p>
            </div>
            <div class="service-image-placeholder">&#128640;</div>
        </div>
    </div>
</section>

<section class="stats-bar">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item fade-in"><h3>500+</h3><p>Clients Served</p></div>
            <div class="stat-item fade-in"><h3>&#8377;150Cr+</h3><p>Ad Spend Managed</p></div>
            <div class="stat-item fade-in"><h3>50+</h3><p>Team Members</p></div>
            <div class="stat-item fade-in"><h3>8+</h3><p>Years Experience</p></div>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Values</span>
            <h2>What Drives Us Every Day</h2>
        </div>
        <div class="about-values">
            <?php
            $values = array(
                array('&#128202;','Data Over Opinions','Every strategy backed by data. We let numbers guide us, not gut feelings.'),
                array('&#128269;','Radical Transparency','No hidden fees, no vanity metrics. You see exactly where your money goes.'),
                array('&#127919;','ROI Obsession','We measure success by your bottom line, not clicks or impressions.'),
                array('&#129309;','Partnership Mindset','We\'re an extension of your team. Your success is our success.'),
                array('&#128200;','Continuous Learning','We stay ahead of platform changes and industry trends.'),
                array('&#9889;','Speed of Execution','We move fast, test faster, and optimize continuously.'),
            );
            foreach ($values as $v) : ?>
                <div class="value-card fade-in">
                    <div class="icon"><?php echo $v[0]; ?></div>
                    <h4><?php echo esc_html($v[1]); ?></h4>
                    <p><?php echo esc_html($v[2]); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Team</span>
            <h2>Meet the Experts Behind Your Growth</h2>
        </div>
        <div class="team-grid">
            <?php
            $team = array(
                array('VG','Vikram Gupta','Founder & CEO'),
                array('NP','Neha Patel','Head of PPC'),
                array('AK','Arjun Kapoor','Creative Director'),
                array('SM','Sanjana Mehta','Head of Strategy'),
            );
            foreach ($team as $m) : ?>
                <div class="team-card fade-in">
                    <div class="team-avatar"><?php echo $m[0]; ?></div>
                    <h4><?php echo esc_html($m[1]); ?></h4>
                    <span><?php echo esc_html($m[2]); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Let's Grow Together</h2>
        <p>Ready to take your business to the next level? Let's talk.</p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">Get In Touch &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
