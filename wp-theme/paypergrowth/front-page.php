<?php
/**
 * Front Page Template
 *
 * @package PayPerGrowth
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Grow Your Business With <span>Data-Driven</span> Paid Marketing</h1>
                <p>India's trusted paid marketing agency delivering measurable ROI through Google Ads, Bing Ads, and comprehensive digital marketing strategies that scale your revenue.</p>
                <div class="hero-buttons">
                    <?php $contact_page = get_page_by_path('contact'); ?>
                    <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-primary">Get Free Consultation &rarr;</a>
                    <?php $case_page = get_page_by_path('case-studies'); ?>
                    <a href="<?php echo $case_page ? esc_url(get_permalink($case_page)) : '#'; ?>" class="btn btn-outline">View Case Studies</a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <h3 data-count="500" data-suffix="+">0+</h3>
                        <p>Clients Served</p>
                    </div>
                    <div class="hero-stat">
                        <h3 data-count="150" data-prefix="&#8377;" data-suffix="Cr+">0</h3>
                        <p>Ad Spend Managed</p>
                    </div>
                    <div class="hero-stat">
                        <h3 data-count="3" data-suffix="x">0x</h3>
                        <p>Average ROAS</p>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <?php
                $hero_image_id = get_theme_mod('paypergrowth_hero_image');
                if ($hero_image_id) :
                    echo wp_get_attachment_image($hero_image_id, 'hero-image', false, array('class' => 'hero-img', 'loading' => 'eager'));
                else :
                ?>
                    <div class="hero-image-placeholder" aria-hidden="true">&#128200;</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="stats-bar" aria-label="Company Statistics">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item fade-in">
                <h3 data-count="500" data-suffix="+">500+</h3>
                <p>Happy Clients</p>
            </div>
            <div class="stat-item fade-in">
                <h3 data-count="98" data-suffix="%">98%</h3>
                <p>Client Retention</p>
            </div>
            <div class="stat-item fade-in">
                <h3 data-count="10000" data-suffix="+">10000+</h3>
                <p>Campaigns Managed</p>
            </div>
            <div class="stat-item fade-in">
                <h3 data-count="8" data-suffix="+">8+</h3>
                <p>Years Experience</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section" aria-labelledby="services-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Services</span>
            <h2 id="services-heading">Comprehensive Paid Marketing Solutions</h2>
            <p>From strategy to execution, we deliver end-to-end paid marketing services that drive real business growth.</p>
        </div>
        <div class="services-grid">
            <?php
            $services_data = array(
                array(
                    'icon'  => '&#127919;',
                    'title' => 'Google Ads Management',
                    'desc'  => 'Maximize your ROI with expertly managed Google Search, Display, Shopping & YouTube campaigns tailored for the Indian market.',
                    'slug'  => 'google-ads',
                ),
                array(
                    'icon'  => '&#128269;',
                    'title' => 'Bing Ads Management',
                    'desc'  => 'Tap into Microsoft\'s advertising network to reach high-intent audiences at lower CPCs with our Bing Ads expertise.',
                    'slug'  => 'bing-ads',
                ),
                array(
                    'icon'  => '&#128241;',
                    'title' => 'Digital Marketing',
                    'desc'  => 'Holistic digital marketing strategies including SEO, social media marketing, content marketing, and email campaigns.',
                    'slug'  => 'digital-marketing',
                ),
                array(
                    'icon'  => '&#128187;',
                    'title' => 'Web Development & Design',
                    'desc'  => 'Custom websites built for conversions with modern design, fast loading speeds, and seamless user experiences.',
                    'slug'  => 'web-development',
                ),
            );

            foreach ($services_data as $service) :
                $page = get_page_by_path($service['slug']);
                $url = $page ? get_permalink($page) : '#';
            ?>
                <div class="service-card fade-in">
                    <div class="service-icon" aria-hidden="true"><?php echo $service['icon']; ?></div>
                    <h3><?php echo esc_html($service['title']); ?></h3>
                    <p><?php echo esc_html($service['desc']); ?></p>
                    <a href="<?php echo esc_url($url); ?>" class="learn-more">Learn More &rarr;</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section why-us" aria-labelledby="why-us-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label" style="color: #93c5fd;">Why Choose Us</span>
            <h2 id="why-us-heading">Why India's Top Brands Trust PayPerGrowth</h2>
            <p>We combine data-driven strategies with creative excellence to deliver results that matter.</p>
        </div>
        <div class="why-grid">
            <div class="why-card fade-in">
                <div class="icon" aria-hidden="true">&#128202;</div>
                <h4>Data-Driven Approach</h4>
                <p>Every decision backed by analytics. We track, measure, and optimize for maximum ROI on every rupee spent.</p>
            </div>
            <div class="why-card fade-in">
                <div class="icon" aria-hidden="true">&#127942;</div>
                <h4>Google Premier Partner</h4>
                <p>Certified expertise with direct access to Google's latest tools, beta features, and dedicated support.</p>
            </div>
            <div class="why-card fade-in">
                <div class="icon" aria-hidden="true">&#127470;&#127475;</div>
                <h4>India Market Experts</h4>
                <p>Deep understanding of Indian consumer behavior, regional targeting, and multilingual campaign management.</p>
            </div>
            <div class="why-card fade-in">
                <div class="icon" aria-hidden="true">&#129309;</div>
                <h4>Transparent Reporting</h4>
                <p>Real-time dashboards, weekly reports, and monthly strategy calls. No hidden fees, no jargon&mdash;just results.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section bg-gray" aria-labelledby="testimonials-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Client Testimonials</span>
            <h2 id="testimonials-heading">What Our Clients Say</h2>
            <p>Don't just take our word for it&mdash;hear from businesses that grew with us.</p>
        </div>
        <div class="testimonials-grid">
            <?php
            // Try to get testimonials from custom post type first
            $testimonials = new WP_Query(array(
                'post_type'      => 'testimonial',
                'posts_per_page' => 3,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ));

            if ($testimonials->have_posts()) :
                while ($testimonials->have_posts()) : $testimonials->the_post();
            ?>
                <div class="testimonial-card fade-in">
                    <div class="quote-icon" aria-hidden="true">&#10077;</div>
                    <div class="stars" aria-label="5 star rating">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p><?php echo esc_html(get_the_content()); ?></p>
                    <div class="testimonial-author">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="testimonial-avatar"><?php the_post_thumbnail('thumbnail'); ?></div>
                        <?php else : ?>
                            <div class="testimonial-avatar"><?php echo esc_html(mb_substr(get_the_title(), 0, 2)); ?></div>
                        <?php endif; ?>
                        <div>
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), 'position', true)); ?></span>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default testimonials if no posts exist
                $default_testimonials = array(
                    array(
                        'text'     => 'PayPerGrowth transformed our Google Ads performance. We saw a 4x increase in leads within 3 months while reducing our cost per acquisition by 40%.',
                        'initials' => 'RK',
                        'name'     => 'Rajesh Kumar',
                        'role'     => 'CEO, TechStart Solutions',
                    ),
                    array(
                        'text'     => 'Their Bing Ads strategy opened up a new channel we hadn\'t considered. The team\'s expertise in the Indian market is unmatched. Highly recommended!',
                        'initials' => 'PS',
                        'name'     => 'Priya Sharma',
                        'role'     => 'Marketing Director, EduLearn India',
                    ),
                    array(
                        'text'     => 'From website redesign to running our PPC campaigns, PayPerGrowth has been a one-stop solution. Our online revenue grew 280% in the first year.',
                        'initials' => 'AM',
                        'name'     => 'Amit Mehta',
                        'role'     => 'Founder, ShopEase Commerce',
                    ),
                );

                foreach ($default_testimonials as $testimonial) :
            ?>
                <div class="testimonial-card fade-in">
                    <div class="quote-icon" aria-hidden="true">&#10077;</div>
                    <div class="stars" aria-label="5 star rating">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>&ldquo;<?php echo esc_html($testimonial['text']); ?>&rdquo;</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar"><?php echo esc_html($testimonial['initials']); ?></div>
                        <div>
                            <h4><?php echo esc_html($testimonial['name']); ?></h4>
                            <span><?php echo esc_html($testimonial['role']); ?></span>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Scale Your Business?</h2>
        <p>Get a free audit of your current paid marketing campaigns and discover untapped growth opportunities.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white">Get Your Free Audit &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
