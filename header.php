<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>

<body>
        <header>
      <nav id="header-nav">
        <div id="header-title">
          <a href="<?php echo site_url() ?>"><h1>SERENA TABACCHI</h1></a>
        </div>

        <div id="header-link">
          <button id="hamburger-button">
            <img src="/wp-content/themes/test-andreacatapano/img/icon_menu.svg" alt="hamburger menu" />
          </button>
          <a href="#">About</a>
          <a href="#">Work</a>
          <a href="#">Contact</a>
        </div>
      </nav>

      <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu-links">
          <a href="<?php echo site_url('about') ?>">About</a>
          <a href="#">Work</a>
          <a href="#">Contact</a>
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