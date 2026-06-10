<?php
/**
 * Template Name: About Us
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">About Us</span>
        <h1>We're on a Mission to Grow Indian Businesses</h1>
        <p>Since 2016, we've helped 500+ businesses across India achieve their growth goals through strategic paid marketing and digital excellence.</p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<!-- Our Story -->
<section class="section">
    <div class="container">
        <div class="about-content fade-in">
            <div>
                <span class="section-label">Our Story</span>
                <h2>From Startup to India's Trusted PPC Agency</h2>
                <p>PayPerGrowth was founded in 2016 with a simple belief: every business in India deserves access to world-class paid marketing expertise without the enterprise price tag.</p>
                <p>Starting with a small team of 3 Google Ads specialists in Mumbai, we've grown into a full-service paid marketing agency serving clients across India&mdash;from bootstrapped startups to publicly listed companies.</p>
                <p>Today, we manage over &#8377;150 Crores in annual ad spend, consistently delivering 3x+ ROAS for our clients. Our success is built on transparency, data-driven decisions, and an obsessive focus on ROI.</p>
            </div>
            <div class="service-image-placeholder" aria-hidden="true">&#128640;</div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="stats-bar">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item fade-in">
                <h3>500+</h3>
                <p>Clients Served</p>
            </div>
            <div class="stat-item fade-in">
                <h3>&#8377;150Cr+</h3>
                <p>Ad Spend Managed</p>
            </div>
            <div class="stat-item fade-in">
                <h3>50+</h3>
                <p>Team Members</p>
            </div>
            <div class="stat-item fade-in">
                <h3>8+</h3>
                <p>Years Experience</p>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="section bg-gray" aria-labelledby="values-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Values</span>
            <h2 id="values-heading">What Drives Us Every Day</h2>
            <p>Our core values shape how we work with clients and deliver results.</p>
        </div>
        <div class="about-values">
            <?php
            $values = array(
                array('icon' => '&#128202;', 'title' => 'Data Over Opinions', 'desc' => 'Every strategy, every decision is backed by data. We let numbers guide us, not assumptions or gut feelings.'),
                array('icon' => '&#128269;', 'title' => 'Radical Transparency', 'desc' => 'No hidden fees, no vanity metrics. You see exactly where your money goes and what results it generates.'),
                array('icon' => '&#127919;', 'title' => 'ROI Obsession', 'desc' => 'We measure success by your bottom line, not clicks or impressions. Revenue growth is our north star.'),
                array('icon' => '&#129309;', 'title' => 'Partnership Mindset', 'desc' => 'We\'re not a vendor&mdash;we\'re an extension of your team. Your success is our success, and we act accordingly.'),
                array('icon' => '&#128200;', 'title' => 'Continuous Learning', 'desc' => 'Digital marketing evolves daily. We invest heavily in training and stay ahead of platform changes and trends.'),
                array('icon' => '&#9889;', 'title' => 'Speed of Execution', 'desc' => 'In paid marketing, speed matters. We move fast, test faster, and optimize continuously for peak performance.'),
            );

            foreach ($values as $value) :
            ?>
                <div class="value-card fade-in">
                    <div class="icon" aria-hidden="true"><?php echo $value['icon']; ?></div>
                    <h4><?php echo esc_html($value['title']); ?></h4>
                    <p><?php echo $value['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Team -->
<section class="section" aria-labelledby="team-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Team</span>
            <h2 id="team-heading">Meet the Experts Behind Your Growth</h2>
            <p>A team of certified professionals passionate about performance marketing.</p>
        </div>
        <div class="team-grid">
            <?php
            // Try custom post type first
            $team = new WP_Query(array(
                'post_type'      => 'team_member',
                'posts_per_page' => 8,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ));

            if ($team->have_posts()) :
                while ($team->have_posts()) : $team->the_post();
            ?>
                <div class="team-card fade-in">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('team-avatar', array('class' => 'team-avatar')); ?>
                    <?php else : ?>
                        <div class="team-avatar"><?php echo esc_html(mb_substr(get_the_title(), 0, 2)); ?></div>
                    <?php endif; ?>
                    <h4><?php the_title(); ?></h4>
                    <span><?php echo esc_html(get_post_meta(get_the_ID(), 'position', true)); ?></span>
                    <?php if (has_excerpt()) : ?>
                        <p style="margin-top:10px; font-size:0.9rem; color:var(--gray-500);"><?php echo get_the_excerpt(); ?></p>
                    <?php endif; ?>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default team members
                $team_members = array(
                    array('initials' => 'VG', 'name' => 'Vikram Gupta', 'role' => 'Founder & CEO', 'bio' => '10+ years in digital marketing. Former Google India team. Built PayPerGrowth from the ground up.'),
                    array('initials' => 'NP', 'name' => 'Neha Patel', 'role' => 'Head of PPC', 'bio' => 'Google Ads certified expert managing &#8377;50Cr+ in annual ad spend across 200+ campaigns.'),
                    array('initials' => 'AK', 'name' => 'Arjun Kapoor', 'role' => 'Creative Director', 'bio' => 'Award-winning designer leading our web development and creative team with 8+ years experience.'),
                    array('initials' => 'SM', 'name' => 'Sanjana Mehta', 'role' => 'Head of Strategy', 'bio' => 'MBA from IIM-A. Specializes in building data-driven marketing strategies for scaling businesses.'),
                );

                foreach ($team_members as $member) :
            ?>
                <div class="team-card fade-in">
                    <div class="team-avatar"><?php echo esc_html($member['initials']); ?></div>
                    <h4><?php echo esc_html($member['name']); ?></h4>
                    <span><?php echo esc_html($member['role']); ?></span>
                    <p style="margin-top:10px; font-size:0.9rem; color:var(--gray-500);"><?php echo $member['bio']; ?></p>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Certifications -->
<section class="section bg-gray" aria-labelledby="certs-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Certifications</span>
            <h2 id="certs-heading">Recognized & Certified</h2>
            <p>Our team holds certifications from the world's leading advertising platforms.</p>
        </div>
        <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
            <?php
            $certs = array('Google Premier Partner', 'Microsoft Advertising Partner', 'Meta Business Partner', 'HubSpot Certified');
            foreach ($certs as $cert) :
            ?>
                <div class="service-card fade-in" style="text-align:center;">
                    <div class="service-icon" style="margin:0 auto 15px;" aria-hidden="true">&#127941;</div>
                    <h4><?php echo esc_html($cert); ?></h4>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Want to Join Our Growing Team?</h2>
        <p>We're always looking for talented marketers, designers, and developers. Let's build something amazing together.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white">Get In Touch &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
