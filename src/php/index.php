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
          <li class="services-design"><a href="">Design</a></li>
          <li class="services-strategy"><a href="">Strategie</a></li>
          <li class="services-consulting"><a href="">Consulting</a></li>
        </ul>
      </section>

      <section id="news" class="max-width-container">
        <h2>News</h2>
        <ul>
          <li>
            <a href="/news/365-postkarten/">365 Postkarten</a>
            - Eine Liebeserklärung für jeden Tag!
            <a href="/news/365-postkarten/">[mehr erfahren]</a>
          </li>

          <li>
            <a href="/news/cmyk-erklaert/">CMYK erklärt</a>
            - der neueste <a href="/news/cmyk-erklaert">Blog</a>-Eintrag!
            <a href="/news/cmyk-erklaert/">[mehr erfahren]</a>
          </li>

          <li>
            <a href="/news/award-nominierung/">Award Nominierung</a>
            - tolle News: Ich bin bei der Endauswahl 2020!
            <a href="/news/award-nominierung/">[mehr erfahren]</a>
          </li>
        </ul>
      </section>

      <section id="clients" class="max-width-container">
        <h2>Referenzen</h2>
        <div class="clients-grid">
          <article class="client-tina">
            <img
              src="<?= get_template_directory_uri(); ?>/images/dina-meyer.jpg"
              alt="Tina Ubuntu"
              class="testimonial"
            />
            <div class="client-info">
              <cite>Tina Ubuntu</cite>
              <p>CEO headless Ltd.</p>
            </div>
            <blockquote>
              Alex‘ Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20%
              in die Hohe zu treiben!
            </blockquote>
          </article>
          <article class="client-tom">
            <img
              src="<?= get_template_directory_uri(); ?>/images/thomas-meyer.jpg"
              alt="Tom Mayer"
              class="testimonial"
            />
            <div class="client-info">
              <cite>Tom Herzog</cite>
              <p>Cutter‘s Finest</p>
            </div>
            <blockquote>
              Große Webkunst – keine Kunst mit Alex Mayer!
            </blockquote>
          </article>
          <article class="client-mueller">
            <img
              src="<?= get_template_directory_uri(); ?>/images/vorstand.jpg"
              alt="Vorstand der Müller AG"
              class="testimonial"
            />
            <div class="client-info">
              <p>Vorstand Müller AG</p>
              <cite>KR Ernst Anker, Dr. Florian Eisner</cite>
              <blockquote>
                Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen
                übertroffen.
              </blockquote>
            </div>
          </article>
          <article class="quotation-mark">
            <img src="<?= get_template_directory_uri(); ?>/images/quotation_mark.svg" alt="Zitatzeichen" />
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
