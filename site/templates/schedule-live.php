<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php
$day = param('day');
if(!in_array($day, array('monday', 'tuesday'))) $day = 'monday';
$schedule = yaml($page->schedule());
$schedule = $schedule[str::ucfirst(str::lower($day))];
?>
<section class="c schedule">
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
  <?php if($day == 'monday'): ?>
  <h2 class="sh"><span>Monday, 10th</span> <small>|</small> <a href="<?php echo $page->url() . '/day:tuesday' ?>">Tuesdy, 11th</a></h2>
  <?php else: ?>
  <h2 class="sh"><a href="<?php echo $page->url() . '/day:monday' ?>">Monday, 10th</a> <small>|</small> <span>Tuesday, 11th</span></h2>
  <?php endif; ?>
  <table class="s">
    <?php foreach($schedule['Track'] as $slot): ?>
    <?php if(isset($slot['talk'])): ?>
    <?php $speaker = $pages->find('speakers/' . $slot['talk']) ?>
    <tr class="spk" id="<?php echo $speaker->uid() ?>">
      <th><?php echo html($slot['time']) ?></th>
      <td>
        <div class="tnf">
          <h3><?php echo html($speaker->talk()) ?></h3>
          <?php echo kirbytext($speaker->description()) ?>
        </div>
        <div class="spnf">
          <h3><a href="<?php echo $speaker->url() ?>"><?php echo html($speaker->title()) ?></a></h3>
          <a class="i ilk" href="<?php echo $speaker->url() ?>"><?php echo thumb($speaker->images()->first(), array('crop' => true, 'width' => 250, 'height' => 250)) ?></a>
        </div>
      </td>
    </tr>
    <?php else: ?>
    <tr class="tx">
      <th><?php echo html($slot['time']) ?></th>
      <td><?php echo html($slot['text']) ?></td>
    </tr>
    <?php endif ?>
    <?php endforeach ?>
  </table>
</section>
<?php if($page->uid() != 'sponsors') snippet('sponsors') ?>
<?php snippet('footer') ?>
