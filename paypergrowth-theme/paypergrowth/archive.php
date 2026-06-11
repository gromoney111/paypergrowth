<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
        <h1><?php the_archive_title(); ?></h1>
        <?php the_archive_description('<p>','</p>'); ?>
        <?php ppg_breadcrumb(); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="services-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="service-card fade-in">
                        <?php if (has_post_thumbnail()) : the_post_thumbnail('service-card'); endif; ?>
                        <div style="padding:20px 0 0;">
                            <time style="font-size:0.85rem;color:var(--gray-500);"><?php echo get_the_date(); ?></time>
                            <h3 style="margin:8px 0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="learn-more">Read More &rarr;</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div class="section-header"><h2>No Content Found</h2></div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
