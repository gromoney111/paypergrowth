<?php
/**
 * Template Name: Case Studies
 * @package PayPerGrowth
 */
get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Case Studies</span>
        <h1>Real Results for Real Businesses</h1>
        <p>See how we've helped Indian businesses achieve exceptional growth through strategic paid marketing.</p>
        <?php ppg_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="case-studies-grid">
            <?php
            $cases = array(
                array('linear-gradient(135deg,#1a56db,#3b82f6)','&#128722;','E-Commerce','ShopEase: 280% Revenue Growth','Scaled from &#8377;5L to &#8377;19L monthly revenue through Google Shopping campaigns.',array('280%','Revenue'),array('4.2x','ROAS'),array('-45%','CPA')),
                array('linear-gradient(135deg,#059669,#10b981)','&#127891;','EdTech','EduLearn: 5x Lead Growth','Multi-channel campaigns across Google and Bing for national expansion.',array('5x','Leads'),array('&#8377;85','CPL'),array('320%','Enrollment')),
                array('linear-gradient(135deg,#dc2626,#f97316)','&#127973;','Healthcare','MedCare: Dominating Local Search','Multi-location hospital from page 3 to position 1 for 150+ keywords.',array('150+','#1 Rankings'),array('400%','Traffic'),array('3x','Appointments')),
                array('linear-gradient(135deg,#7c3aed,#a855f7)','&#128188;','B2B SaaS','CloudStack: 60% Lower CPA','LinkedIn targeting on Bing for high-quality enterprise leads.',array('-60%','CPA'),array('200+','Leads'),array('&#8377;2.5Cr','Pipeline')),
                array('linear-gradient(135deg,#0891b2,#06b6d4)','&#127968;','Real Estate','HomeVista: 85% CPI Reduction','Record-low inquiry costs for premium real estate developer.',array('-85%','CPI'),array('500+','Leads'),array('12x','ROAS')),
                array('linear-gradient(135deg,#ea580c,#f59e0b)','&#127829;','Food & Beverage','TastyBites: Digital Transformation','Website redesign + marketing grew online orders by 450%.',array('450%','Orders'),array('3.8x','ROAS'),array('90%','Faster')),
            );
            foreach ($cases as $c) : ?>
                <div class="case-card fade-in">
                    <div class="case-card-image" style="background:<?php echo $c[0]; ?>;"><?php echo $c[1]; ?></div>
                    <div class="case-card-body">
                        <span class="tag"><?php echo $c[2]; ?></span>
                        <h3><?php echo esc_html($c[3]); ?></h3>
                        <p><?php echo $c[4]; ?></p>
                        <div class="case-results">
                            <div class="result"><h4><?php echo $c[5][0]; ?></h4><span><?php echo $c[5][1]; ?></span></div>
                            <div class="result"><h4><?php echo $c[6][0]; ?></h4><span><?php echo $c[6][1]; ?></span></div>
                            <div class="result"><h4><?php echo $c[7][0]; ?></h4><span><?php echo $c[7][1]; ?></span></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Want Results Like These?</h2>
        <p>Let's create a strategy that delivers measurable growth for your business.</p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">Start Your Growth Story &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
