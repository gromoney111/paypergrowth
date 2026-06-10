<?php
/**
 * Default Page Template
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?>
            <p><?php echo get_the_excerpt(); ?></p>
        <?php endif; ?>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="policy-content">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
