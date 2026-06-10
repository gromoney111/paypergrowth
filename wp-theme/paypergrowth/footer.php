<?php
/**
 * Footer Template
 *
 * @package PayPerGrowth
 */

$contact = paypergrowth_get_contact_info();
$social = paypergrowth_get_social_links();
?>

<!-- Footer -->
<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="<?php bloginfo('name'); ?>">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="logo-icon">P</div>
                        Pay<span>Per</span>Growth
                    <?php endif; ?>
                </a>
                <p>India's trusted paid marketing agency helping businesses grow through data-driven advertising strategies and measurable results.</p>
                <div class="footer-social">
                    <?php if (!empty($social['facebook']) && $social['facebook'] !== '#') : ?>
                        <a href="<?php echo esc_url($social['facebook']); ?>" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><?php echo paypergrowth_get_svg_icon('facebook'); ?></a>
                    <?php else : ?>
                        <a href="#" aria-label="Facebook">FB</a>
                    <?php endif; ?>

                    <?php if (!empty($social['twitter']) && $social['twitter'] !== '#') : ?>
                        <a href="<?php echo esc_url($social['twitter']); ?>" aria-label="Twitter" target="_blank" rel="noopener noreferrer"><?php echo paypergrowth_get_svg_icon('twitter'); ?></a>
                    <?php else : ?>
                        <a href="#" aria-label="Twitter">TW</a>
                    <?php endif; ?>

                    <?php if (!empty($social['linkedin']) && $social['linkedin'] !== '#') : ?>
                        <a href="<?php echo esc_url($social['linkedin']); ?>" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><?php echo paypergrowth_get_svg_icon('linkedin'); ?></a>
                    <?php else : ?>
                        <a href="#" aria-label="LinkedIn">LI</a>
                    <?php endif; ?>

                    <?php if (!empty($social['instagram']) && $social['instagram'] !== '#') : ?>
                        <a href="<?php echo esc_url($social['instagram']); ?>" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><?php echo paypergrowth_get_svg_icon('instagram'); ?></a>
                    <?php else : ?>
                        <a href="#" aria-label="Instagram">IG</a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="footer-col">
                <h4>Services</h4>
                <?php
                $footer_services = array(
                    'google-ads'        => 'Google Ads',
                    'bing-ads'          => 'Bing Ads',
                    'digital-marketing' => 'Digital Marketing',
                    'web-development'   => 'Web Development',
                );
                foreach ($footer_services as $slug => $name) :
                    $page = get_page_by_path($slug);
                    $url = $page ? get_permalink($page) : '#';
                ?>
                    <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($name); ?></a>
                <?php endforeach; ?>
            </div>

            <div class="footer-col">
                <h4>Company</h4>
                <?php
                $footer_company = array(
                    'about-us'     => 'About Us',
                    'case-studies' => 'Case Studies',
                    'pricing'      => 'Pricing',
                    'contact'      => 'Contact Us',
                );
                foreach ($footer_company as $slug => $name) :
                    $page = get_page_by_path($slug);
                    $url = $page ? get_permalink($page) : '#';
                ?>
                    <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($name); ?></a>
                <?php endforeach; ?>
            </div>

            <div class="footer-col">
                <h4>Contact</h4>
                <a href="mailto:<?php echo esc_attr($contact['email']); ?>"><?php echo esc_html($contact['email']); ?></a>
                <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $contact['phone'])); ?>"><?php echo esc_html($contact['phone']); ?></a>
                <a href="#">Mumbai, Maharashtra, India</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            <div class="footer-bottom-links">
                <?php
                $policy_pages = array(
                    'privacy-policy'    => 'Privacy Policy',
                    'terms-of-service'  => 'Terms of Service',
                    'refund-policy'     => 'Refund Policy',
                );
                foreach ($policy_pages as $slug => $name) :
                    $page = get_page_by_path($slug);
                    $url = $page ? get_permalink($page) : '#';
                ?>
                    <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($name); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
