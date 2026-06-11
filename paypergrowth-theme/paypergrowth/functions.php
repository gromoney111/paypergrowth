<?php
/**
 * PayPerGrowth Theme Functions
 * @package PayPerGrowth
 * @version 1.0.0
 */

if (!defined('ABSPATH')) exit;

define('PPG_VERSION', '1.0.0');
define('PPG_DIR', get_template_directory());
define('PPG_URI', get_template_directory_uri());

/* ===== THEME SETUP ===== */
function ppg_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
    add_theme_support('custom-logo', array('height'=>80,'width'=>250,'flex-height'=>true,'flex-width'=>true));
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_editor_style('assets/css/editor-style.css');

    add_image_size('hero-image', 1200, 800, true);
    add_image_size('service-card', 600, 450, true);
    add_image_size('case-study', 800, 400, true);

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'paypergrowth'),
        'footer'  => __('Footer Menu', 'paypergrowth'),
    ));
}
add_action('after_setup_theme', 'ppg_setup');

/* ===== ENQUEUE SCRIPTS & STYLES ===== */
function ppg_scripts() {
    wp_enqueue_style('ppg-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap', array(), null);
    wp_enqueue_style('ppg-style', get_stylesheet_uri(), array('ppg-google-fonts'), PPG_VERSION);
    wp_enqueue_script('ppg-main', PPG_URI . '/assets/js/main.js', array(), PPG_VERSION, true);
    wp_localize_script('ppg-main', 'ppg_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('ppg_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'ppg_scripts');

/* ===== GOOGLE TAG MANAGER (HEAD) ===== */
function ppg_gtm_head() { ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6FPT4LF');</script>
<!-- End Google Tag Manager -->
<?php }
add_action('wp_head', 'ppg_gtm_head', 1);

/* ===== GOOGLE TAG MANAGER (BODY) ===== */
function ppg_gtm_body() { ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6FPT4LF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php }
add_action('wp_body_open', 'ppg_gtm_body', 1);

/* ===== GOOGLE ANALYTICS 4 (gtag.js) ===== */
function ppg_google_analytics() { ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-00X84FLPB5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-00X84FLPB5');
</script>
<?php }
add_action('wp_head', 'ppg_google_analytics', 2);

/* ===== GOOGLE SEARCH CONSOLE VERIFICATION ===== */
function ppg_search_console() {
    $code = get_theme_mod('ppg_gsc_code', '');
    if ($code) {
        echo '<meta name="google-site-verification" content="' . esc_attr($code) . '" />' . "\n";
    }
}
add_action('wp_head', 'ppg_search_console', 3);

/* ===== SEO META TAGS ===== */
function ppg_seo_meta() {
    global $post;
    $site_name = get_bloginfo('name');
    $site_url = home_url('/');

    if (is_singular() && isset($post)) {
        $title = get_the_title();
        $desc = has_excerpt() ? wp_strip_all_tags(get_the_excerpt()) : wp_trim_words(wp_strip_all_tags(get_the_content()), 30);
        $url = get_permalink();
        $image = get_the_post_thumbnail_url($post->ID, 'large');
    } elseif (is_front_page()) {
        $title = $site_name . ' - #1 Paid Marketing Agency in India';
        $desc = 'PayPerGrowth - India\'s leading paid marketing agency. Google Ads, Bing Ads, digital marketing, web development. 500+ clients, 3x+ ROAS.';
        $url = $site_url;
        $image = PPG_URI . '/assets/images/og-image.jpg';
    } else {
        $title = wp_title('', false) ?: $site_name;
        $desc = get_bloginfo('description');
        $url = home_url(add_query_arg(array()));
        $image = PPG_URI . '/assets/images/og-image.jpg';
    }
    ?>
    <meta name="description" content="<?php echo esc_attr($desc); ?>" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <link rel="canonical" href="<?php echo esc_url($url); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo esc_url($url); ?>" />
    <meta property="og:title" content="<?php echo esc_attr($title); ?>" />
    <meta property="og:description" content="<?php echo esc_attr($desc); ?>" />
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>" />
    <?php if ($image) : ?><meta property="og:image" content="<?php echo esc_url($image); ?>" /><?php endif; ?>
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo esc_attr($title); ?>" />
    <meta name="twitter:description" content="<?php echo esc_attr($desc); ?>" />
    <?php if ($image) : ?><meta name="twitter:image" content="<?php echo esc_url($image); ?>" /><?php endif; ?>
    <?php
}
add_action('wp_head', 'ppg_seo_meta', 5);

/* ===== SCHEMA.ORG STRUCTURED DATA ===== */
function ppg_schema_markup() {
    $site_url = home_url('/');
    // Organization
    $org = array(
        '@context'=>'https://schema.org','@type'=>'Organization',
        'name'=>'PayPerGrowth','url'=>$site_url,
        'logo'=>PPG_URI.'/assets/images/logo.png',
        'description'=>'India\'s trusted paid marketing agency delivering measurable ROI through Google Ads, Bing Ads, and digital marketing.',
        'address'=>array('@type'=>'PostalAddress','addressLocality'=>'Mumbai','addressRegion'=>'Maharashtra','addressCountry'=>'IN'),
        'contactPoint'=>array('@type'=>'ContactPoint','telephone'=>'+91-9876543210','contactType'=>'customer service','email'=>'hello@paypergrowth.com'),
        'sameAs'=>array('https://www.facebook.com/paypergrowth','https://www.linkedin.com/company/paypergrowth','https://www.instagram.com/paypergrowth'),
    );
    echo '<script type="application/ld+json">' . wp_json_encode($org, JSON_UNESCAPED_SLASHES) . "</script>\n";

    // WebSite with SearchAction
    $ws = array(
        '@context'=>'https://schema.org','@type'=>'WebSite','name'=>get_bloginfo('name'),'url'=>$site_url,
        'potentialAction'=>array('@type'=>'SearchAction','target'=>array('@type'=>'EntryPoint','urlTemplate'=>$site_url.'?s={search_term_string}'),'query-input'=>'required name=search_term_string'),
    );
    echo '<script type="application/ld+json">' . wp_json_encode($ws, JSON_UNESCAPED_SLASHES) . "</script>\n";

    // LocalBusiness
    $lb = array(
        '@context'=>'https://schema.org','@type'=>'ProfessionalService','name'=>'PayPerGrowth','url'=>$site_url,
        'telephone'=>'+91-9876543210','email'=>'hello@paypergrowth.com','priceRange'=>'₹₹₹',
        'address'=>array('@type'=>'PostalAddress','streetAddress'=>'5th Floor, Business Hub Tower, Andheri East','addressLocality'=>'Mumbai','addressRegion'=>'Maharashtra','postalCode'=>'400069','addressCountry'=>'IN'),
        'openingHoursSpecification'=>array('@type'=>'OpeningHoursSpecification','dayOfWeek'=>array('Monday','Tuesday','Wednesday','Thursday','Friday'),'opens'=>'09:00','closes'=>'19:00'),
        'aggregateRating'=>array('@type'=>'AggregateRating','ratingValue'=>'4.9','reviewCount'=>'127'),
    );
    echo '<script type="application/ld+json">' . wp_json_encode($lb, JSON_UNESCAPED_SLASHES) . "</script>\n";

    // Breadcrumb for inner pages
    if (!is_front_page() && is_singular()) {
        $bc = array(
            '@context'=>'https://schema.org','@type'=>'BreadcrumbList',
            'itemListElement'=>array(
                array('@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$site_url),
                array('@type'=>'ListItem','position'=>2,'name'=>get_the_title(),'item'=>get_permalink()),
            ),
        );
        echo '<script type="application/ld+json">' . wp_json_encode($bc, JSON_UNESCAPED_SLASHES) . "</script>\n";
    }
}
add_action('wp_head', 'ppg_schema_markup', 10);

/* ===== NOINDEX FOR SEARCH/404 ===== */
function ppg_noindex() {
    if (is_search() || is_404()) echo '<meta name="robots" content="noindex, follow" />' . "\n";
}
add_action('wp_head', 'ppg_noindex', 4);

/* ===== PERFORMANCE ===== */
function ppg_resource_hints($urls, $relation) {
    if ($relation === 'preconnect') {
        $urls[] = array('href'=>'https://fonts.googleapis.com','crossorigin'=>true);
        $urls[] = array('href'=>'https://fonts.gstatic.com','crossorigin'=>true);
        $urls[] = array('href'=>'https://www.googletagmanager.com');
    }
    return $urls;
}
add_filter('wp_resource_hints', 'ppg_resource_hints', 10, 2);

function ppg_cleanup() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('init', 'ppg_cleanup');

/* ===== WIDGET AREAS ===== */
function ppg_widgets() {
    register_sidebar(array('name'=>'Footer 1','id'=>'footer-1','before_widget'=>'<div class="widget">','after_widget'=>'</div>','before_title'=>'<h4>','after_title'=>'</h4>'));
    register_sidebar(array('name'=>'Footer 2','id'=>'footer-2','before_widget'=>'<div class="widget">','after_widget'=>'</div>','before_title'=>'<h4>','after_title'=>'</h4>'));
    register_sidebar(array('name'=>'Sidebar','id'=>'sidebar-1','before_widget'=>'<div class="widget">','after_widget'=>'</div>','before_title'=>'<h4>','after_title'=>'</h4>'));
}
add_action('widgets_init', 'ppg_widgets');

/* ===== CUSTOMIZER ===== */
function ppg_customizer($wp_customize) {
    // Contact Section
    $wp_customize->add_section('ppg_contact', array('title'=>'Contact Info','priority'=>30));
    $fields = array(
        'ppg_phone'=>array('Phone','+91 98765 43210'),
        'ppg_email'=>array('Email','hello@paypergrowth.com'),
        'ppg_address'=>array('Address','5th Floor, Business Hub Tower, Andheri East, Mumbai 400069'),
        'ppg_whatsapp'=>array('WhatsApp Number','919876543210'),
    );
    foreach ($fields as $id => $f) {
        $wp_customize->add_setting($id, array('default'=>$f[1],'sanitize_callback'=>'sanitize_text_field'));
        $wp_customize->add_control($id, array('label'=>$f[0],'section'=>'ppg_contact','type'=>'text'));
    }

    // Social Section
    $wp_customize->add_section('ppg_social', array('title'=>'Social Links','priority'=>35));
    foreach (array('facebook','twitter','linkedin','instagram','youtube') as $s) {
        $wp_customize->add_setting("ppg_social_{$s}", array('default'=>'#','sanitize_callback'=>'esc_url_raw'));
        $wp_customize->add_control("ppg_social_{$s}", array('label'=>ucfirst($s).' URL','section'=>'ppg_social','type'=>'url'));
    }

    // Analytics Section
    $wp_customize->add_section('ppg_analytics', array('title'=>'Analytics & Tracking','priority'=>40));
    $wp_customize->add_setting('ppg_gsc_code', array('default'=>'','sanitize_callback'=>'sanitize_text_field'));
    $wp_customize->add_control('ppg_gsc_code', array('label'=>'Google Search Console Verification Code','section'=>'ppg_analytics','type'=>'text','description'=>'Paste the content value from GSC HTML tag verification.'));
}
add_action('customize_register', 'ppg_customizer');

/* ===== CONTACT FORM AJAX ===== */
function ppg_contact_handler() {
    check_ajax_referer('ppg_nonce', 'nonce');
    $name = sanitize_text_field($_POST['firstName']??'') . ' ' . sanitize_text_field($_POST['lastName']??'');
    $email = sanitize_email($_POST['email']??'');
    $phone = sanitize_text_field($_POST['phone']??'');
    $service = sanitize_text_field($_POST['service']??'');
    $message = sanitize_textarea_field($_POST['message']??'');

    if (empty(trim($name)) || empty($email) || empty($message)) {
        wp_send_json_error(array('message'=>'Please fill all required fields.'));
    }

    $to = get_option('admin_email');
    $subject = "[PayPerGrowth] New inquiry from {$name}";
    $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nService: {$service}\n\nMessage:\n{$message}";
    $headers = array('Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $email);

    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success(array('message'=>'Thank you! We\'ll get back to you within 24 hours.'));
    } else {
        wp_send_json_error(array('message'=>'Something went wrong. Please try again or email us directly.'));
    }
}
add_action('wp_ajax_ppg_contact', 'ppg_contact_handler');
add_action('wp_ajax_nopriv_ppg_contact', 'ppg_contact_handler');

/* ===== CUSTOM POST TYPES ===== */
function ppg_register_cpts() {
    register_post_type('case_study', array(
        'labels'=>array('name'=>'Case Studies','singular_name'=>'Case Study','add_new'=>'Add Case Study'),
        'public'=>true,'has_archive'=>true,'rewrite'=>array('slug'=>'case-studies'),
        'supports'=>array('title','editor','thumbnail','excerpt','custom-fields'),
        'menu_icon'=>'dashicons-analytics','show_in_rest'=>true,
    ));
    register_post_type('testimonial', array(
        'labels'=>array('name'=>'Testimonials','singular_name'=>'Testimonial','add_new'=>'Add Testimonial'),
        'public'=>true,'has_archive'=>false,'rewrite'=>array('slug'=>'testimonials'),
        'supports'=>array('title','editor','thumbnail','custom-fields'),
        'menu_icon'=>'dashicons-format-quote','show_in_rest'=>true,
    ));
    register_post_type('team_member', array(
        'labels'=>array('name'=>'Team','singular_name'=>'Team Member','add_new'=>'Add Member'),
        'public'=>true,'has_archive'=>false,'rewrite'=>array('slug'=>'team'),
        'supports'=>array('title','editor','thumbnail','custom-fields','page-attributes'),
        'menu_icon'=>'dashicons-groups','show_in_rest'=>true,
    ));
}
add_action('init', 'ppg_register_cpts');

/* ===== HELPER FUNCTIONS ===== */
function ppg_get_contact() {
    return array(
        'phone'=>get_theme_mod('ppg_phone','+91 98765 43210'),
        'email'=>get_theme_mod('ppg_email','hello@paypergrowth.com'),
        'address'=>get_theme_mod('ppg_address','5th Floor, Business Hub Tower, Andheri East, Mumbai 400069'),
        'whatsapp'=>get_theme_mod('ppg_whatsapp','919876543210'),
    );
}

function ppg_breadcrumb() {
    if (is_front_page()) return;
    echo '<div class="breadcrumb"><a href="'.esc_url(home_url('/')).'">Home</a><span>›</span>';
    if (is_page()) echo '<span>'.get_the_title().'</span>';
    elseif (is_singular()) echo '<span>'.get_the_title().'</span>';
    elseif (is_archive()) echo '<span>'.post_type_archive_title('',false).'</span>';
    elseif (is_search()) echo '<span>Search Results</span>';
    elseif (is_404()) echo '<span>Page Not Found</span>';
    echo '</div>';
}

function ppg_social_links() {
    $links = array('facebook','twitter','linkedin','instagram','youtube');
    echo '<div class="footer-social">';
    foreach ($links as $s) {
        $url = get_theme_mod("ppg_social_{$s}", '#');
        if ($url && $url !== '#') {
            echo '<a href="'.esc_url($url).'" target="_blank" rel="noopener" aria-label="'.ucfirst($s).'">'.strtoupper(substr($s,0,2)).'</a>';
        }
    }
    echo '</div>';
}
