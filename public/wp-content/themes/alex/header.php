<body>
<?php wp_body_open() ?>
<header>
  <section id="top-nav">
    <h1>Alex Mayer</h1>
    <?php wp_nav_menu(array('menu' => 'Navigation')); ?>
    <button class="hamburger hamburger--slider" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </section>