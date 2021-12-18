
<div id="cornice">
  <?php $occhio="tranky"; ?>
  <?php $blockssplash = $site->blockssplashpage()->toStructure(); ?>
  
  <?php foreach ($blockssplash as $blocksplash) : ?>

    <?php $blocktitle = $blocksplash->titleforsplash() ?>
    <?php $blocksize = $blocksplash->sizeforsplash() ?>
    <?php $blockcategory = $blocksplash->category() ?>

    <?php foreach ($site->children()->children()->visible() as $postinsite) : ?>
    
      <?php if (strlen($postinsite->booktitle())) 
        
        { $titleformatch = $postinsite->booktitle(); } 
        elseif (strlen($postinsite->exhibition())){
        $titleformatch = $postinsite->exhibition(); } 
        elseif (strlen($postinsite->programmetitle())){ 
        $titleformatch = $postinsite->programmetitle(); } ?>

        <?php $folder = $postinsite->parent(); $category = $folder->title(); ?>

        <?php if ((strcmp($titleformatch, $blocktitle) == 0) && (strcasecmp($category, $blockcategory) == 0)): ?>

          <?php include 'analisi.php'; ?>

          <?php if ($coniglio == "coniglio") {
            $blocksize = "small";
            $conigliopost = "conigliopost";}?>

          <?php include 'buildsplashblock.php'; ?>

          <?php if ($coniglio == "coniglio"): $conigliopost = ""; $coniglio = ""; $blocksize = $blocksplash->sizeforsplash();?>
          <?php include 'buildsplashblock.php'; ?>

        <?php endif ?>

      <?php endif ?>

    <?php endforeach ?>

  <?php endforeach ?>

  <?php if($blocksize == "small" && $occhio == "occhio"): $coniglio = "coniglio" ?>
    <?php include 'buildsplashblock.php'; ?>
  <?php endif ?>
</div>

