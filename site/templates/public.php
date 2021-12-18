<!-- 2col template -->

<?php snippet('header') ?>

<?php $startDate = new DateTime( $page->startdate() ); ?>
<?php $endDate = new DateTime( $page->enddate() ); ?>

<div class="col span_4_of_10 fixed-width">
  <div class="title">
    <h1><?php echo $page->artist() ?></h1>
    <i class="exhibition-title"><?php echo $page->programmetitle() ?></i>

    <?php if(strlen($page->startdate()) && strlen($page->enddate())): ?>

    <?php $startDate = new DateTime( $page->startdate() ); ?>
    <?php $endDate = new DateTime( $page->enddate() ); ?>

    <?php if ( $startDate->format('F') == $endDate->format('F')): ?>
    <h2>
      <span><?= $startDate->format('d'); ?></span>&mdash;<span
        ><?= $endDate->format('d F Y'); ?></span
      >
    </h2>
    <?php else: ?>
    <h2>
      <span><?= $startDate->format('d F'); ?></span>&mdash;<span
        ><?= $endDate->format('d F Y'); ?></span
      >
    </h2>
    <?php endif ?>

    <?php elseif(strlen($page->startdate())): ?>

    <?php $startDate = new DateTime( $page->startdate() ); ?>
    <h2>
      <span><?= $startDate->format('d F Y'); ?></span>
    </h2>

    <?php elseif(strlen($page->enddate())): ?>

    <?php $endDate = new DateTime( $page->enddate() ); ?>
    <h2>
      <span><?= "ends on-" . $endDate->format('d F Y'); ?></span>
    </h2>

    <?php endif ?>

    <h1><?php echo $page->location() ?></h1>
    <h1><?php echo $page->hourornotes() ?></h1>
  </div>
  <?php echo $page->text()->kt(); ?>
</div>

<?php snippet('images') ?>

<?php snippet('footer') ?>
