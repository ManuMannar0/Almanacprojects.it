<!-- 2col template -->

<?php snippet('header') ?>

<div class="col span_4_of_10 fixed-width">
  <div class="title">
    <h1><?php echo $page->author() ?></h1>
    <i class="exhibition-title"><?php echo $page->booktitle() ?></i>
    <h2><?php echo $page->releasedate() ?></h2>
  </div>
  <?php echo $page->text()->kt(); ?>
</div>

<?php snippet('images') ?>

<?php snippet('footer') ?>
