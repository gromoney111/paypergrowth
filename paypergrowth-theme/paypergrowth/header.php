<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            <?php if (has_custom_logo()) : the_custom_logo(); else : ?>
                <div class="logo-icon">P</div>Pay<span>Per</span>Growth
            <?php endif; ?>
        </a>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class'=> 'main-nav',
            'fallback_cb'    => 'ppg_fallback_menu',
            'depth'          => 2,
        ));
        ?>

        <button class="mobile-toggle" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
<div class="overlay"></div>

<?php
function ppg_fallback_menu() {
    echo '<nav class="main-nav">';
    echo '<a href="'.home_url('/').'">Home</a>';
    echo '<a href="'.home_url('/about-us/').'">About</a>';
    echo '<a href="'.home_url('/google-ads/').'">Google Ads</a>';
    echo '<a href="'.home_url('/bing-ads/').'">Bing Ads</a>';
    echo '<a href="'.home_url('/digital-marketing/').'">Digital Marketing</a>';
    echo '<a href="'.home_url('/case-studies/').'">Case Studies</a>';
    echo '<a href="'.home_url('/pricing/').'">Pricing</a>';
    echo '<a href="'.home_url('/contact/').'" class="btn btn-primary nav-cta">Get Free Audit</a>';
    echo '</nav>';
}
?>
