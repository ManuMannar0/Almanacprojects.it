<?php snippet('header') ?>

<div class="col span_4_of_10 fixed-width">
  <div class="section group no-mobile exhibitions">
    <div class="col span_5_of_10">
      <h1 class="upc">Upcoming</h1>
    </div>
  </div>

  <?php foreach($site->children()->children()->visible() as $exhibition): ?>

  <?php $startDate = new DateTime( $exhibition->startdate() ); ?>
  <?php $endDate = new DateTime( $exhibition->enddate() ); ?>

  <?php if($exhibition->currentupcoming() == 'upcoming'): ?>

  <div class="section group exhibitions">
    <!-- upcoming  -->
    <div class="col span_5_of_10">
      <h1>
        <a href="<?= $exhibition->url() ?>">
          <?php 

							if (strlen($exhibition->author())) { echo $exhibition->author(); }else{ echo
          $exhibition->artist(); } ?>
        </a>
      </h1>
      <i class="exhibition-title"
        ><a href="<?= $exhibition->url() ?>">
          <?php 

							if (strlen($exhibition->booktitle())) { echo $exhibition->booktitle(); } elseif
          (strlen($exhibition->exhibition())){ echo $exhibition->exhibition(); }
          else { echo $exhibition->programmetitle(); } ?>
        </a></i
      >
      <h2>
        <?php if(strlen($exhibition->releasedate())): ?>

        <span><?= $exhibition->releasedate() ?></span>

        <?php endif ?>

        <?php if(strlen($exhibition->startdate()) &&
        strlen($exhibition->enddate())): ?>

        <?php $startDate = new DateTime( $exhibition->startdate() ); ?>
        <?php $endDate = new DateTime( $exhibition->enddate() ); ?>

        <?php if ( $startDate->format('F') == $endDate->format('F')): ?>
        <span><?= $startDate->format('d'); ?></span>&mdash;<span
          ><?= $endDate->format('d F Y'); ?></span
        >
        <?php else: ?>
        <span><?= $startDate->format('d F'); ?></span>&mdash;<span
          ><?= $endDate->format('d F Y'); ?></span
        >
        <?php endif ?>

        <?php elseif(strlen($exhibition->startdate())): ?>

        <?php $startDate = new DateTime( $exhibition->startdate() ); ?>
        <span><?= $startDate->format('d F Y'); ?></span>

        <?php elseif(strlen($exhibition->enddate())): ?>

        <?php $endDate = new DateTime( $exhibition->enddate() ); ?>
        <span><?= "ends on-" . $endDate->format('d F Y'); ?></span>

        <?php endif ?>
      </h2>
      <h1 class="exhibition-title"><?= ucfirst($exhibition->location()) ?></h1>
    </div>
    <!-- upcoming  -->
  </div>
  <?= $startDate = "" ?>
  <?= $endDate = ""; ?>
  <?php endif ?>
  <?php endforeach ?>
</div>

<?php snippet('footer') ?>
