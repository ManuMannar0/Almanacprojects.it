<?php snippet('header') ?>

<?php if ($site->vetrina()->bool()): ?>
    <?php include 'splashpage/splashpage_block_request.php'; ?>
<?php endif ?>



<?php snippet('footer') ?>
<?php if ($site->stickercheck()->bool()): ?>
    <?php snippet('sticker') ?>
<?php endif ?>