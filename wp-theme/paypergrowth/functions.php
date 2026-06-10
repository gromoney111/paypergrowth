<?php
/**
 * PayPerGrowth Theme Functions
 *
 * @package PayPerGrowth
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('PAYPERGROWTH_VERSION', '1.0.0');
define('PAYPERGROWTH_DIR', get_template_directory());
define('PAYPERGROWTH_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function paypergrowth_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Custom image sizes
    add_image_size('hero-image', 1200, 800, true);
    add_image_size('service-card', 600, 450, true);
    add_image_size('team-avatar', 200, 200, true);
    add_image_size('case-study', 800, 400, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary'   => esc_html__('Primary Menu', 'paypergrowth'),
        'footer'    => esc_html__('Footer Menu', 'paypergrowth'),
    ));

    // HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Custom logo
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Editor styles
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');

    // Responsive embeds
    add_theme_support('responsive-embeds');

    // Wide alignment
    add_theme_support('align-wide');

    // WooCommerce support (if needed)
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'paypergrowth_setup');

/**
 * Enqueue Scripts and Styles
 */
function paypergrowth_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'paypergrowth-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'paypergrowth-style',
        get_stylesheet_uri(),
        array('paypergrowth-google-fonts'),
        PAYPERGROWTH_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'paypergrowth-main',
        PAYPERGROWTH_URI . '/assets/js/main.js',
        array(),
        PAYPERGROWTH_VERSION,
        true
    );

    // Localize script for AJAX
    wp_localize_script('paypergrowth-main', 'paypergrowth_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('paypergrowth_nonce'),
    ));

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'paypergrowth_scripts');

/**
 * Google Tag Manager - Head Script
 */
function paypergrowth_gtm_head() {
    ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M6FPT4LF');</script>
    <!-- End Google Tag Manager -->
    <?php
}
add_action('wp_head', 'paypergrowth_gtm_head', 1);

/**
 * Google Tag Manager - Body noscript
 */
function paypergrowth_gtm_body() {
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6FPT4LF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
}
add_action('wp_body_open', 'paypergrowth_gtm_body', 1);

/**
 * Google Analytics (gtag.js)
 */
function paypergrowth_google_analytics() {
    ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-00X84FLPB5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-00X84FLPB5');
    </script>
    <?php
}
add_action('wp_head', 'paypergrowth_google_analytics', 2);

/**
 * Google Search Console Verification (add your verification meta tag)
 */
function paypergrowth_search_console_verification() {
    ?>
    <!-- Google Search Console verification - Replace YOUR_VERIFICATION_CODE with actual code -->
    <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE" />
    <?php
}
add_action('wp_head', 'paypergrowth_search_console_verification', 3);

/**
 * SEO: Add comprehensive meta tags
 * Follows latest Google SEO guidelines (2024-2026)
 */
function paypergrowth_seo_meta_tags() {
    global $post;

    // Default values
    $site_name = get_bloginfo('name');
    $site_desc = get_bloginfo('description');
    $site_url = home_url('/');

    if (is_singular()) {
        $title = get_the_title();
        $description = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30, '...');
        $url = get_permalink();
        $image = get_the_post_thumbnail_url($post->ID, 'large');
    } elseif (is_front_page()) {
        $title = $site_name . ' - #1 Paid Marketing Agency in India';
        $description = 'PayPerGrowth - India\'s leading paid marketing agency specializing in Google Ads, Bing Ads, digital marketing, web development and design services.';
        $url = $site_url;
        $image = PAYPERGROWTH_URI . '/assets/images/og-image.jpg';
    } else {
        $title = wp_title('', false);
        $description = $site_desc;
        $url = home_url(add_query_arg(array()));
        $image = PAYPERGROWTH_URI . '/assets/images/og-image.jpg';
    }

    $description = wp_strip_all_tags($description);
    ?>
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo esc_attr($description); ?>" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <link rel="canonical" href="<?php echo esc_url($url); ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo esc_url($url); ?>" />
    <meta property="og:title" content="<?php echo esc_attr($title); ?>" />
    <meta property="og:description" content="<?php echo esc_attr($description); ?>" />
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>" />
    <?php if ($image) : ?>
    <meta property="og:image" content="<?php echo esc_url($image); ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <?php endif; ?>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="<?php echo esc_url($url); ?>" />
    <meta name="twitter:title" content="<?php echo esc_attr($title); ?>" />
    <meta name="twitter:description" content="<?php echo esc_attr($description); ?>" />
    <?php if ($image) : ?>
    <meta name="twitter:image" content="<?php echo esc_url($image); ?>" />
    <?php endif; ?>

    <!-- Additional SEO signals -->
    <meta name="author" content="PayPerGrowth" />
    <meta name="geo.region" content="IN-MH" />
    <meta name="geo.placename" content="Mumbai" />
    <?php
}
add_action('wp_head', 'paypergrowth_seo_meta_tags', 5);

