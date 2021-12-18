<?php snippet('header') ?>

<div class="col span_4_of_10">
  <?php foreach($page->children()->visible() as $publication): ?>
  <div class="exhibitions">
    <h1>
      <a href="<?php echo $publication->url() ?>"
        ><?php echo $publication->author() ?></a
      >
    </h1>
    <i class="exhibition-title"
      ><a href="<?php echo $publication->url() ?>"
        ><?php echo $publication->booktitle() ?></a
      ></i
    >
    <h2><?php echo $publication->releasedate() ?></h2>
  </div>
  <?php endforeach ?>
</div>

<?php snippet('footer') ?>
