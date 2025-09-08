<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>"> 
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <header>
      <nav id="header-nav">
        <div id="header-title">
          <a href="<?php echo site_url(); ?>"><h1>SERENA TABACCHI</h1></a>
        </div>

        <div id="header-link">
          <button id="hamburger-button">
            <img src="/wp-content/themes/test-andreacatapano/img/icon_menu.svg" alt="hamburger menu" />
          </button>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'headerMenuLocation'
        ));
        ?>
        </div>
      </nav>

      <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu-links">

        <?php
        wp_nav_menu(array(
            'theme_location' => 'headerMenuLocation'
        ));
        ?>
        </div>
        <!--        <div class="mobile-menu-social">
          <a
            href="https://linkedin.com/in/serena-tabacchi"
            target="_blank"
            aria-label="LinkedIn"
          >
            <img src="/img/lnkd_social.svg" alt="linkedin" />
          </a>

          <a
            href="https://instagram.com/serena.tabacchi"
            target="_blank"
            aria-label="Instagram"
          >
            <img src="/img/ig_social.svg" alt="linkedin" />
          </a>

          <a
            href="https://x.com/serena_tabacchi"
            target="_blank"
            aria-label="X (Twitter)"
          >
            <img src="/img/x.svg" alt="linkedin" />
          </a>
        </div> -->
      </div>
    </header>