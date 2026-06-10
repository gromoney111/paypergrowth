<?php
/**
 * Template Name: Contact
 *
 * @package PayPerGrowth
 */

get_header();
$contact = paypergrowth_get_contact_info();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Contact Us</span>
        <h1>Let's Grow Your Business Together</h1>
        <p>Get a free marketing audit and discover how we can help you achieve your growth goals. No obligation, no pressure&mdash;just expert insights.</p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="fade-in">
                <h2>Send Us a Message</h2>
                <p style="color:var(--gray-600); margin-bottom:30px;">Fill out the form below and our team will get back to you within 24 hours.</p>
                <form id="contactForm" class="contact-form" method="post" novalidate>
                    <?php wp_nonce_field('paypergrowth_nonce', 'contact_nonce'); ?>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" name="firstName" placeholder="John" required aria-required="true">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" placeholder="Doe" required aria-required="true">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" placeholder="john@company.com" required aria-required="true">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210" required aria-required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company" placeholder="Your Company">
                    </div>
                    <div class="form-group">
                        <label for="service">Service Interested In *</label>
                        <select id="service" name="service" required aria-required="true">
                            <option value="">Select a service</option>
                            <option value="google-ads">Google Ads Management</option>
                            <option value="bing-ads">Bing Ads Management</option>
                            <option value="digital-marketing">Digital Marketing</option>
                            <option value="web-development">Web Development & Design</option>
                            <option value="multiple">Multiple Services</option>
                            <option value="audit">Free Marketing Audit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="budget">Monthly Budget Range</label>
                        <select id="budget" name="budget">
                            <option value="">Select budget range</option>
                            <option value="25k-50k">&#8377;25,000 - &#8377;50,000</option>
                            <option value="50k-1l">&#8377;50,000 - &#8377;1,00,000</option>
                            <option value="1l-3l">&#8377;1,00,000 - &#8377;3,00,000</option>
                            <option value="3l-5l">&#8377;3,00,000 - &#8377;5,00,000</option>
                            <option value="5l+">&#8377;5,00,000+</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us about your business goals and how we can help..." required aria-required="true"></textarea>
                    </div>
                    <div id="form-message" style="display:none; padding: 15px; border-radius: var(--radius); margin-bottom: 15px;"></div>
                    <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">Send Message &rarr;</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="fade-in">
                <h2>Get In Touch</h2>
                <p style="color:var(--gray-600); margin-bottom:30px;">Prefer to reach out directly? Here's how you can contact us.</p>

                <div class="contact-info-card">
                    <div class="icon" aria-hidden="true">&#128231;</div>
                    <h4>Email Us</h4>
                    <p><a href="mailto:<?php echo esc_attr($contact['email']); ?>" style="color:var(--primary);"><?php echo esc_html($contact['email']); ?></a></p>
                    <p>We respond within 24 hours</p>
                </div>

                <div class="contact-info-card">
                    <div class="icon" aria-hidden="true">&#128222;</div>
                    <h4>Call Us</h4>
                    <p><a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $contact['phone'])); ?>" style="color:var(--primary);"><?php echo esc_html($contact['phone']); ?></a></p>
                    <p>Mon-Fri, 9:00 AM - 7:00 PM IST</p>
                </div>

                <div class="contact-info-card">
                    <div class="icon" aria-hidden="true">&#128205;</div>
                    <h4>Visit Our Office</h4>
                    <p>PayPerGrowth Digital Pvt. Ltd.</p>
                    <p><?php echo nl2br(esc_html($contact['address'])); ?></p>
                </div>

                <div class="contact-info-card">
                    <div class="icon" aria-hidden="true">&#128172;</div>
                    <h4>WhatsApp</h4>
                    <p><a href="https://wa.me/919876543210" style="color:var(--primary);" target="_blank" rel="noopener noreferrer">Chat with us on WhatsApp</a></p>
                    <p>Quick responses during business hours</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Not Sure Where to Start?</h2>
        <p>Book a free 30-minute strategy call with our experts. No commitment required.</p>
        <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $contact['phone'])); ?>" class="btn btn-white">Call Us Now &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
