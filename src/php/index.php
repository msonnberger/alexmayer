<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Alex Mayer Design Strategie Consulting" />
    <meta property="og:title" content="Alex Mayer Design" />
    <meta
      property="og:description"
      content="Alex Mayer Design Strategie Consulting"
    />
    <meta property="og:image" content="https://www.mywebsite.com/image.jpg" />
    <meta property="og:image:alt" content="Image description" />
    <meta property="og:locale" content="de_AT" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:url" content="https://www.mywebsite.com/page" />
    <link rel="canonical" href="https://www.mywebsite.com/page" />

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="<?= get_template_directory_uri(); ?>/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="<?= get_template_directory_uri(); ?>/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?= get_template_directory_uri(); ?>/favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/favicons/site.webmanifest" />
    <link
      rel="mask-icon"
      href="<?= get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg"
      color="#5bbad5"
    />
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicons/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-config" content="<?= get_template_directory_uri(); ?>/favicons/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />
    
    <title>Alex Mayer Design</title>

    <?php wp_title() ?>
    <?php wp_head() ?>
  </head>

  <body>
    <?php wp_body_open() ?>
    <header>
      <section id="top-nav">
        <h1>Alex Mayer</h1>
        <nav>
          <ul>
            <li><a class="active">Start</a></li>
            <li><a>Leistungen</a></li>
            <li><a>Blog</a></li>
            <li><a>Über mich</a></li>
            <li><a>Kontakt</a></li>
          </ul>
        </nav>
        <button class="hamburger hamburger--slider" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </section>

      <section id="hero">
        <div>
          <span>Glänzende Ideen für leuchtende Augen</span>
        </div>
        <button>Angebot einholen</button>
      </section>
    </header>

    <main>
      <section id="services" class="max-width-container">
        <h2>Leistungen</h2>
        <ul>
        <?php
            $services_query = new WP_Query('order=DESC&cat=3');

            if ($services_query->have_posts()) :
              while ($services_query->have_posts()) :
                $services_query->the_post(); ?>
                <li style="background-image: url(<?php the_post_thumbnail_url() ?>);">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </li>
              <?php endwhile;
            else : ?>
              <li>Vielleicht haben wir bald Services...</li>
          <?php endif;
          wp_reset_postdata(); ?>
        </ul>
      </section>

      <section id="news" class="max-width-container">
        <h2>News</h2>
        <ul>
        <?php
          $news_query = new WP_Query('order=DESC&cat=2&posts_per_page=3');

          if ($news_query->have_posts()) :
            while ($news_query->have_posts()) :
              $news_query->the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                - <?php the_content(); ?>
                <a href="<?php the_permalink(); ?>">[mehr erfahren]</a>
              </li>
            <?php endwhile;
          else : ?>
            <li>Erster Post demnächst...</li>
        <?php endif;
        wp_reset_postdata(); ?>
        </ul>
      </section>

      <section id="clients" class="max-width-container">
        <h2>Referenzen</h2>
        <div class="clients-grid">
          <?php
              $clients_query = new WP_Query('order=ASC&cat=4&posts_per_page=3');

              if ($clients_query->have_posts()) :
                while ($clients_query->have_posts()) :
                  $clients_query->the_post(); ?>
                  <article>
                    <?php the_post_thumbnail(); ?>
                    <div class='client-info'>
                      <cite> <?php the_title(); ?> </cite>
                      <p> <?php the_field('role'); ?> </p>
                    </div>
                    <blockquote>
                      <?= wp_strip_all_tags(get_the_content()) ?>
                    </blockquote>
                  </article>
                <?php endwhile;
              else : ?>
                <article>Keiner mag uns :(</article>
            <?php endif;
            wp_reset_postdata(); ?>

          <article class="quotation-mark">
            <img src="<?= get_template_directory_uri() . '/images/quotation_mark.svg' ?>" alt="Zitatzeichen" />
          </article>
        </div>
      </section>
    </main>

    <footer>
      <div class="max-width-container">
        <div class="footer-top">
          <p>© Alex Mayer</p>
          <nav>
            <ul>
              <li>
                <a href="">Impressum</a> | <a href="">Datenschutzerklärung</a>
              </li>
            </ul>
          </nav>
          <p>
            Demo Wordpress Seite im Rahmen der LV 'Content Management Systeme'
            an der FH Salzburg von Markus Rinnerberger und Martin Sonnberger.
            <br /><br />Alle Inhalte sind frei erfunden.
          </p>
        </div>
        <h2>Bildnachweis</h2>
        <h3>Fotos</h3>
        <ul>
          <li>
            Herefoto Tastatur: Aman Anderson,
            <a href="http://de.freeimages.com/photo/illuminated-keyboard-124228"
              >http://de.freeimages.com/photo/illuminated-keyboard-124228</a
            >
          </li>
          <li>
            Foto Dina Meyer by Dreifachaxe,
            <a href="https://creativecommons.org/licenses/by-sa/4.0"
              >https://creativecommons.org/licenses/by-sa/4.0</a
            >
          </li>
          <li>
            Foto Thomas Meyer-Hermann By Thomas Meyer-Hermann,
            <a
              href="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Thomas_Meyer-Hermann_1.jpg/407px-Thomas_Meyer-Hermann_1.jpg"
              >https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Thomas_Meyer-Hermann_1.jpg/407px-Thomas_Meyer-Hermann_1.jpg</a
            >
          </li>
          <li>
            Foto Vorstand Sparkasse Ülzen,
            <a
              href="https://upload.wikimedia.org/wikipedia/commons/3/3e/SKUelzen_Vorstand_2015.jpg"
              >https://upload.wikimedia.org/wikipedia/commons/3/3e/SKUelzen_Vorstand_2015.jpg</a
            >
          </li>
        </ul>
        <h3>Icons</h3>
        <ul>
          <li>
            Freepik, <a href="http://www.freepik.com">http://www.freepik.com</a>
          </li>
          <li><a href="www.flaticon.com">www.flaticon.com</a></li>
        </ul>
      </div>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>
