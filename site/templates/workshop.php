<?php snippet('header') ?>
<?php snippet('menu') ?>
<section class="c prf workshop">
  <h1><?php echo html($page->title()) ?></h1>
  <div class="iim">
    <a class="i ilk" href="<?php echo $page->link() ?>"><?php echo thumb($page->images()->first(), array('crop' => true, 'width' => 250, 'height' => 250)) ?></a>
    <div class="nf">
      <div class="io <?php if($page->sold_out() == 'yes') echo 'sold-out' ?>">
        <?php echo kirbytext($page->intro()) ?>
      </div>
      <div class="tx">
        <?php echo kirbytext($page->more()) ?>
      </div>
      <div class="mr">
        <?php if($page->sold_out() == 'yes'): ?>
        <a href="<?php echo url('registration') ?>" class="rgr"><strong>This workshop is sold out!</strong></a>
        <?php else: ?>
        <a href="<?php echo url('registration') ?>" class="rgr"><strong>Register for this workshop &rarr;</strong></a>
        <?php endif ?>
      </div>
    </div>
    <div class="mt">
      <dl>
        <?php if($page->link() != ''): ?>
        <dt>On the Web<dt>
        <dd><?php echo str::link($page->link()) ?></dd>
        <?php endif ?>
        <?php if($page->twitter() != ''): ?>
        <dt>On Twitter<dt>
        <dd><?php echo twitter($page->twitter()) ?></dd>
        <?php endif ?>
        <dt>Workshop includes<dt>
        <dd>
          <ul>
            <li>Snacks and drinks during the whole day</li>
            <li>Tea and coffee</li>
            <li>Lunch</li>
            <li>Paper and pen/pencil</li>
          </ul>
        </dd>
      </dl>
    </div>
  </div>
</section>
<?php snippet('footer') ?>