<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="section-label"><?php the_category(', '); ?></span>
        <h1><?php the_title(); ?></h1>
        <p><time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time> &bull; <?php the_author(); ?></p>
        <?php ppg_breadcrumb(); ?>
    </div>
</section>

<article class="section">
    <div class="container">
        <div class="policy-content">
            <?php if (has_post_thumbnail()) : ?>
                <figure style="margin-bottom:30px;"><?php the_post_thumbnail('large', array('style'=>'border-radius:var(--radius-lg);width:100%;')); ?></figure>
            <?php endif; ?>
            <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
            <?php if (has_tag()) : ?>
                <div style="margin-top:40px;padding-top:20px;border-top:1px solid var(--gray-200);"><strong>Tags:</strong> <?php the_tags('',', ',''); ?></div>
            <?php endif; ?>
        </div>
    </div>
</article>

<section class="cta-section">
    <div class="container">
        <h2>Want Expert Marketing Help?</h2>
        <p>Get a free audit of your digital marketing campaigns today.</p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">Get Free Consultation &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
