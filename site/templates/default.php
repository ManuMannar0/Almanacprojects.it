<?php snippet('header') ?>

<!-- Col 2 -->
<div class="col span_4_of_10 fixed-width">
  <!-- <div class="infoPage"> -->
    <!-- start lenguage button -->
    <div class="lengButton lengbutton_spanBottom">
      <button id="itabutton">ITA</button> - <button id="engbutton">ENG</button>
    </div>
    <!-- end lenguage button -->
  <!-- </div> -->
  <!-- start multy texts -->
  <?php if (strlen($page->textita()->kt()) > 7): ?>
    <div class="italiano">
      <?php echo $page->textita()->kt(); ?>
    </div>
  <?php endif ?>

  <?php if (strlen($page->text()->kt()) > 7): ?>
    <div class="english">
      <?php echo $page->text()->kt(); ?>
    </div>
  <?php endif ?>
  <!-- end multy texts -->
</div>

<?php snippet('read_default_lenguage') ?>
<?php snippet('images') ?>
<?php snippet('footer') ?>