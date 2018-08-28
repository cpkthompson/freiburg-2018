<?php snippet('header') ?>
<?php snippet('menu') ?>
<section class="c workshops">
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
  <ul class="iiml wsl">
    <?php foreach($pages->find('workshops')->children()->visible() as $workshop): ?>
    <li<?php if($workshop->sold_out() == 'yes') echo ' class="so"' ?>>
      <div class="iim">
        <a class="i ilk" href="<?php echo $workshop->url() ?>"><?php echo thumb($workshop->images()->first(), array('crop' => true, 'width' => 250, 'height' => 250)) ?></a>
        <div class="nf">
          <h3><a href="<?php echo $workshop->url() ?>"><?php echo html($workshop->title()) ?></a></h3>
          <h4>with <?php echo html($workshop->trainer()) ?></h4>
          <?php echo kirbytext($workshop->intro()) ?>
          <p class="mr">
            <a href="<?php echo $workshop->url() ?>"><strong>Read more...</strong></a><?php if($workshop->sold_out() != 'yes'): ?> or <a href="<?php echo url('registration') ?>" class="rgr"><strong>Register &rarr;</strong></a><?php endif ?>
          </p>
        </div>
        <div class="mt">
          <dl>
            <?php if($workshop->link() != ''): ?>
            <dt>On the Web<dt>
            <dd><?php echo str::link($workshop->link()) ?></dd>
            <?php endif ?>
            <?php if($workshop->twitter() != ''): ?>
            <dt>On Twitter<dt>
            <dd><?php echo twitter($workshop->twitter()) ?></dd>
            <?php endif ?>
          </dl>
        </div>
      </div>
    </li>
    <hr />
    <?php endforeach ?>
  </ul>
</section>
<?php snippet('footer') ?>