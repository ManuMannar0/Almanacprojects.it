<!-- 2col template -->

<?php snippet('header') ?>
<?php $startDate = new DateTime( $page->startdate() ); ?>
<?php $endDate = new DateTime( $page->enddate() ); ?>

<div class="col span_4_of_10 fixed-width">

<div class=infoPage>
  <!-- info -->
  <div class="title">
    <h1><?php echo $page->artist() ?></h1>
    <i class="exhibition-title"><?php echo $page->exhibition() ?></i>
    <h2>
      <?php if ( $startDate->format('F') == $endDate->format('F')): ?>
      <span><?php echo $startDate->format('d'); ?></span>&mdash;<span
        ><?php echo $endDate->format('d F Y'); ?></span
      >
      <?php else: ?>
      <span><?php echo $startDate->format('d F'); ?></span>&mdash;<span
        ><?php echo $endDate->format('d F Y'); ?></span
      >
      <?php endif ?>
    </h2>
    <h1><?php echo $page->hourornotes() ?></h1>
  </div>
  <!-- info -->
  <!-- start lenguage button -->
  <div class="lengButton">
    <button id="itabutton">ITA</button>-<button id="engbutton">ENG</button>
  </div>
  <!-- end lenguage button -->
</div>

<!-- start multy texts -->
<?php if (strlen($page->text()->kt()) > 7): ?>
  <div class="italiano">
    <?php echo $page->text()->kt(); ?>
  </div>
<?php endif ?>

<?php if (strlen($page->textenglish()->kt()) > 7): ?>
  <div class="english">
    <?php echo $page->textenglish()->kt(); ?>
  </div>
<?php endif ?>
<!-- end multy texts -->

</div>

<!-- <?php include 'multyblock/read_blueprint.php'; ?> -->

<?php snippet('read_default_lenguage') ?>

<?php snippet('images') ?>

<?php snippet('footer') ?>
