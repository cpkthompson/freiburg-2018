<?php snippet('header') ?>
<?php snippet('menu') ?>
<section class="c home">
  <div class="hi">
    <a class="ilk" href="<?php echo url('locations') ?>"><img src="<?php echo $pages->find('home')->images()->first()->url() ?>" alt="<?php echo html($site->title()) ?>" /></a>
    <div class="io">
      <?php if($page->intro() != ''): ?>
      <?php echo kirbytext($page->intro()) ?>
      <?php endif ?>
    </div>
  </div>
  <?php if($page->text() != ''): ?>
  <div class="tx">
    <?php echo kirbytext($page->text()) ?>
  </div>
  <?php endif ?>
  <?php
    snippet('speakers', array('headline' => 'First confirmed speakers:'))
  ?>
  <div class="bb">
    <?php echo kirbytext($page->updates()) ?>
  </div>
</section>
<?php snippet('footer') ?>