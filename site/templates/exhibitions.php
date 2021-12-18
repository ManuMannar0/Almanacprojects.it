<?php snippet('header') ?>

<div class="col span_4_of_10 fixed-width">
  <div class="section group no-mobile exhibitions">
    <div class="col span_5_of_10">
      <h1>LONDON</h1>
    </div>
    <div class="col span_5_of_10">
      <h1>TURIN</h1>
    </div>
  </div>

  <?php foreach($page->children()->visible() as $exhibition): ?>
  <?php $startDate = new DateTime( $exhibition->startdate() ); ?>
  <?php $endDate = new DateTime( $exhibition->enddate() ); ?>

  <div class="section group exhibitions">
    <?php if(($exhibition->location() == 'london') || ($exhibition->location() == 'London')): ?>
    <div class="col span_5_of_10">
      <h1>
        <a href="<?php echo $exhibition->url() ?>"
          ><?php echo $exhibition->artist() ?></a
        >
      </h1>
      <i class="exhibition-title"
        ><a href="<?php echo $exhibition->url() ?>"
          ><?php echo $exhibition->exhibition() ?></a
        ></i
      >
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
    </div>
    <div class="col span_5_of_10 hidden">&nbsp;</div>

    <?php elseif(($exhibition->location() == 'turin') || ($exhibition->location() == 'Turin')): ?>
    <div class="col span_5_of_10 hidden">&nbsp;</div>
    <div class="col span_5_of_10">
      <h1>
        <a href="<?php echo $exhibition->url() ?>"
          ><?php echo $exhibition->artist() ?></a
        >
      </h1>
      <i class="exhibition-title"
        ><a href="<?php echo $exhibition->url() ?>"
          ><?php echo $exhibition->exhibition() ?></a
        ></i
      >
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
    </div>
    <?php endif ?>
  </div>
  <?php endforeach ?>
</div>

<?php snippet('footer') ?>
