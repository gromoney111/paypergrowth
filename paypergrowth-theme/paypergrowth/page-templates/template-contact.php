<?php
/**
 * Template Name: Contact
 * @package PayPerGrowth
 */
get_header();
$contact = ppg_get_contact(); ?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Contact Us</span>
        <h1>Let's Grow Your Business Together</h1>
        <p>Get a free marketing audit and discover how we can help you achieve your growth goals.</p>
        <?php ppg_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-grid">
            <div class="fade-in">
                <h2>Send Us a Message</h2>
                <p style="color:var(--gray-600);margin-bottom:30px;">Fill out the form and our team will get back to you within 24 hours.</p>
                <form id="contactForm" class="contact-form" method="post" novalidate>
                    <div class="form-row">
                        <div class="form-group"><label for="firstName">First Name *</label><input type="text" id="firstName" name="firstName" required></div>
                        <div class="form-group"><label for="lastName">Last Name *</label><input type="text" id="lastName" name="lastName" required></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label for="email">Email *</label><input type="email" id="email" name="email" required></div>
                        <div class="form-group"><label for="phone">Phone *</label><input type="tel" id="phone" name="phone" required></div>
                    </div>
                    <div class="form-group"><label for="company">Company</label><input type="text" id="company" name="company"></div>
                    <div class="form-group">
                        <label for="service">Service Interested In *</label>
                        <select id="service" name="service" required>
                            <option value="">Select a service</option>
                            <option value="google-ads">Google Ads Management</option>
                            <option value="bing-ads">Bing Ads Management</option>
                            <option value="digital-marketing">Digital Marketing</option>
                            <option value="web-development">Web Development & Design</option>
                            <option value="audit">Free Marketing Audit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="budget">Monthly Budget</label>
                        <select id="budget" name="budget">
                            <option value="">Select budget</option>
                            <option value="25k-50k">&#8377;25K - &#8377;50K</option>
                            <option value="50k-1l">&#8377;50K - &#8377;1L</option>
                            <option value="1l-3l">&#8377;1L - &#8377;3L</option>
                            <option value="3l-5l">&#8377;3L - &#8377;5L</option>
                            <option value="5l+">&#8377;5L+</option>
                        </select>
                    </div>
                    <div class="form-group"><label for="message">Message *</label><textarea id="message" name="message" rows="5" required></textarea></div>
                    <div id="form-message" style="display:none;padding:15px;border-radius:var(--radius);margin-bottom:15px;"></div>
                    <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">Send Message &rarr;</button>
                </form>
            </div>
            <div class="fade-in">
                <h2>Get In Touch</h2>
                <p style="color:var(--gray-600);margin-bottom:30px;">Prefer to reach out directly?</p>
                <div class="contact-info-card"><div class="icon">&#128231;</div><h4>Email Us</h4><p><a href="mailto:<?php echo esc_attr($contact['email']); ?>" style="color:var(--primary);"><?php echo esc_html($contact['email']); ?></a></p></div>
                <div class="contact-info-card"><div class="icon">&#128222;</div><h4>Call Us</h4><p><a href="tel:<?php echo esc_attr(preg_replace('/\s+/','',$contact['phone'])); ?>" style="color:var(--primary);"><?php echo esc_html($contact['phone']); ?></a></p><p>Mon-Fri, 9 AM - 7 PM IST</p></div>
                <div class="contact-info-card"><div class="icon">&#128205;</div><h4>Visit Us</h4><p><?php echo esc_html($contact['address']); ?></p></div>
                <div class="contact-info-card"><div class="icon">&#128172;</div><h4>WhatsApp</h4><p><a href="https://wa.me/<?php echo esc_attr($contact['whatsapp']); ?>" style="color:var(--primary);" target="_blank" rel="noopener">Chat on WhatsApp</a></p></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
