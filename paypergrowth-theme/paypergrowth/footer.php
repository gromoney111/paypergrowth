<?php $contact = ppg_get_contact(); ?>

<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                    <?php if (has_custom_logo()) : the_custom_logo(); else : ?>
                        <div class="logo-icon">P</div>Pay<span>Per</span>Growth
                    <?php endif; ?>
                </a>
                <p>India's trusted paid marketing agency helping businesses grow through data-driven advertising strategies and measurable results.</p>
                <?php ppg_social_links(); ?>
            </div>

            <div class="footer-col">
                <h4>Services</h4>
                <a href="<?php echo home_url('/google-ads/'); ?>">Google Ads</a>
                <a href="<?php echo home_url('/bing-ads/'); ?>">Bing Ads</a>
                <a href="<?php echo home_url('/digital-marketing/'); ?>">Digital Marketing</a>
                <a href="<?php echo home_url('/web-development/'); ?>">Web Development</a>
            </div>

            <div class="footer-col">
                <h4>Company</h4>
                <a href="<?php echo home_url('/about-us/'); ?>">About Us</a>
                <a href="<?php echo home_url('/case-studies/'); ?>">Case Studies</a>
                <a href="<?php echo home_url('/pricing/'); ?>">Pricing</a>
                <a href="<?php echo home_url('/contact/'); ?>">Contact Us</a>
            </div>

            <div class="footer-col">
                <h4>Contact</h4>
                <a href="mailto:<?php echo esc_attr($contact['email']); ?>"><?php echo esc_html($contact['email']); ?></a>
                <a href="tel:<?php echo esc_attr(preg_replace('/\s+/','',$contact['phone'])); ?>"><?php echo esc_html($contact['phone']); ?></a>
                <a href="#">Mumbai, Maharashtra, India</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="<?php echo home_url('/privacy-policy/'); ?>">Privacy Policy</a>
                <a href="<?php echo home_url('/terms-of-service/'); ?>">Terms of Service</a>
                <a href="<?php echo home_url('/refund-policy/'); ?>">Refund Policy</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
