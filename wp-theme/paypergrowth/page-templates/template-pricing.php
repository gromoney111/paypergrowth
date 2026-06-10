<?php
/**
 * Template Name: Pricing
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Pricing</span>
        <h1>Transparent Pricing, No Hidden Fees</h1>
        <p>Choose a plan that fits your business size and goals. All plans include dedicated account management and transparent reporting.</p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<!-- PPC Pricing -->
<section class="section" aria-labelledby="ppc-pricing-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">PPC Management</span>
            <h2 id="ppc-pricing-heading">Google Ads & Bing Ads Packages</h2>
            <p>Professional PPC management with proven results. Ad spend is billed directly to you by Google/Microsoft.</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card fade-in">
                <h3>Starter</h3>
                <div class="price">&#8377;15,000<span>/month</span></div>
                <p class="price-desc">Best for small businesses starting with PPC</p>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Up to &#8377;50K monthly ad spend</li>
                    <li><span class="check">&#10003;</span> 1 Platform (Google OR Bing)</li>
                    <li><span class="check">&#10003;</span> Up to 3 campaigns</li>
                    <li><span class="check">&#10003;</span> Keyword research & setup</li>
                    <li><span class="check">&#10003;</span> Ad copy creation (5 ads)</li>
                    <li><span class="check">&#10003;</span> Bi-weekly optimization</li>
                    <li><span class="check">&#10003;</span> Monthly performance report</li>
                    <li><span class="cross">&#10007;</span> Landing page design</li>
                    <li><span class="cross">&#10007;</span> Competitor analysis</li>
                    <li><span class="cross">&#10007;</span> Dedicated account manager</li>
                </ul>
                <?php $contact_page = get_page_by_path('contact'); ?>
                <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-outline" style="width:100%; justify-content:center;">Get Started</a>
            </div>

            <div class="pricing-card featured fade-in">
                <div class="pricing-badge">Most Popular</div>
                <h3>Growth</h3>
                <div class="price">&#8377;35,000<span>/month</span></div>
                <p class="price-desc">Perfect for growing businesses scaling their ads</p>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Up to &#8377;2L monthly ad spend</li>
                    <li><span class="check">&#10003;</span> Both Google & Bing platforms</li>
                    <li><span class="check">&#10003;</span> Up to 10 campaigns</li>
                    <li><span class="check">&#10003;</span> Advanced keyword strategy</li>
                    <li><span class="check">&#10003;</span> Ad copy A/B testing (15 ads)</li>
                    <li><span class="check">&#10003;</span> Weekly optimization</li>
                    <li><span class="check">&#10003;</span> Weekly performance reports</li>
                    <li><span class="check">&#10003;</span> 1 Landing page design</li>
                    <li><span class="check">&#10003;</span> Competitor analysis</li>
                    <li><span class="check">&#10003;</span> Dedicated account manager</li>
                </ul>
                <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-primary" style="width:100%; justify-content:center;">Get Started</a>
            </div>

            <div class="pricing-card fade-in">
                <h3>Enterprise</h3>
                <div class="price">&#8377;75,000<span>/month</span></div>
                <p class="price-desc">For businesses with serious growth ambitions</p>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Unlimited ad spend management</li>
                    <li><span class="check">&#10003;</span> All platforms including YouTube</li>
                    <li><span class="check">&#10003;</span> Unlimited campaigns</li>
                    <li><span class="check">&#10003;</span> Full funnel strategy</li>
                    <li><span class="check">&#10003;</span> Unlimited ad creatives</li>
                    <li><span class="check">&#10003;</span> Daily optimization</li>
                    <li><span class="check">&#10003;</span> Real-time dashboard access</li>
                    <li><span class="check">&#10003;</span> 3 Landing page designs</li>
                    <li><span class="check">&#10003;</span> Advanced competitor intelligence</li>
                    <li><span class="check">&#10003;</span> Senior dedicated strategist</li>
                </ul>
                <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-outline" style="width:100%; justify-content:center;">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Digital Marketing Pricing -->
<section class="section bg-gray" aria-labelledby="dm-pricing-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Digital Marketing</span>
            <h2 id="dm-pricing-heading">SEO & Digital Marketing Packages</h2>
            <p>Build long-term organic growth with our comprehensive digital marketing services.</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card fade-in">
                <h3>Basic SEO</h3>
                <div class="price">&#8377;20,000<span>/month</span></div>
                <p class="price-desc">Essential SEO for local businesses</p>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Up to 10 keywords</li>
                    <li><span class="check">&#10003;</span> On-page optimization</li>
                    <li><span class="check">&#10003;</span> Technical SEO audit</li>
                    <li><span class="check">&#10003;</span> Google My Business setup</li>
                    <li><span class="check">&#10003;</span> 2 Blog posts/month</li>
                    <li><span class="check">&#10003;</span> Monthly reporting</li>
                    <li><span class="cross">&#10007;</span> Social media management</li>
                    <li><span class="cross">&#10007;</span> Email marketing</li>
                </ul>
                <?php $contact_page = get_page_by_path('contact'); ?>
                <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-outline" style="width:100%; justify-content:center;">Get Started</a>
            </div>

            <div class="pricing-card featured fade-in">
                <div class="pricing-badge">Best Value</div>
                <h3>Professional</h3>
                <div class="price">&#8377;45,000<span>/month</span></div>
                <p class="price-desc">Complete digital marketing solution</p>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Up to 30 keywords</li>
                    <li><span class="check">&#10003;</span> Full on-page & off-page SEO</li>
                    <li><span class="check">&#10003;</span> Technical optimization</li>
                    <li><span class="check">&#10003;</span> Social media (3 platforms)</li>
                    <li><span class="check">&#10003;</span> 6 Blog posts/month</li>
                    <li><span class="check">&#10003;</span> Email marketing campaigns</li>
                    <li><span class="check">&#10003;</span> Weekly reporting</li>
                    <li><span class="check">&#10003;</span> Content strategy</li>
                </ul>
                <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-primary" style="width:100%; justify-content:center;">Get Started</a>
            </div>

            <div class="pricing-card fade-in">
                <h3>Premium</h3>
                <div class="price">&#8377;85,000<span>/month</span></div>
                <p class="price-desc">Enterprise-grade digital domination</p>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Unlimited keywords</li>
                    <li><span class="check">&#10003;</span> Advanced SEO + link building</li>
                    <li><span class="check">&#10003;</span> Full social media suite</li>
                    <li><span class="check">&#10003;</span> Video content creation</li>
                    <li><span class="check">&#10003;</span> 12 Blog posts/month</li>
                    <li><span class="check">&#10003;</span> Marketing automation</li>
                    <li><span class="check">&#10003;</span> Real-time dashboard</li>
                    <li><span class="check">&#10003;</span> Dedicated strategist</li>
                </ul>
                <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-outline" style="width:100%; justify-content:center;">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Web Development Pricing -->
<section class="section" aria-labelledby="web-pricing-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Web Development</span>
            <h2 id="web-pricing-heading">Website Design & Development</h2>
            <p>One-time project-based pricing for custom website development.</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card fade-in">
                <h3>Landing Page</h3>
                <div class="price">&#8377;25,000<span> one-time</span></div>
                <p class="price-desc">High-converting single page for campaigns</p>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Custom design</li>
                    <li><span class="check">&#10003;</span> Mobile responsive</li>
                    <li><span class="check">&#10003;</span> Contact form integration</li>
                    <li><span class="check">&#10003;</span> SEO optimized</li>
                    <li><span class="check">&#10003;</span> Speed optimized</li>
                    <li><span class="check">&#10003;</span> 2 revisions included</li>
                    <li><span class="check">&#10003;</span> Delivered in 5-7 days</li>
                </ul>
                <?php $contact_page = get_page_by_path('contact'); ?>
                <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-outline" style="width:100%; justify-content:center;">Order Now</a>
            </div>

            <div class="pricing-card featured fade-in">
                <div class="pricing-badge">Most Popular</div>
                <h3>Business Website</h3>
                <div class="price">&#8377;75,000<span> one-time</span></div>
                <p class="price-desc">Complete business website (5-8 pages)</p>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Custom UI/UX design</li>
                    <li><span class="check">&#10003;</span> 5-8 pages</li>
                    <li><span class="check">&#10003;</span> CMS integration</li>
                    <li><span class="check">&#10003;</span> Blog setup</li>
                    <li><span class="check">&#10003;</span> SEO & speed optimized</li>
                    <li><span class="check">&#10003;</span> SSL & security setup</li>
                    <li><span class="check">&#10003;</span> 3 months free support</li>
                </ul>
                <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-primary" style="width:100%; justify-content:center;">Order Now</a>
            </div>

            <div class="pricing-card fade-in">
                <h3>E-Commerce</h3>
                <div class="price">&#8377;1,50,000<span> one-time</span></div>
                <p class="price-desc">Full-featured online store</p>
                <ul class="pricing-features">
                    <li><span class="check">&#10003;</span> Custom e-commerce design</li>
                    <li><span class="check">&#10003;</span> Product management</li>
                    <li><span class="check">&#10003;</span> Payment gateway integration</li>
                    <li><span class="check">&#10003;</span> Inventory management</li>
                    <li><span class="check">&#10003;</span> Order tracking system</li>
                    <li><span class="check">&#10003;</span> SEO & analytics setup</li>
                    <li><span class="check">&#10003;</span> 6 months free support</li>
                </ul>
                <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-outline" style="width:100%; justify-content:center;">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section bg-gray" aria-labelledby="pricing-faq-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">FAQs</span>
            <h2 id="pricing-faq-heading">Pricing Questions</h2>
        </div>
        <div class="faq-list">
            <?php
            $faqs = array(
                array(
                    'q' => 'Is the ad spend included in the management fee?',
                    'a' => 'No, ad spend is separate and billed directly to you by Google/Microsoft. Our pricing covers management, optimization, reporting, and strategy. This ensures full transparency&mdash;you own your accounts and data.',
                ),
                array(
                    'q' => 'Are there any setup fees?',
                    'a' => 'For PPC management, there\'s a one-time setup fee of &#8377;10,000 for the Starter plan and &#8377;15,000 for Growth/Enterprise plans. This covers account audit, strategy development, campaign build, and tracking setup.',
                ),
                array(
                    'q' => 'What\'s the minimum contract period?',
                    'a' => 'We recommend a minimum 3-month commitment for PPC and 6 months for SEO to see meaningful results. However, we offer month-to-month plans for clients who prefer flexibility (at slightly higher rates).',
                ),
                array(
                    'q' => 'Can I upgrade or downgrade my plan?',
                    'a' => 'Absolutely! You can upgrade anytime. Downgrades can be made at the end of any billing cycle with 15 days notice. We\'ll help you choose the right plan as your business needs evolve.',
                ),
                array(
                    'q' => 'Do you offer custom packages?',
                    'a' => 'Yes! If our standard packages don\'t fit your needs, we\'ll create a custom proposal based on your specific requirements, goals, and budget. Contact us for a personalized quote.',
                ),
            );

            foreach ($faqs as $faq) :
            ?>
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="faq-question" itemprop="name"><?php echo $faq['q']; ?> <span class="icon">+</span></div>
                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text"><?php echo $faq['a']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Not Sure Which Plan Is Right for You?</h2>
        <p>Let's discuss your goals and budget. We'll recommend the perfect plan for your business.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white">Get Personalized Recommendation &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
