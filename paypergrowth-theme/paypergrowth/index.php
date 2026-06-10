<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="section-label">Blog</span>
        <h1>Insights & Resources</h1>
        <p>Expert insights on paid marketing, digital strategy, and business growth.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="services-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="service-card fade-in">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('service-card'); ?></a>
                        <?php endif; ?>
                        <div style="padding:20px 0 0;">
                            <time style="font-size:0.85rem;color:var(--gray-500);"><?php echo get_the_date(); ?></time>
                            <h3 style="margin:8px 0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="learn-more">Read More &rarr;</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <div style="text-align:center;margin-top:40px;">
                <?php echo paginate_links(array('prev_text'=>'&larr; Previous','next_text'=>'Next &rarr;')); ?>
            </div>
        <?php else : ?>
            <div class="section-header"><h2>No Posts Yet</h2><p>Check back soon for insights.</p></div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