/**
 * Schema.org Structured Data (JSON-LD) - Latest Google format
 */
function paypergrowth_schema_markup() {
    $site_url = home_url('/');
    $site_name = get_bloginfo('name');

    // Organization Schema
    $schema_org = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'Organization',
        'name'        => 'PayPerGrowth',
        'alternateName' => 'PayPerGrowth Digital Pvt. Ltd.',
        'url'         => $site_url,
        'logo'        => PAYPERGROWTH_URI . '/assets/images/logo.png',
        'description' => 'India\'s trusted paid marketing agency delivering measurable ROI through Google Ads, Bing Ads, and digital marketing strategies.',
        'foundingDate' => '2016',
        'numberOfEmployees' => array(
            '@type' => 'QuantitativeValue',
            'minValue' => 50,
        ),
        'address'     => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => '5th Floor, Business Hub Tower, Andheri East',
            'addressLocality' => 'Mumbai',
            'addressRegion'   => 'Maharashtra',
            'postalCode'      => '400069',
            'addressCountry'  => 'IN',
        ),
        'contactPoint' => array(
            '@type'       => 'ContactPoint',
            'telephone'   => '+91-9876543210',
            'contactType' => 'customer service',
            'email'       => 'hello@paypergrowth.com',
            'availableLanguage' => array('English', 'Hindi'),
            'areaServed'  => 'IN',
        ),
        'sameAs' => array(
            'https://www.facebook.com/paypergrowth',
            'https://www.linkedin.com/company/paypergrowth',
            'https://www.instagram.com/paypergrowth',
            'https://twitter.com/paypergrowth',
        ),
    );

    echo '<script type="application/ld+json">' . wp_json_encode($schema_org, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";

    // Website Schema with SearchAction
    $schema_website = array(
        '@context' => 'https://schema.org',
        '@type'    => 'WebSite',
        'name'     => $site_name,
        'url'      => $site_url,
        'potentialAction' => array(
            '@type'       => 'SearchAction',
            'target'      => array(
                '@type'        => 'EntryPoint',
                'urlTemplate'  => $site_url . '?s={search_term_string}',
            ),
            'query-input' => 'required name=search_term_string',
        ),
    );

    echo '<script type="application/ld+json">' . wp_json_encode($schema_website, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";

    // BreadcrumbList Schema for inner pages
    if (!is_front_page()) {
        $breadcrumbs = array(
            '@context' => 'https://schema.org',
            '@type'    => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type'    => 'ListItem',
                    'position' => 1,
                    'name'     => 'Home',
                    'item'     => $site_url,
                ),
            ),
        );

        if (is_singular()) {
            $breadcrumbs['itemListElement'][] = array(
                '@type'    => 'ListItem',
                'position' => 2,
                'name'     => get_the_title(),
                'item'     => get_permalink(),
            );
        }

        echo '<script type="application/ld+json">' . wp_json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }

    // LocalBusiness Schema
    $local_business = array(
        '@context' => 'https://schema.org',
        '@type'    => 'ProfessionalService',
        'name'     => 'PayPerGrowth',
        'image'    => PAYPERGROWTH_URI . '/assets/images/logo.png',
        'url'      => $site_url,
        'telephone' => '+91-9876543210',
        'email'    => 'hello@paypergrowth.com',
        'priceRange' => '₹₹₹',
        'address'  => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => '5th Floor, Business Hub Tower, Andheri East',
            'addressLocality' => 'Mumbai',
            'addressRegion'   => 'Maharashtra',
            'postalCode'      => '400069',
            'addressCountry'  => 'IN',
        ),
        'openingHoursSpecification' => array(
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
            'opens'     => '09:00',
            'closes'    => '19:00',
        ),
        'aggregateRating' => array(
            '@type'       => 'AggregateRating',
            'ratingValue' => '4.9',
            'reviewCount' => '127',
        ),
    );

    echo '<script type="application/ld+json">' . wp_json_encode($local_business, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
add_action('wp_head', 'paypergrowth_schema_markup', 10);

/**
 * Performance: Add preconnect for external resources
 */
function paypergrowth_resource_hints($urls, $relation_type) {
    if ($relation_type === 'preconnect') {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => true,
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => true,
        );
        $urls[] = array(
            'href' => 'https://www.googletagmanager.com',
        );
        $urls[] = array(
            'href' => 'https://www.google-analytics.com',
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'paypergrowth_resource_hints', 10, 2);

/**
 * Performance: Add defer/async to scripts
 */
function paypergrowth_defer_scripts($tag, $handle) {
    $defer_scripts = array('paypergrowth-main');
    $async_scripts = array();

    if (in_array($handle, $defer_scripts)) {
        return str_replace(' src', ' defer src', $tag);
    }

    if (in_array($handle, $async_scripts)) {
        return str_replace(' src', ' async src', $tag);
    }

    return $tag;
}
add_filter('script_loader_tag', 'paypergrowth_defer_scripts', 10, 2);

/**
 * SEO: Optimize output - Remove unnecessary WordPress head tags
 */
function paypergrowth_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_resource_hints', 2);
}
add_action('init', 'paypergrowth_cleanup_head');

/**
 * Register Widget Areas
 */
function paypergrowth_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 1', 'paypergrowth'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Footer widget area 1', 'paypergrowth'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 2', 'paypergrowth'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Footer widget area 2', 'paypergrowth'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'paypergrowth'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Blog sidebar', 'paypergrowth'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'paypergrowth_widgets_init');

/**
 * Custom Theme Options via Customizer
 */
function paypergrowth_customize_register($wp_customize) {
    // Contact Info Section
    $wp_customize->add_section('paypergrowth_contact', array(
        'title'    => __('Contact Information', 'paypergrowth'),
        'priority' => 30,
    ));

    // Phone
    $wp_customize->add_setting('paypergrowth_phone', array(
        'default'           => '+91 98765 43210',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('paypergrowth_phone', array(
        'label'   => __('Phone Number', 'paypergrowth'),
        'section' => 'paypergrowth_contact',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('paypergrowth_email', array(
        'default'           => 'hello@paypergrowth.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('paypergrowth_email', array(
        'label'   => __('Email Address', 'paypergrowth'),
        'section' => 'paypergrowth_contact',
        'type'    => 'email',
    ));

    // Address
    $wp_customize->add_setting('paypergrowth_address', array(
        'default'           => '5th Floor, Business Hub Tower, Andheri East, Mumbai 400069, Maharashtra, India',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('paypergrowth_address', array(
        'label'   => __('Address', 'paypergrowth'),
        'section' => 'paypergrowth_contact',
        'type'    => 'textarea',
    ));

    // Social Links Section
    $wp_customize->add_section('paypergrowth_social', array(
        'title'    => __('Social Media Links', 'paypergrowth'),
        'priority' => 35,
    ));

    $social_links = array(
        'facebook'  => 'Facebook URL',
        'twitter'   => 'Twitter/X URL',
        'linkedin'  => 'LinkedIn URL',
        'instagram' => 'Instagram URL',
        'youtube'   => 'YouTube URL',
    );

    foreach ($social_links as $key => $label) {
        $wp_customize->add_setting("paypergrowth_social_{$key}", array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("paypergrowth_social_{$key}", array(
            'label'   => __($label, 'paypergrowth'),
            'section' => 'paypergrowth_social',
            'type'    => 'url',
        ));
    }

    // Analytics Section
    $wp_customize->add_section('paypergrowth_analytics', array(
        'title'       => __('Analytics & Tracking', 'paypergrowth'),
        'priority'    => 40,
        'description' => __('Configure Google Analytics, GTM, and Search Console.', 'paypergrowth'),
    ));

    // GTM ID
    $wp_customize->add_setting('paypergrowth_gtm_id', array(
        'default'           => 'GTM-M6FPT4LF',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('paypergrowth_gtm_id', array(
        'label'   => __('GTM Container ID', 'paypergrowth'),
        'section' => 'paypergrowth_analytics',
        'type'    => 'text',
    ));

    // GA4 Measurement ID
    $wp_customize->add_setting('paypergrowth_ga4_id', array(
        'default'           => 'G-00X84FLPB5',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('paypergrowth_ga4_id', array(
        'label'   => __('GA4 Measurement ID', 'paypergrowth'),
        'section' => 'paypergrowth_analytics',
        'type'    => 'text',
    ));

    // Search Console Verification
    $wp_customize->add_setting('paypergrowth_gsc_verification', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('paypergrowth_gsc_verification', array(
        'label'       => __('Google Search Console Verification Code', 'paypergrowth'),
        'section'     => 'paypergrowth_analytics',
        'type'        => 'text',
        'description' => __('Just the content value from the meta tag.', 'paypergrowth'),
    ));
}
add_action('customize_register', 'paypergrowth_customize_register');

/**
 * Generate XML Sitemap hints (WordPress has built-in sitemap since 5.5)
 * Ensure all pages are properly indexed
 */
function paypergrowth_sitemap_providers($provider, $name) {
    return $provider;
}
add_filter('wp_sitemaps_add_provider', 'paypergrowth_sitemap_providers', 10, 2);

/**
 * SEO: Add noindex for specific pages
 */
function paypergrowth_noindex_pages() {
    if (is_search() || is_404()) {
        echo '<meta name="robots" content="noindex, follow" />' . "\n";
    }
}
add_action('wp_head', 'paypergrowth_noindex_pages', 4);

/**
 * Contact Form AJAX Handler
 */
function paypergrowth_contact_form_handler() {
    check_ajax_referer('paypergrowth_nonce', 'nonce');

    $first_name = sanitize_text_field($_POST['firstName'] ?? '');
    $last_name = sanitize_text_field($_POST['lastName'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $company = sanitize_text_field($_POST['company'] ?? '');
    $service = sanitize_text_field($_POST['service'] ?? '');
    $budget = sanitize_text_field($_POST['budget'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($first_name) || empty($email) || empty($message)) {
        wp_send_json_error(array('message' => 'Required fields are missing.'));
    }

    // Send email notification
    $to = get_option('admin_email');
    $subject = sprintf('[PayPerGrowth] New inquiry from %s %s', $first_name, $last_name);
    $body = sprintf(
        "Name: %s %s\nEmail: %s\nPhone: %s\nCompany: %s\nService: %s\nBudget: %s\n\nMessage:\n%s",
        $first_name, $last_name, $email, $phone, $company, $service, $budget, $message
    );
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $email,
    );

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Thank you! We\'ll get back to you within 24 hours.'));
    } else {
        wp_send_json_error(array('message' => 'Something went wrong. Please try again.'));
    }
}
add_action('wp_ajax_paypergrowth_contact', 'paypergrowth_contact_form_handler');
add_action('wp_ajax_nopriv_paypergrowth_contact', 'paypergrowth_contact_form_handler');

/**
 * SEO: Custom excerpt length
 */
function paypergrowth_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'paypergrowth_excerpt_length');

/**
 * SEO: Custom excerpt more
 */
function paypergrowth_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'paypergrowth_excerpt_more');

/**
 * Performance: Disable emojis
 */
function paypergrowth_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'paypergrowth_disable_emojis');

/**
 * Security: Remove WordPress version from header
 */
function paypergrowth_remove_version() {
    return '';
}
add_filter('the_generator', 'paypergrowth_remove_version');

/**
 * Include additional theme files
 */
require_once PAYPERGROWTH_DIR . '/inc/custom-post-types.php';
require_once PAYPERGROWTH_DIR . '/inc/theme-helpers.php';
