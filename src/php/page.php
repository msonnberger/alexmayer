<?php include 'head.php' ?>
<?php include 'header.php' ?>
<section id="hero" style="background-image: url(<?php the_post_thumbnail_url() ?>);">
    <div>
      <span>Glänzende Ideen für leuchtende Augen</span>
    </div>
    <button>Angebot einholen</button>
  </section>
</header>
<main>
  <section class="max-width-container">
    <h2><?php the_title() ?></h2>
    <?php the_content() ?>
  </section>
</main>
<?php include 'footer.php' ?>
