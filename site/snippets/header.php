<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-E1RKRE15RF"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-E1RKRE15RF");
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title><?php echo $site->title()->html() ?></title>
    <meta
      name="description"
      content="<?php echo $site->description()->html() ?>"
    />
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>" />
    <meta
      name="google-site-verification"
      content="md62yA8czKUsmfGnDstOWMQv0t-Tg8Gg2LR8hfxuxSc"
    />
 
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://almanacprojects.com/">
    <meta property="og:title" content="ALMANAC">
    <meta property="og:description" content="Almanac is a not-for-profit contemporary art gallery based in London and Turin focussed on working with young and emerging artists.">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://almanacprojects.com/">
    <meta property="twitter:title" content="ALMANAC">
    <meta property="twitter:description" content="Almanac is a not-for-profit contemporary art gallery based in London and Turin focussed on working with young and emerging artists.">
    <meta property="twitter:image" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <?php echo css('bower_components/lightbox2/dist/css/lightbox.css') ?>
    <?php echo css('assets/css/main.css') ?>
    <?php echo css('assets/css/other.css') ?>
  </head>
  <body>
    <main class="main" role="main">
      <div class="section group">
        <div class="col span_2_of_10 fixed-width ">
          <div class="cover_mobile"></div>
          <?php snippet('logo') ?>
          <p></p>
          <?php snippet('menu') ?>
        </div>
