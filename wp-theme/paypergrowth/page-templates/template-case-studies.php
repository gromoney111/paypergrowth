<?php
/**
 * Template Name: Case Studies
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Case Studies</span>
        <h1>Real Results for Real Businesses</h1>
        <p>See how we've helped Indian businesses achieve exceptional growth through strategic paid marketing campaigns.</p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<!-- Case Studies Grid -->
<section class="section">
    <div class="container">
        <div class="case-studies-grid">
            <?php
            // Try custom post type first
            $case_studies = new WP_Query(array(
                'post_type'      => 'case_study',
                'posts_per_page' => 12,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ));

            if ($case_studies->have_posts()) :
                while ($case_studies->have_posts()) : $case_studies->the_post();
                    $industry = get_the_terms(get_the_ID(), 'industry');
                    $industry_name = $industry ? $industry[0]->name : '';
                    $metric_1_value = get_post_meta(get_the_ID(), 'metric_1_value', true);
                    $metric_1_label = get_post_meta(get_the_ID(), 'metric_1_label', true);
                    $metric_2_value = get_post_meta(get_the_ID(), 'metric_2_value', true);
                    $metric_2_label = get_post_meta(get_the_ID(), 'metric_2_label', true);
                    $metric_3_value = get_post_meta(get_the_ID(), 'metric_3_value', true);
                    $metric_3_label = get_post_meta(get_the_ID(), 'metric_3_label', true);
            ?>
                <article class="case-card fade-in" itemscope itemtype="https://schema.org/Article">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="case-card-image">
                            <?php the_post_thumbnail('case-study'); ?>
                        </div>
                    <?php else : ?>
                        <div class="case-card-image" style="background: linear-gradient(135deg, var(--primary), #6366f1);">&#128202;</div>
                    <?php endif; ?>
                    <div class="case-card-body">
                        <?php if ($industry_name) : ?>
                            <span class="tag"><?php echo esc_html($industry_name); ?></span>
                        <?php endif; ?>
                        <h3 itemprop="headline"><?php the_title(); ?></h3>
                        <p itemprop="description"><?php echo get_the_excerpt(); ?></p>
                        <?php if ($metric_1_value) : ?>
                            <div class="case-results">
                                <div class="result"><h4><?php echo esc_html($metric_1_value); ?></h4><span><?php echo esc_html($metric_1_label); ?></span></div>
                                <?php if ($metric_2_value) : ?>
                                    <div class="result"><h4><?php echo esc_html($metric_2_value); ?></h4><span><?php echo esc_html($metric_2_label); ?></span></div>
                                <?php endif; ?>
                                <?php if ($metric_3_value) : ?>
                                    <div class="result"><h4><?php echo esc_html($metric_3_value); ?></h4><span><?php echo esc_html($metric_3_label); ?></span></div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default case studies
                $default_cases = array(
                    array(
                        'gradient' => 'linear-gradient(135deg, #1a56db, #3b82f6)',
                        'icon'     => '&#128722;',
                        'tag'      => 'E-Commerce &bull; Google Ads',
                        'title'    => 'ShopEase: 280% Revenue Growth in 12 Months',
                        'desc'     => 'How we scaled an e-commerce brand from &#8377;5L to &#8377;19L monthly revenue through strategic Google Shopping and Search campaigns.',
                        'metrics'  => array(array('280%', 'Revenue Growth'), array('4.2x', 'ROAS'), array('-45%', 'CPA Reduction')),
                    ),
                    array(
                        'gradient' => 'linear-gradient(135deg, #059669, #10b981)',
                        'icon'     => '&#127891;',
                        'tag'      => 'EdTech &bull; Google + Bing Ads',
                        'title'    => 'EduLearn India: 5x Lead Generation Growth',
                        'desc'     => 'Transforming a regional EdTech platform into a national player with multi-channel paid campaigns across Google and Bing.',
                        'metrics'  => array(array('5x', 'Lead Growth'), array('&#8377;85', 'Cost Per Lead'), array('320%', 'Enrollment Rise')),
                    ),
                    array(
                        'gradient' => 'linear-gradient(135deg, #dc2626, #f97316)',
                        'icon'     => '&#127973;',
                        'tag'      => 'Healthcare &bull; Digital Marketing',
                        'title'    => 'MedCare Hospitals: Dominating Local Search',
                        'desc'     => 'A multi-location hospital chain went from page 3 to position 1 for 150+ high-value medical keywords across 8 cities.',
                        'metrics'  => array(array('150+', '#1 Rankings'), array('400%', 'Organic Traffic'), array('3x', 'Appointments')),
                    ),
                    array(
                        'gradient' => 'linear-gradient(135deg, #7c3aed, #a855f7)',
                        'icon'     => '&#128188;',
                        'tag'      => 'B2B SaaS &bull; Bing Ads',
                        'title'    => 'CloudStack: B2B Leads at 60% Lower CPA',
                        'desc'     => 'How we leveraged Bing\'s LinkedIn targeting to generate high-quality enterprise leads at significantly lower costs than Google.',
                        'metrics'  => array(array('-60%', 'CPA vs Google'), array('200+', 'Enterprise Leads'), array('&#8377;2.5Cr', 'Pipeline Value')),
                    ),
                    array(
                        'gradient' => 'linear-gradient(135deg, #0891b2, #06b6d4)',
                        'icon'     => '&#127968;',
                        'tag'      => 'Real Estate &bull; Google Ads',
                        'title'    => 'HomeVista: 85% Reduction in Cost Per Inquiry',
                        'desc'     => 'A premium real estate developer in Pune achieved record-low inquiry costs while maintaining lead quality through refined targeting.',
                        'metrics'  => array(array('-85%', 'CPI Reduction'), array('500+', 'Quality Leads'), array('12x', 'ROAS')),
                    ),
                    array(
                        'gradient' => 'linear-gradient(135deg, #ea580c, #f59e0b)',
                        'icon'     => '&#127829;',
                        'tag'      => 'Food & Beverage &bull; Web + Marketing',
                        'title'    => 'TastyBites: Complete Digital Transformation',
                        'desc'     => 'Website redesign + integrated digital marketing helped this restaurant chain grow online orders by 450% in 6 months.',
                        'metrics'  => array(array('450%', 'Online Orders'), array('3.8x', 'ROAS'), array('90%', 'Faster Site')),
                    ),
                );

                foreach ($default_cases as $case) :
            ?>
                <div class="case-card fade-in">
                    <div class="case-card-image" style="background: <?php echo $case['gradient']; ?>;"><?php echo $case['icon']; ?></div>
                    <div class="case-card-body">
                        <span class="tag"><?php echo $case['tag']; ?></span>
                        <h3><?php echo esc_html($case['title']); ?></h3>
                        <p><?php echo $case['desc']; ?></p>
                        <div class="case-results">
                            <?php foreach ($case['metrics'] as $metric) : ?>
                                <div class="result"><h4><?php echo $metric[0]; ?></h4><span><?php echo esc_html($metric[1]); ?></span></div>
                            <?php endforeach; ?>
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

<!-- Results Summary -->
<section class="section bg-gray" aria-labelledby="results-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Aggregate Results</span>
            <h2 id="results-heading">Our Track Record Speaks for Itself</h2>
            <p>Across 500+ clients, here's what we've consistently delivered.</p>
        </div>
        <div class="stats-grid" style="max-width:800px; margin:0 auto;">
            <div class="stat-item fade-in">
                <h3>3x+</h3>
                <p>Average ROAS</p>
            </div>
            <div class="stat-item fade-in">
                <h3>-42%</h3>
                <p>Avg. CPA Reduction</p>
            </div>
            <div class="stat-item fade-in">
                <h3>185%</h3>
                <p>Avg. Traffic Increase</p>
            </div>
            <div class="stat-item fade-in">
                <h3>98%</h3>
                <p>Client Retention</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Want Results Like These?</h2>
        <p>Let's discuss your business goals and create a strategy that delivers measurable growth.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white">Start Your Growth Story &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
