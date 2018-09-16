<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php
if($page->workshop() != '') go(notFound());
$speaker  = $page->uid();
$schedule = yaml($pages->find('schedule')->schedule());
$date     = false;
foreach($schedule as $key => $day) {
  if(!is_array($day['Track'])) continue;
  foreach($day['Track'] as $slot) {
    if(@$slot['talk'] == $speaker) {
      $date = '<a href="' . url('schedule') . '/day:' . str::lower($key) . '#' . $speaker . '">' . html($day['Headline'] . ' – ' . $slot['time']) . '</a>';
      break;
    }
  }
}
?>
<section class="c prf speaker">
  <h1><?php echo html($page->title()) ?></h1>
  <div class="iim">
    <a class="i ilk" href="<?php echo $page->link() ?>"><?php echo thumb($page->images()->first(), array('crop' => true, 'width' => 250, 'height' => 250)) ?></a>
    <div class="nf">
      <div class="io">
        <?php echo kirbytext($page->bio()) ?>
      </div>
      <div class="tk">
        <h2><?php echo html($page->talk()) ?></h2>
        <?php if($date): ?>
        <h3><?php echo $date ?></h3>
        <?php endif ?>
        <?php echo kirbytext($page->description()) ?>
      </div>
    </div>
    <div class="mt">
      <dl>
        <dt>On the Web<dt>
        <dd><?php echo str::link($page->link()) ?></dd>
        <dt>On Twitter<dt>
        <dd><?php echo twitter($page->twitter()) ?></dd>
      </dl>
    </div>
  </div>
  <?php snippet('speakers', array('headline' => 'All Speakers & Trainers')) ?>
</section>
<?php if($page->uid() != 'sponsors') snippet('sponsors') ?>
<?php snippet('footer') ?>