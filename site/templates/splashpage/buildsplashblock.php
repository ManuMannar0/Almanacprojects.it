<div class="<?= $blocksize ?> <?= $occhio ?> <?= $conigliopost ?>">
  <div class="linea_sep"></div>

  <div
    class="
      sp_header
      <?=
      $bordo_sx_onoff
      ?>
      <?=
      $padding_sx_onoff
      ?>
      <?=
      $padding_dx_onoff
      ?>
    "
  >
    <!-- ARTISTA -->
    <div class="sp_artista bold">
      <?php 
      if($coniglio != "coniglio"){


        if (strlen($postinsite->author())) { echo $postinsite->author() . "<br />";
      }elseif(strlen($postinsite->artist())){ echo $postinsite->artist() . "<br />";
      }else{ $no_artist = 1; } }else{echo "";} ?>
    </div>

    <!-- TITOLO -->
    <div class="sp_titolo bold">
      <?php

      if($coniglio != "coniglio"){

        if (strlen($titleformatch)) {
          echo $titleformatch->author(); if($no_artist == 1){echo "<br />";}
      }else{ echo ""; } }else{echo "";} $no_artist = 0; ?>
      <br />
    </div>
  </div>

  <div class="sp_img <?= $bordo_sx_onoff ?>">
    <!--  IMMAGINE  -->
    <a href="<?= $postinsite->url() ?>"
      ><img class="imgreal
      <?= $padding_sx_onoff ?>
      <?= $padding_dx_onoff ?>" src="
      <?php 

      if($coniglio != "coniglio"){

        if (strlen($postinsite->files())) { echo
      $postinsite->files()->first()->url(); }else{ echo
      $site->url()."/default.jpg" ;} }else{echo $site->url()."/default.jpg";}
      ?>" ></a
    >
  </div>

  <div
    class="
      sp_footer
      <?=
      $bordo_sx_onoff
      ?>
      <?=
      $padding_sx_onoff
      ?>
      <?=
      $padding_dx_onoff
      ?>
    "
  >
    <!--  LOCATION e category -->
    <div class="sp_luogo">
      <!-- LOCATION -->
      <?php 

        if($coniglio != "coniglio"){


          if (strlen($postinsite->location())) { $location =
      $postinsite->location(); $primo_carattere = substr($location, 0, 1);
      $primo_carattere_maiuscolo = strtoupper($primo_carattere);
      $location_senza_primo_carattere = substr($location, 1); echo
      $primo_carattere_maiuscolo . $location_senza_primo_carattere . ", ";
      }else{ echo ""; } }else{echo "";} ?>

      <span class="category bold">
        <!-- CATEGORIA -->
        <?php 
          if($coniglio != "coniglio"){

            echo $category; 


          }else{echo "";}


          ?>
      </span>
      <br />
    </div>

    <!-- DATA -->
    <div class="sp_data">
      <?php if ($coniglio != "coniglio"): ?>

      <?php if(strlen($postinsite->releasedate())): ?>

      <span><?= $postinsite->releasedate() ?></span

      <?php elseif (strlen($postinsite->startdate()) &&
      strlen($postinsite->enddate())): ?><!-- ALTRIMENTI se c'è startdate AND enddate -->

      <?php $startDate = new DateTime( $postinsite->startdate() ); ?>
      <?php $endDate = new DateTime( $postinsite->enddate() ); ?>

      <?php if ( $startDate->format('F') == $endDate->format('F')): ?>

      <span><?= $startDate->format('d'); ?></span>&mdash;<span
        ><?= $endDate->format('d F Y'); ?></span
      >

      <?php else: ?>

      <span><?= $startDate->format('d F'); ?></span>&mdash;<span
        ><?= $endDate->format('d F Y'); ?></span
      >
      <?php endif ?>

      <?php elseif(strlen($postinsite->startdate())): ?>

      <?php $startDate = new DateTime( $postinsite->startdate() ); ?>
      <span><?= $startDate->format('d F Y'); ?></span>

      <?php elseif(strlen($postinsite->enddate())): ?>

      <?php $endDate = new DateTime( $postinsite->enddate() ); ?>
      <span><?= "ends on-" . $endDate->format('d F Y'); ?></span>

      <?php else: ?>

      <?php if(strlen($postinsite->hourornotes())): ?>

      <?php $data_vuota = "<br>" . "<wbr />"; ?>

      <?php else: ?>

      <span><?= "<wbr>"; ?></span>

      <?php endif ?>

      <?php endif ?>

      <?php else: ?>

      <?= ""; ?>

      <?php endif ?>

      <?php $startDate = ""; $endDate = ""; ?>
    </div>
    
    <!-- TIME -->
    <div class="sp_ora">
      <span>
        <?php 
              if($coniglio != "coniglio"){
                if (strlen($postinsite->hourornotes())) { 
                  echo $postinsite->hourornotes() . $data_vuota; $data_vuota = ""; 
                }
                else{ 
                  echo "<wbr />"; 
                } 
              } ?>
      </span>
    </div>
  </div>
</div>
