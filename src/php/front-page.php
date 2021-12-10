<?php include 'head.php' ?>
<?php include 'header.php' ?>

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

<?php include 'footer.php' ?>
