<?php snippet('header') ?>
<?php snippet('menu') ?>
<section class="c contact">
  <h1><?php echo html($page->title()) ?></h1>
  <?php if($page->intro() != ''): ?>
  <div class="io bb">
    <?php echo kirbytext($page->intro()) ?>
    <p><img alt="Mariona Aloy Ciller Smashing Events" src="assets/images/miniona.png" width="150" height="150" /> <img alt="Jan Constantin (Events Assistant)" src="assets/images/jan-constantin.jpg" width="150" height="150" /> <img alt="Vitaly Friedman (Creative Director)" src="assets/images/vitaly-friedman.jpg" width="150" /> <img alt="Markus Seyfferth (COO)" src="assets/images/markus-seyfferth.png" width="150" /><br /><em>Our Smashing Events Team: Mariona Aloy Ciller (Event Manager), Jan Constantin (Event Manager Assistant), Vitaly Friedman (Creative Director), Markus Seyfferth (COO)</em></p>
  </div>
  <?php endif ?>
  <?php if($page->text() != ''): ?>
  <div class="tx">
    <?php echo kirbytext($page->text()) ?>
  </div>
  <?php endif ?>
</section>
<?php if($page->uid() != 'sponsors') snippet('sponsors') ?>
<?php snippet('newsletter') ?>
<?php snippet('footer') ?>
