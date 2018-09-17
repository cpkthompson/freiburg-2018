<?php snippet('header') ?>
<?php snippet('menu') ?>
<section class="c home">
  <div class="hi">
  <div class="ilk">
      <img src="<?php echo $pages->find('home')->images()->first()->url() ?>" alt="<?php echo html($site->title()) ?>" class="img-photo" />
      <a href="https://twitter.com/smashingconf" class="twitter">@smashingconf</a>
    </div>
    <div class="io">
      <?php if($page->intro() != ''): ?>
      <?php echo kirbytext($page->intro()) ?>
      <?php endif ?>
    </div>
    <?php if($page->excerpt() != ''): ?>
      <div class="bb">
        <?php echo kirbytext($page->excerpt()) ?>
      </div>
    <?php endif ?>
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
<?php if($page->uid() != 'sponsors') snippet('sponsors') ?>
<?php snippet('newsletter') ?>
<?php snippet('footer') ?>