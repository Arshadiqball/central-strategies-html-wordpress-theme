<?php
/**
 * Template Name: Blog
 *
 * Shows latest posts with category filtering.
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <section class="relative pt-20 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>
      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-20 lg:py-24">
        <div class="hero-badge inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cs-600/30 bg-cs-600/10 mb-8">
          <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
          <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php esc_html_e('Blog', 'central-strategies'); ?></span>
        </div>
        <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-[3.5rem] font-extrabold text-white leading-[1.1] tracking-tight text-balance max-w-4xl">
          <?php esc_html_e('Insights &', 'central-strategies'); ?> <span class="text-cs-500"><?php esc_html_e('Expertise', 'central-strategies'); ?></span>
        </h1>
        <p class="hero-p mt-7 text-lg text-slate-400 leading-relaxed max-w-3xl">
          <?php esc_html_e('Deep dives, practical guides, and expert perspectives on the technologies shaping federal IT and enterprise security.', 'central-strategies'); ?>
        </p>
      </div>
    </section>

    <section class="py-16 lg:py-20 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">

        <?php
        $cs_categories = get_categories(array('hide_empty' => true));
        if (!empty($cs_categories)) :
        ?>
        <div class="flex flex-col sm:flex-row sm:flex-wrap sm:items-center gap-3 mb-10" data-animate="fade-up" id="blog-filters" role="tablist" aria-label="Filter by topic">
          <span class="text-xs font-bold text-slate-500 uppercase tracking-wider sm:mr-2"><?php esc_html_e('Topics', 'central-strategies'); ?></span>
          <button type="button" data-filter="all" class="filter-btn is-active px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider border border-slate-200 bg-white text-slate-700 hover:border-cs-200 transition-colors"><?php esc_html_e('All', 'central-strategies'); ?></button>
          <?php foreach ($cs_categories as $cs_cat) : ?>
          <button type="button" data-filter="<?php echo esc_attr($cs_cat->slug); ?>" class="filter-btn px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider border border-slate-200 bg-white text-slate-700 hover:border-cs-200 transition-colors"><?php echo esc_html($cs_cat->name); ?></button>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php
        $cs_blog_query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 12,
            'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
        ));
        ?>

        <?php if ($cs_blog_query->have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" data-stagger id="blog-grid">
          <?php while ($cs_blog_query->have_posts()) : $cs_blog_query->the_post(); ?>
          <?php
            $cs_post_cats   = get_the_category();
            $cs_first_cat   = !empty($cs_post_cats) ? $cs_post_cats[0] : null;
            $cs_cat_slug    = $cs_first_cat ? $cs_first_cat->slug : '';
            $cs_cat_name    = $cs_first_cat ? $cs_first_cat->name : '';
          ?>
          <article data-blog-card data-category="<?php echo esc_attr($cs_cat_slug); ?>" class="group bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg hover:shadow-slate-200/60 transition-all duration-300 card-lift" data-animate="fade-up">
            <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" class="block aspect-[16/9] overflow-hidden">
              <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300')); ?>
            </a>
            <?php else : ?>
            <a href="<?php the_permalink(); ?>" class="block aspect-[16/9] bg-gradient-to-br from-cs-100 via-cs-50 to-white flex items-center justify-center">
              <svg class="w-14 h-14 text-cs-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
            </a>
            <?php endif; ?>
            <div class="p-6">
              <div class="flex items-center gap-3 text-xs text-slate-400 font-medium mb-3">
                <?php if ($cs_first_cat) : ?>
                <span class="text-cs-600 bg-cs-50 px-2.5 py-1 rounded font-bold"><?php echo esc_html($cs_cat_name); ?></span>
                <?php endif; ?>
                <span><?php echo get_the_date(); ?></span>
              </div>
              <h2 class="text-base font-bold text-slate-900 group-hover:text-cs-600 transition-colors leading-snug">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="mt-2 text-sm text-slate-500 leading-relaxed line-clamp-3"><?php echo esc_html(get_the_excerpt()); ?></p>
            </div>
          </article>
          <?php endwhile; ?>
        </div>

        <div class="mt-12 text-center">
          <?php
          echo paginate_links(array(
              'total'   => $cs_blog_query->max_num_pages,
              'current' => max(1, get_query_var('paged')),
          ));
          ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p class="text-slate-500 text-center py-12"><?php esc_html_e('No posts found.', 'central-strategies'); ?></p>
        <?php endif; ?>

      </div>
    </section>

</main>

<?php
get_footer();
