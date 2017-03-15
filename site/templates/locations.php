<?php snippet('header') ?>
<?php snippet('menu') ?>
<section class="c locations">
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

  <?php foreach($page->children()->visible() as $child): ?>

  <?php if($child->template() == 'venues'): ?>
  <div class="vsn">
    <div class="vs">
      <?php foreach($child->children()->visible() as $venue): ?>
      <div class="v">
        <h2><?php echo html($venue->title()) ?></h2>
        <a class="ilk" href="<?php echo $venue->link() ?>"><?php echo thumb($venue->images()->first(), array('width' => 400)) ?></a>
        <?php echo kirbytext($venue->text()) ?>
        <dl class="mmm">
          <dt>Address</dt>
          <dd><?php echo kirbytext($venue->address()) ?></dd>
          <dt>Website</dt>
          <dd><?php echo str::link($venue->link()) ?></dd>
        </dl>
      </div>
      <?php endforeach ?>
    </div>
  </div>

  <?php else: ?>

  <div class="lsn">
    <h2><?php echo html($child->title()) ?></h2>
    <?php echo kirbytext($child->text()) ?>
    <ul class="l">
      <?php foreach($child->children() as $location): ?>
      <li>
        <a class="ilk" href="<?php echo $location->website() ?>"><?php echo thumb($location->images()->first(), array('width' => 250)) ?></a>
        <h3><?php echo html($location->title()) ?></h3>
        <?php echo kirbytext($location->text()) ?>
        <dl class="mmm">
          <dt>On the web</dt>
          <dd><?php echo str::link($location->website()) ?></dd>
          <?php if($location->email() != ''): ?>
          <dt>Email</dt>
          <dd><?php echo str::email($location->email()) ?></dd>
          <?php endif ?>
        </dl>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
  <?php endif ?>
  <?php endforeach ?>
  <div class="tx">
    <?php echo kirbytext($page->directions()) ?>
  </div>
</section>
<?php snippet('footer') ?>