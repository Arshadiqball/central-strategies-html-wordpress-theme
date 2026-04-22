<?php
/**
 * Single job posting — on-site application; submissions stored as Career Applications.
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

$cs_career_apply_sent  = false;
$cs_career_apply_error = '';
$cs_career_nonce_name  = 'cs_career_apply_form';

$cs_ca_values = array(
    'name'    => isset($_POST['cs_ca_name']) ? sanitize_text_field(wp_unslash($_POST['cs_ca_name'])) : '',
    'email'   => isset($_POST['cs_ca_email']) ? sanitize_email(wp_unslash($_POST['cs_ca_email'])) : '',
    'phone'   => isset($_POST['cs_ca_phone']) ? sanitize_text_field(wp_unslash($_POST['cs_ca_phone'])) : '',
    'link'    => isset($_POST['cs_ca_link']) ? esc_url_raw(wp_unslash($_POST['cs_ca_link'])) : '',
    'message' => isset($_POST['cs_ca_message']) ? sanitize_textarea_field(wp_unslash($_POST['cs_ca_message'])) : '',
);

if (
    isset($_POST['cs_career_apply_submit'])
    && is_singular('cs_job')
    && isset($_POST['_cs_career_nonce'])
    && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['_cs_career_nonce'])), $cs_career_nonce_name)
) {
    $posted_job_id = isset($_POST['cs_job_id']) ? (int) $_POST['cs_job_id'] : 0;
    $queried_id    = get_queried_object_id();
    $job_post      = $posted_job_id ? get_post($posted_job_id) : null;

    if (!$posted_job_id || $posted_job_id !== $queried_id || !$job_post || $job_post->post_type !== 'cs_job' || $job_post->post_status !== 'publish') {
        $cs_career_apply_error = __('Something went wrong. Please reload the page and try again.', 'central-strategies');
    } elseif ($cs_ca_values['name'] === '' || $cs_ca_values['email'] === '' || $cs_ca_values['message'] === '') {
        $cs_career_apply_error = __('Please fill in your name, email, and cover letter.', 'central-strategies');
    } elseif (!is_email($cs_ca_values['email'])) {
        $cs_career_apply_error = __('Please enter a valid email address.', 'central-strategies');
    } elseif ($cs_ca_values['link'] !== '' && !filter_var($cs_ca_values['link'], FILTER_VALIDATE_URL)) {
        $cs_career_apply_error = __('Please enter a valid URL for LinkedIn or portfolio, or leave it blank.', 'central-strategies');
    } else {
        $job_title = get_the_title($posted_job_id);
        $app_id    = wp_insert_post(array(
            'post_type'    => 'cs_career_application',
            'post_title'   => $cs_ca_values['name'],
            'post_status'  => 'publish',
            'post_author'  => 0,
        ));

        if ($app_id && !is_wp_error($app_id)) {
            update_post_meta($app_id, '_cs_email', $cs_ca_values['email']);
            update_post_meta($app_id, '_cs_phone', $cs_ca_values['phone']);
            update_post_meta($app_id, '_cs_message', $cs_ca_values['message']);
            update_post_meta($app_id, '_cs_link_url', $cs_ca_values['link']);
            update_post_meta($app_id, '_cs_job_id', $posted_job_id);
            update_post_meta($app_id, '_cs_job_title', $job_title);
            update_post_meta($app_id, '_cs_status', 'new');

            $cs_to      = get_theme_mod('cs_email', get_option('admin_email'));
            $cs_subject = sprintf(__('[Central Strategies] Career application: %s — %s', 'central-strategies'), $job_title, $cs_ca_values['name']);
            $cs_body    = sprintf(
                "Job: %s\nApplicant: %s\nEmail: %s\nPhone: %s\nURL: %s\n\nCover letter:\n%s\n\nView in admin: %s",
                $job_title,
                $cs_ca_values['name'],
                $cs_ca_values['email'],
                $cs_ca_values['phone'] ?: 'Not provided',
                $cs_ca_values['link'] ?: 'Not provided',
                $cs_ca_values['message'],
                admin_url('post.php?post=' . $app_id . '&action=edit')
            );
            $cs_headers = array(
                'Content-Type: text/plain; charset=UTF-8',
                'Reply-To: ' . $cs_ca_values['name'] . ' <' . $cs_ca_values['email'] . '>',
            );
            wp_mail($cs_to, $cs_subject, $cs_body, $cs_headers);

            $cs_career_apply_sent = true;
            $cs_ca_values        = array('name' => '', 'email' => '', 'phone' => '', 'link' => '', 'message' => '');
        } else {
            $cs_career_apply_error = __('We could not save your application. Please try again later.', 'central-strategies');
        }
    }
}

get_header();

while (have_posts()) :
    the_post();
    $cs_job_id       = get_the_ID();
    $cs_job_type     = get_post_meta($cs_job_id, '_cs_job_type', true);
    $cs_job_location = get_post_meta($cs_job_id, '_cs_job_location', true);
    $cs_careers_url  = cs_careers_page_url();
    ?>

<main id="primary" class="site-main bg-white">
  <article class="max-w-3xl mx-auto px-5 lg:px-8 pt-24 pb-20">
    <nav class="text-xs text-slate-500 mb-8" aria-label="<?php esc_attr_e('Breadcrumb', 'central-strategies'); ?>">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-cs-600"><?php esc_html_e('Home', 'central-strategies'); ?></a>
      <span class="mx-2 text-slate-300" aria-hidden="true">›</span>
      <a href="<?php echo esc_url($cs_careers_url); ?>#openings" class="hover:text-cs-600"><?php esc_html_e('Careers', 'central-strategies'); ?></a>
      <span class="mx-2 text-slate-300" aria-hidden="true">›</span>
      <span class="text-slate-700 font-semibold"><?php the_title(); ?></span>
    </nav>

    <header class="border-b border-slate-200 pb-8">
      <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight text-balance"><?php the_title(); ?></h1>
      <div class="mt-6 space-y-1.5 text-sm text-slate-600">
        <?php if ($cs_job_location !== '') : ?>
          <p>
            <span class="font-bold text-slate-800"><?php esc_html_e('Location:', 'central-strategies'); ?></span>
            <?php echo esc_html($cs_job_location); ?>
          </p>
        <?php endif; ?>
        <?php if ($cs_job_type !== '') : ?>
          <p>
            <span class="font-bold text-slate-800"><?php esc_html_e('Employment type:', 'central-strategies'); ?></span>
            <?php echo esc_html($cs_job_type); ?>
          </p>
        <?php endif; ?>
      </div>
    </header>

    <section class="mt-10 border-t border-slate-100 pt-10" aria-labelledby="cs-job-description-heading">
      <h2 id="cs-job-description-heading" class="text-lg font-extrabold text-slate-900 tracking-tight">
        <?php esc_html_e('Job Description:', 'central-strategies'); ?>
      </h2>
      <div class="cs-job-content mt-4 text-base text-slate-700 leading-relaxed
        [&_h2]:mt-10 [&_h2]:mb-4 [&_h2]:text-xl [&_h2]:font-extrabold [&_h2]:text-slate-900 [&_h2]:tracking-tight
        [&_h3]:mt-8 [&_h3]:mb-3 [&_h3]:text-lg [&_h3]:font-bold [&_h3]:text-slate-900
        [&_h4]:mt-6 [&_h4]:mb-2 [&_h4]:text-base [&_h4]:font-bold [&_h4]:text-slate-900
        [&_p]:mt-4 [&_p]:first:mt-0
        [&_ul]:mt-4 [&_ul]:list-disc [&_ul]:pl-6 [&_ol]:mt-4 [&_ol]:list-decimal [&_ol]:pl-6
        [&_li]:mt-2
        [&_strong]:font-semibold [&_strong]:text-slate-900
        [&_a]:text-cs-600 [&_a]:underline hover:[&_a]:text-cs-500
        [&_hr]:my-8 [&_hr]:border-slate-200">
        <?php the_content(); ?>
      </div>
    </section>

    <section id="apply" class="mt-14 scroll-mt-28" aria-labelledby="cs-job-apply-heading">
      <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 sm:p-8">
        <h2 id="cs-job-apply-heading" class="text-xl font-extrabold text-slate-900 tracking-tight">
          <?php esc_html_e('Apply for this position', 'central-strategies'); ?>
        </h2>
        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
          <?php esc_html_e('Submit the form below. Your application is delivered to our team and stored in the WordPress admin under Career Applications.', 'central-strategies'); ?>
        </p>

        <?php if ($cs_career_apply_sent) : ?>
          <div class="mt-8 text-center py-6 rounded-xl border border-brand-200 bg-white">
            <div class="w-14 h-14 bg-brand-50 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-7 h-7 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
            </div>
            <p class="font-extrabold text-slate-900"><?php esc_html_e('Application received', 'central-strategies'); ?></p>
            <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Thank you. We will review your materials and respond if there is a fit.', 'central-strategies'); ?></p>
            <a href="<?php echo esc_url($cs_careers_url); ?>#openings" class="mt-6 inline-flex text-sm font-bold text-cs-600 hover:text-cs-500"><?php esc_html_e('← Back to all openings', 'central-strategies'); ?></a>
          </div>
        <?php else : ?>
          <?php if ($cs_career_apply_error) : ?>
            <div class="mt-6 p-4 bg-red-50 border border-red-200 rounded-lg text-sm text-red-700 font-medium">
              <?php echo esc_html($cs_career_apply_error); ?>
            </div>
          <?php endif; ?>

          <form method="post" action="<?php echo esc_url(get_permalink()); ?>#apply" class="mt-8 space-y-5">
            <?php wp_nonce_field($cs_career_nonce_name, '_cs_career_nonce'); ?>
            <input type="hidden" name="cs_job_id" value="<?php echo (int) $cs_job_id; ?>" />

            <div>
              <label for="cs_ca_name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                <?php esc_html_e('Full name', 'central-strategies'); ?> <span class="text-cs-600">*</span>
              </label>
              <input type="text" id="cs_ca_name" name="cs_ca_name" required autocomplete="name"
                value="<?php echo esc_attr($cs_ca_values['name']); ?>"
                class="w-full px-4 py-3.5 bg-white border border-slate-200 rounded-lg text-sm text-slate-900 placeholder-slate-400 outline-none focus:border-cs-600 focus:ring-2 focus:ring-cs-600/10 transition-colors" />
            </div>

            <div>
              <label for="cs_ca_email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                <?php esc_html_e('Email', 'central-strategies'); ?> <span class="text-cs-600">*</span>
              </label>
              <input type="email" id="cs_ca_email" name="cs_ca_email" required autocomplete="email"
                value="<?php echo esc_attr($cs_ca_values['email']); ?>"
                class="w-full px-4 py-3.5 bg-white border border-slate-200 rounded-lg text-sm text-slate-900 placeholder-slate-400 outline-none focus:border-cs-600 focus:ring-2 focus:ring-cs-600/10 transition-colors" />
            </div>

            <div>
              <label for="cs_ca_phone" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                <?php esc_html_e('Phone', 'central-strategies'); ?>
              </label>
              <input type="tel" id="cs_ca_phone" name="cs_ca_phone" autocomplete="tel"
                value="<?php echo esc_attr($cs_ca_values['phone']); ?>"
                class="w-full px-4 py-3.5 bg-white border border-slate-200 rounded-lg text-sm text-slate-900 placeholder-slate-400 outline-none focus:border-cs-600 focus:ring-2 focus:ring-cs-600/10 transition-colors" />
            </div>

            <div>
              <label for="cs_ca_link" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                <?php esc_html_e('LinkedIn or portfolio URL', 'central-strategies'); ?>
              </label>
              <input type="url" id="cs_ca_link" name="cs_ca_link"
                value="<?php echo esc_attr($cs_ca_values['link']); ?>"
                placeholder="https://"
                class="w-full px-4 py-3.5 bg-white border border-slate-200 rounded-lg text-sm text-slate-900 placeholder-slate-400 outline-none focus:border-cs-600 focus:ring-2 focus:ring-cs-600/10 transition-colors" />
            </div>

            <div>
              <label for="cs_ca_message" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                <?php esc_html_e('Cover letter', 'central-strategies'); ?> <span class="text-cs-600">*</span>
              </label>
              <textarea id="cs_ca_message" name="cs_ca_message" required rows="6"
                class="w-full px-4 py-3.5 bg-white border border-slate-200 rounded-lg text-sm text-slate-900 placeholder-slate-400 outline-none focus:border-cs-600 focus:ring-2 focus:ring-cs-600/10 transition-colors resize-y"><?php echo esc_textarea($cs_ca_values['message']); ?></textarea>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pt-2">
              <button type="submit" name="cs_career_apply_submit" value="1"
                class="inline-flex items-center justify-center px-8 py-3.5 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider hover:bg-cs-500 transition-colors">
                <?php esc_html_e('Submit application', 'central-strategies'); ?>
              </button>
              <a href="<?php echo esc_url($cs_careers_url); ?>#openings" class="text-sm font-semibold text-slate-600 hover:text-cs-600">
                <?php esc_html_e('All openings', 'central-strategies'); ?>
              </a>
            </div>
          </form>
        <?php endif; ?>
      </div>
    </section>
  </article>
</main>

    <?php
endwhile;

get_footer();
