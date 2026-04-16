<?php
/**
 * Template Name: Contact
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

// Handle form submission
$cs_form_sent    = false;
$cs_form_error   = '';
$cs_form_nonce   = 'cs_contact_form';

if (isset($_POST['cs_contact_submit']) && wp_verify_nonce($_POST['_cs_nonce'], $cs_form_nonce)) {
    $cs_name    = sanitize_text_field($_POST['cs_name'] ?? '');
    $cs_email   = sanitize_email($_POST['cs_email'] ?? '');
    $cs_phone   = sanitize_text_field($_POST['cs_phone'] ?? '');
    $cs_message = sanitize_textarea_field($_POST['cs_message'] ?? '');

    if (empty($cs_name) || empty($cs_email) || empty($cs_message)) {
        $cs_form_error = __('Please fill in all required fields.', 'central-strategies');
    } elseif (!is_email($cs_email)) {
        $cs_form_error = __('Please enter a valid email address.', 'central-strategies');
    } else {
        // Save submission as a custom post type entry
        $cs_inquiry_id = wp_insert_post(array(
            'post_type'   => 'cs_inquiry',
            'post_title'  => sanitize_text_field($cs_name),
            'post_status' => 'publish',
            'post_author' => 0,
        ));
        if ($cs_inquiry_id && !is_wp_error($cs_inquiry_id)) {
            update_post_meta($cs_inquiry_id, '_cs_email',   $cs_email);
            update_post_meta($cs_inquiry_id, '_cs_phone',   $cs_phone);
            update_post_meta($cs_inquiry_id, '_cs_message', $cs_message);
            update_post_meta($cs_inquiry_id, '_cs_status',  'new');
        }

        // Also send email notification
        $cs_to      = get_theme_mod('cs_email', get_option('admin_email'));
        $cs_subject = sprintf(__('[Central Strategies] New contact from %s', 'central-strategies'), $cs_name);
        $cs_body    = sprintf(
            "Name: %s\nEmail: %s\nPhone: %s\n\nMessage:\n%s\n\nView in admin: %s",
            $cs_name, $cs_email, $cs_phone ?: 'Not provided', $cs_message,
            $cs_inquiry_id ? admin_url('post.php?post=' . $cs_inquiry_id . '&action=edit') : ''
        );
        $cs_headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'Reply-To: ' . $cs_name . ' <' . $cs_email . '>',
        );
        wp_mail($cs_to, $cs_subject, $cs_body, $cs_headers);
        $cs_form_sent = true;
    }
}

$cs_phone_display = get_theme_mod('cs_phone', '703.873.7049');
$cs_email_display = get_theme_mod('cs_email', 'info@centralstrategies.com');
$cs_address       = get_theme_mod('cs_address', 'Washington DC–Baltimore Area, United States');
$cs_job_interest  = sanitize_text_field($_GET['job'] ?? '');
$cs_message_prefill = $cs_job_interest !== ''
    ? sprintf(__('I am interested in applying for the %s position.', 'central-strategies'), $cs_job_interest)
    : '';

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero + Form -->
    <section class="relative pt-20 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>
      <div class="absolute top-1/3 right-0 w-[600px] h-[600px] bg-cs-600/5 rounded-full blur-[120px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand-700/10 rounded-full blur-[100px]" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-20 lg:py-28">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 items-start">

          <!-- Left: headline + contact info -->
          <div>
            <div class="hero-badge inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cs-600/30 bg-cs-600/10 mb-8">
              <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
              <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php esc_html_e('Get In Touch', 'central-strategies'); ?></span>
            </div>

            <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-[3.5rem] font-extrabold text-white leading-[1.14] sm:leading-[1.12] lg:leading-[1.1] tracking-tight text-balance">
              <?php esc_html_e("Let's Discuss", 'central-strategies'); ?> <br class="hidden sm:block" />
              <span class="text-cs-500"><?php esc_html_e('Your Mission.', 'central-strategies'); ?></span>
            </h1>

            <p class="hero-p mt-7 text-lg text-slate-400 leading-relaxed max-w-lg">
              <?php esc_html_e("Fill out the form and our team will get back to you within one business day. We're ready to help you solve your most complex challenges.", 'central-strategies'); ?>
            </p>
          </div>

          <!-- Right: Contact form -->
          <div class="hero-form">
            <div class="bg-white rounded-2xl p-8 sm:p-10 shadow-2xl shadow-black/20 border border-white/10">

              <?php if ($cs_form_sent) : ?>
              <div class="text-center py-10">
                <div class="w-16 h-16 bg-brand-50 rounded-full flex items-center justify-center mx-auto mb-5">
                  <svg class="w-8 h-8 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                </div>
                <h3 class="text-xl font-extrabold text-slate-900 mb-2"><?php esc_html_e('Message Sent!', 'central-strategies'); ?></h3>
                <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('Thank you for reaching out. Our team will get back to you within one business day.', 'central-strategies'); ?></p>
              </div>
              <?php else : ?>

              <h2 class="text-2xl font-extrabold text-slate-900 mb-2"><?php esc_html_e('Send Us a Message', 'central-strategies'); ?></h2>
              <p class="text-sm text-slate-500 mb-8"><?php esc_html_e("Fill out the form below and we'll get back to you promptly.", 'central-strategies'); ?></p>

              <?php if ($cs_form_error) : ?>
              <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-sm text-red-700 font-medium">
                <?php echo esc_html($cs_form_error); ?>
              </div>
              <?php endif; ?>

              <form method="post" action="<?php the_permalink(); ?>" class="space-y-5" novalidate>
                <?php wp_nonce_field($cs_form_nonce, '_cs_nonce'); ?>

                <div>
                  <label for="cs_name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                    <?php esc_html_e('Name', 'central-strategies'); ?> <span class="text-cs-600">*</span>
                  </label>
                  <input type="text" id="cs_name" name="cs_name" required autocomplete="name"
                    placeholder="<?php esc_attr_e('Your full name', 'central-strategies'); ?>"
                    value="<?php echo esc_attr($_POST['cs_name'] ?? ''); ?>"
                    class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-900 placeholder-slate-400 outline-none focus:border-cs-600 focus:ring-2 focus:ring-cs-600/10 transition-colors" />
                </div>

                <div>
                  <label for="cs_email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                    <?php esc_html_e('Email', 'central-strategies'); ?> <span class="text-cs-600">*</span>
                  </label>
                  <input type="email" id="cs_email" name="cs_email" required autocomplete="email"
                    placeholder="<?php esc_attr_e('you@company.com', 'central-strategies'); ?>"
                    value="<?php echo esc_attr($_POST['cs_email'] ?? ''); ?>"
                    class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-900 placeholder-slate-400 outline-none focus:border-cs-600 focus:ring-2 focus:ring-cs-600/10 transition-colors" />
                </div>

                <div>
                  <label for="cs_phone" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                    <?php esc_html_e('Phone', 'central-strategies'); ?>
                  </label>
                  <input type="tel" id="cs_phone" name="cs_phone" autocomplete="tel"
                    placeholder="<?php esc_attr_e('(123) 456-7890', 'central-strategies'); ?>"
                    value="<?php echo esc_attr($_POST['cs_phone'] ?? ''); ?>"
                    class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-900 placeholder-slate-400 outline-none focus:border-cs-600 focus:ring-2 focus:ring-cs-600/10 transition-colors" />
                </div>

                <div>
                  <label for="cs_message" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                    <?php esc_html_e('Message', 'central-strategies'); ?> <span class="text-cs-600">*</span>
                  </label>
                  <textarea id="cs_message" name="cs_message" required rows="5"
                    placeholder="<?php esc_attr_e('Tell us about your project or challenge...', 'central-strategies'); ?>"
                    class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-900 placeholder-slate-400 outline-none focus:border-cs-600 focus:ring-2 focus:ring-cs-600/10 transition-colors resize-y"><?php echo esc_textarea($_POST['cs_message'] ?? $cs_message_prefill); ?></textarea>
                </div>

                <button type="submit" name="cs_contact_submit" value="1"
                  class="w-full inline-flex items-center justify-center gap-2 px-8 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded-lg hover:bg-cs-500 active:bg-cs-700 transition-colors shadow-lg shadow-cs-600/25">
                  <?php esc_html_e('Send Message', 'central-strategies'); ?>
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                </button>
              </form>
              <?php endif; ?>

            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Trust / Why Us -->
    <section class="py-16 lg:py-20 bg-white border-t border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12" data-animate="fade-up">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600/50"></span>
            <?php esc_html_e('Why Central Strategies', 'central-strategies'); ?>
            <span class="w-8 h-px bg-cs-600/50"></span>
          </div>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-normal text-balance">
            <?php esc_html_e('A partner you can', 'central-strategies'); ?> <span class="text-cs-600"><?php esc_html_e('trust.', 'central-strategies'); ?></span>
          </h2>
          <p class="mt-4 text-slate-500 leading-relaxed">
            <?php esc_html_e('When you work with Central Strategies, you work with a team that understands the stakes.', 'central-strategies'); ?>
          </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5" data-stagger>
          <div class="rounded-xl border border-slate-200 bg-white p-6 text-center" data-animate="fade-up">
            <div class="w-10 h-10 rounded-lg bg-cs-50 text-cs-600 flex items-center justify-center mx-auto mb-4">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118L2.077 10.1c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
            </div>
            <h3 class="text-base font-extrabold text-slate-900 mb-2"><?php esc_html_e('Veteran-Owned', 'central-strategies'); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('SDVOSB-certified with a service-driven culture built on discipline and accountability.', 'central-strategies'); ?></p>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 text-center" data-animate="fade-up">
            <div class="w-10 h-10 rounded-lg bg-cs-50 text-cs-600 flex items-center justify-center mx-auto mb-4">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 11h14v9H5v-9z" /></svg>
            </div>
            <h3 class="text-base font-extrabold text-slate-900 mb-2"><?php esc_html_e('Cleared Staff', 'central-strategies'); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('TS/SCI and Secret-cleared professionals ready for sensitive mission environments.', 'central-strategies'); ?></p>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 text-center" data-animate="fade-up">
            <div class="w-10 h-10 rounded-lg bg-cs-50 text-cs-600 flex items-center justify-center mx-auto mb-4">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
            </div>
            <h3 class="text-base font-extrabold text-slate-900 mb-2"><?php esc_html_e('Fast Response', 'central-strategies'); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('We respond to every inquiry within one business day - usually much faster.', 'central-strategies'); ?></p>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 text-center" data-animate="fade-up">
            <div class="w-10 h-10 rounded-lg bg-cs-50 text-cs-600 flex items-center justify-center mx-auto mb-4">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
            </div>
            <h3 class="text-base font-extrabold text-slate-900 mb-2"><?php esc_html_e('99% Retention', 'central-strategies'); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('Our clients come back because we deliver measurable results, every time.', 'central-strategies'); ?></p>
          </div>
        </div>
      </div>
    </section>


</main>

<?php
get_footer();
