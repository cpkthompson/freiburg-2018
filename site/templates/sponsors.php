<?php snippet('header') ?>
<?php snippet('menu') ?>
<section class="c sponsors">
  <h1><?php echo html($page->title()) ?></h1>
  <?php if($page->intro() != ''): ?>
  <div class="io bb">
    <?php echo kirbytext($page->intro()) ?>
  </div>
  <?php endif ?>
  <?php if($page->text() != ''): ?>
  <div class="text bb">
    <?php echo kirbytext($page->text()) ?>
  </div>
  <?php endif ?>
  <ul class="spl">
    <?php foreach($pages->find('sponsors')->children()->visible() as $category): ?>
    <li class="spc">
      <h2><?php echo html($category->title()) ?></h2>
      <ul class="iiml">
        <?php foreach($category->children() as $sponsor): ?>
        <li>
          <div class="iim" id="<?php echo $sponsor->uid() ?>">
            <a class="i bi ilk" href="<?php echo $sponsor->link() ?>"><?php echo thumb($sponsor->images()->first()) ?></a>
            <div class="nf">
              <h3><a href="<?php echo $sponsor->link() ?>"><?php echo html($sponsor->title()) ?></a></h3>
              <?php echo kirbytext($sponsor->text()) ?>
            </div>
            <div class="mt">
              <dl>
                <dt>On the web<dt>
                <dd><?php echo str::link($sponsor->link()) ?></dd>
                <dt>On Twitter<dt>
                <dd><?php echo twitter($sponsor->twitter()) ?></dd>
              </dl>
            </div>
          </div>
        </li>
        <?php endforeach ?>
      </ul>
    </li>
    <?php endforeach ?>
  </ul>
</section>
<?php snippet('footer') ?>