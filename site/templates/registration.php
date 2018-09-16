<?php snippet('header') ?>
<?php snippet('menu') ?>
<section class="c registration">
  <h1><?php echo html($page->title()) ?></h1>
  <?php if($page->intro() != ''): ?>
  <div class="io bb">
    <?php echo kirbytext($page->intro()) ?>
  </div>
  <?php endif ?>
  <?php if($page->text() != ''): ?>
  <div class="tx">
    <?php echo kirbytext($page->text()) ?>
  </div>
  <?php endif ?>
</section>
<?php if($page->uid() != 'sponsors') snippet('sponsors') ?>
<?php snippet('footer') ?>