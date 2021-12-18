<!-- 2col template -->

<?php snippet('header') ?>
<?php $startDate = new DateTime( $page->startdate() ); ?>
<?php $endDate = new DateTime( $page->enddate() ); ?>

<div class="col span_4_of_10 fixed-width">
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
  <?php echo $page->text()->kt(); ?>
</div>

<?php snippet('images') ?>

<?php snippet('footer') ?>
