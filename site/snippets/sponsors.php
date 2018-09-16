<?php
$sponsorsPage = $pages->find('sponsors');
$sponsorsCats = $sponsorsPage->children()->visible()->find('platinum', 'gold', 'speaker-dinner-host', 'silver', 'bronze', 'workshops-sponsor', 'wifi-lounge', 'party', 'virtual', 'jamsession', 'coffee');
$sponsors     = ($sponsorsCats) ? $sponsorsCats->children()->visible() : array();
?>
<section class="spg">
  <h2>Sponsors &amp; Partners</h2>
  <?php if($sponsorsPage->showinfooter() == 'no'): ?>
  <?php echo kirbytext($sponsorsPage->text()) ?>
  <?php else: ?>
  <ul class="ig">
    <?php foreach($sponsors as $sponsor): ?>
    <li>
      <a class="ilk bi" href="<?php echo url('sponsors#' . $sponsor->uid()) ?>"><?php echo thumb($sponsor->images()->first(), array('crop' => true, 'width' => 250, 'height' => 250, 'alt' => $sponsor->title())) ?></a>
    </li>
    <?php endforeach ?>
  </ul>
  <?php endif ?>
</section>
