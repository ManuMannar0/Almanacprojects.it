<!-- multyblock template -->

<?php snippet('header') ?>
<?php $startDate = new DateTime( $page->startdate() ); ?>
<?php $endDate = new DateTime( $page->enddate() ); ?>
<?php $items = $page->buildingBlocks()->toStructure(); ?>

<div class="col span_8_of_10">

  <!-- start info exhibition -->
  <div class="col span_8_of_10 title">
    <h1><?= $page->artist() ?></h1>
    <i class="exhibition-title"><?= $page->exhibition() ?></i>
    <?php include 'multyblock/date.php'; ?>
    <h1><?= $page->location() ?></h1>
    <h1><?php echo $page->hourornotes() ?></h1>
    <br />
  </div>
  <!-- end info exhibition -->
  
  <!-- start lenguage button -->
  <div class="lengButton">
    <button id="itabutton">ITA</button> - <button id="engbutton">ENG</button>
  </div>
  <!-- end lenguage button -->

  <!-- start manage multyblock -->
  <?php $isFirstOfMultyBlock = false; ?>
  <?php foreach ($items as $item) : ?>
    <?php if ($item->multyblock() == "MULTYBLOCKopened"): ?>
      <?php echo '<div class="wrap-multyblock">' ?>
      <?php echo '<div class="multyblock">' ?>
      <?php $isFirstOfMultyBlock = true; ?>
    <?php elseif($item->multyblock() == "MULTYBLOCKclosed"): ?>
      <?php echo '</div>' ?>
      <?php echo '</div>' ?>
      <?php $isFirstOfMultyBlock = false; ?>
    <?php else: ?>
      <div class=" span_10_of_10" style="<?php if($isFirstOfMultyBlock = true){echo "padding-right: 1rem;";} ?>"
      >
        <!--start contents-->
        <?php if (strlen($item->englisharea()->kt()) > 7): ?>
          <div
            class="
              english
              correttore_pagina
              <?=
              $item->alignment()
              ?>
              <?=
              $item->sidebyside()
              ?>
            "
          >
            <?= $item->englisharea()->kt() ?>
          </div>
        <?php endif ?>

        <?php if (strlen($item->areaitaliana()->kt()) > 7): ?>
          <div
            class="
              italiano
              correttore_pagina
              <?=
              $item->alignment()
              ?>
              <?=
              $item->sidebyside()
              ?>
              hide
            "
          >
            <?= $item->areaitaliana()->kt() ?>
          </div>
        <?php endif ?>

        <?php if (strlen($item->imagearea()->kt()) > 0): ?>
          <div
            id="<?= $idForFix++ ?>"
            class="
              correttore_pagina
              <?=
              $item->alignment()
              ?>
            "
          >
          <?= $item->imagearea()->kt() ?>
          <?php if ($item->imagecaption()->isNotEmpty()): ?>
            <div class="caption-multyblock">
              <?= $item->imagecaption()->kt() ?>
            </div>
          <?php endif ?>
          </div>
        <?php endif ?>

        <?php if ($item->multyblock() == "IMAGESfall"): ?>
          <?php include 'multyblock/imagesFalls.php'; ?>
        <?php endif ?>
        <!--end contents-->
      </div>
    <?php endif ?>
  <?php endforeach ?><br />
  <!-- end manage multyblock -->

<?php include 'multyblock/read_blueprint.php'; ?>
<?php snippet('footer') ?>
