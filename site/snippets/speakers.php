<div class="x">
</div>
<div class="ssg">
  <?php if(isset($headline)): ?>
  <h2><?php echo html($headline) ?></h2>
  <?php endif ?>
  <ul class="ss">
    <?php foreach($pages->find('speakers')->children() as $speaker): ?>
    <?php if($speaker->workshop() != '') {
      $workshop = $pages->find('workshops/' . $speaker->workshop());
    } else {
      $workshop = false;
    } ?>
    <li>
      <a href="<?php echo ($workshop) ? $workshop->url() : $speaker->url() ?>">
        <span class="si <?php echo html($speaker->title()) ?>"></span>
        <span class="sc"><?php echo html($speaker->title()) ?></span>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</div>
