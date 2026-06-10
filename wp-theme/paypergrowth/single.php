<?php
/**
 * Single Post Template
 *
 * @package PayPerGrowth
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <span class="section-label"><?php echo get_the_category_list(', '); ?></span>
        <h1><?php the_title(); ?></h1>
        <p>
            <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
            &bull; <?php echo esc_html(get_the_author()); ?>
            &bull; <?php echo ceil(str_word_count(get_the_content()) / 250); ?> min read
        </p>
        <?php paypergrowth_breadcrumb(); ?>
    </div>
</section>

<article class="section" itemscope itemtype="https://schema.org/Article">
    <div class="container">
        <div class="policy-content">
            <meta itemprop="headline" content="<?php the_title_attribute(); ?>">
            <meta itemprop="datePublished" content="<?php echo get_the_date('c'); ?>">
            <meta itemprop="author" content="<?php echo esc_attr(get_the_author()); ?>">

            <?php if (has_post_thumbnail()) : ?>
                <figure style="margin-bottom: 30px;">
                    <?php the_post_thumbnail('large', array('itemprop' => 'image', 'style' => 'border-radius: var(--radius-lg); width: 100%;')); ?>
                </figure>
            <?php endif; ?>

            <div itemprop="articleBody">
                <?php
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>

            <!-- Tags -->
            <?php if (has_tag()) : ?>
                <div style="margin-top: 40px; padding-top: 20px; border-top: 1px solid var(--gray-200);">
                    <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
                </div>
            <?php endif; ?>

            <!-- Author Box -->
            <div style="margin-top: 40px; padding: 30px; background: var(--gray-50); border-radius: var(--radius-lg);">
                <div style="display: flex; align-items: center; gap: 15px;">
                    <?php echo get_avatar(get_the_author_meta('ID'), 64, '', '', array('style' => 'border-radius: 50%;')); ?>
                    <div>
                        <h4 style="margin-bottom: 5px;"><?php the_author(); ?></h4>
                        <p style="margin: 0; color: var(--gray-500); font-size: 0.9rem;"><?php echo esc_html(get_the_author_meta('description')); ?></p>
                    </div>
                </div>
            </div>

            <!-- Post Navigation -->
            <nav style="margin-top: 40px; display: flex; justify-content: space-between; gap: 20px;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                <?php if ($prev_post) : ?>
                    <a href="<?php echo get_permalink($prev_post); ?>" class="btn btn-outline">&larr; Previous</a>
                <?php endif; ?>
                <?php if ($next_post) : ?>
                    <a href="<?php echo get_permalink($next_post); ?>" class="btn btn-outline">Next &rarr;</a>
                <?php endif; ?>
            </nav>

            <!-- Comments -->
            <?php if (comments_open() || get_comments_number()) : ?>
                <div style="margin-top: 50px;">
                    <?php comments_template(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</article>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Want Expert Marketing Help?</h2>
        <p>Get a free audit of your digital marketing campaigns today.</p>
        <?php $contact_page = get_page_by_path('contact'); ?>
        <a href="<?php echo $contact_page ? esc_url(get_permalink($contact_page)) : '#'; ?>" class="btn btn-white">Get Free Consultation &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
