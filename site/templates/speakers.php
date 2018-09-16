<?php snippet('header') ?>
<?php snippet('menu') ?>
<section class="c speakers">
  <h1><?php echo html($page->title()) ?></h1>
  <?php if($page->intro() != ''): ?>
  <div class="io">
    <?php echo kirbytext($page->intro()) ?>
  </div>
  <?php endif ?>
  <?php if($page->text() != ''): ?>
  <div class="tx">
    <?php echo kirbytext($page->text()) ?>
  </div>
  <?php endif ?>
  <ul class="iiml">
    <?php foreach($pages->find('speakers')->children()->visible() as $speaker): ?>
    <?php if($speaker->workshop() != '') continue; ?>
    <li id="<?php echo $speaker->uid() ?>">
      <div class="iim">
        <a class="i ilk" href="<?php echo $speaker->url() ?>"><?php echo thumb($speaker->images()->first(), array('crop' => true, 'width' => 250, 'height' => 250)) ?></a>
        <div class="nf">
          <h3><a href="<?php echo $speaker->url() ?>"><?php echo html($speaker->title()) ?></a></h3>
          <?php echo kirbytext($speaker->bio()) ?>
        </div>
        <div class="mt">
          <dl>
            <dt>Talk<dt>
            <dd><a href="<?php echo $speaker->url() ?>"><?php echo html($speaker->talk()) ?></a></dd>
            <dt>On the web<dt>
            <dd><?php echo str::link($speaker->link()) ?></dd>
            <dt>On Twitter<dt>
            <dd><?php echo twitter($speaker->twitter()) ?></dd>
          </dl>
        </div>
      </div>
    </li>
    <hr />
    <?php endforeach ?>
  </ul>
</section>
<?php if($page->uid() != 'sponsors') snippet('sponsors') ?>
<?php snippet('footer') ?>