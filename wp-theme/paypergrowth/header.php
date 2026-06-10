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

<!-- Header -->
<header class="header" role="banner">
    <div class="header-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="<?php bloginfo('name'); ?> - Home">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <div class="logo-icon">P</div>
                Pay<span>Per</span>Growth
            <?php endif; ?>
        </a>

        <nav class="nav-menu" role="navigation" aria-label="Primary Navigation">
            <a href="<?php echo esc_url(home_url('/')); ?>" <?php echo is_front_page() ? 'class="active" aria-current="page"' : ''; ?>>Home</a>
            <div class="nav-dropdown">
                <a href="#" aria-haspopup="true" aria-expanded="false">Services &#9662;</a>
                <div class="dropdown-menu" role="menu">
                    <?php
                    $services = array(
                        'google-ads'        => 'Google Ads',
                        'bing-ads'          => 'Bing Ads',
                        'digital-marketing' => 'Digital Marketing',
                        'web-development'   => 'Web Development & Design',
                    );
                    foreach ($services as $slug => $name) :
                        $page = get_page_by_path($slug);
                        $url = $page ? get_permalink($page) : '#';
                    ?>
                        <a href="<?php echo esc_url($url); ?>" role="menuitem"><?php echo esc_html($name); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php
            $nav_pages = array(
                'about-us'     => 'About Us',
                'case-studies' => 'Case Studies',
                'pricing'      => 'Pricing',
                'contact'      => 'Contact',
            );
            foreach ($nav_pages as $slug => $name) :
                $page = get_page_by_path($slug);
                $url = $page ? get_permalink($page) : '#';
                $is_active = is_page($slug);
            ?>
                <a href="<?php echo esc_url($url); ?>" <?php echo $is_active ? 'class="active" aria-current="page"' : ''; ?>><?php echo esc_html($name); ?></a>
            <?php endforeach; ?>

            <?php
            $contact_page = get_page_by_path('contact');
            $contact_url = $contact_page ? get_permalink($contact_page) : home_url('/contact/');
            ?>
            <a href="<?php echo esc_url($contact_url); ?>" class="btn btn-primary nav-cta">Get Free Audit</a>
        </nav>

        <button class="mobile-toggle" aria-label="Toggle mobile menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
<div class="overlay" aria-hidden="true"></div>
