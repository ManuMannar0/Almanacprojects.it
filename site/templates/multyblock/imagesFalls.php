<div class="col span_4_of_10 images fixImageTwoColumnTemplateSize">
  <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
    <?php 
      $imgname = $image->filename(); 
      $primi_due_caratteri_img = substr($imgname, 0, 2); 
    ?>
    <?php if ($primi_due_caratteri_img != "00"): ?>
      <a
      href="<?php echo thumb($image, array('width' => 1280))->url() ?>"
      data-lightbox="gallery"
      ><img
        src="<?php echo thumb($image, array('width' => 2000,'quality' => 100,'blur' => false))->url() ?>"
        style="image-rendering: -webkit-optimize-contrast"/>
      </a>
      <?php if ($image->caption()->isNotEmpty()): ?>
        <div class="caption"><?php echo $image->caption()->kt() ?></div>
      <?php endif ?>
    <?php endif ?>
  <?php endforeach ?>
</div>
