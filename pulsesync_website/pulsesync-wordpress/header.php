<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top site-nav">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="<?php echo esc_url(home_url('/#home')); ?>">
      <img src="<?php echo esc_url(get_theme_file_uri('assets/novatech-logo.png')); ?>" class="brand-logo novatech-brand-logo" alt="<?php echo esc_attr__('NovaTech IT Support — Innovating Your Future', 'pulsesync'); ?>">
      <span>Pulse<span class="brand-blue">Sync</span><small class="brand-subtitle d-block">PREDICTIVE IT SUPPORT PORTAL</small></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-label="<?php echo esc_attr__('Toggle navigation', 'pulsesync'); ?>">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <?php
      wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'navbar-nav ms-auto align-items-lg-center',
          'fallback_cb' => 'pulsesync_primary_menu_fallback',
          'depth' => 1,
      ));
      ?>
    </div>
  </div>
</nav>
