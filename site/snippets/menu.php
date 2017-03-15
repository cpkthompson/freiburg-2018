<?php

$main = $pages->find('home', 'speakers', 'schedule', 'workshops', 'locations', 'sponsors', 'registration');

?>

<nav class="m" role="navigation">
  <ul>
    <?php foreach($main AS $p): ?>
    <?php if($p->isVisible()): ?>
    <li><a<?php if($p->isOpen()) echo ' class="active"' ?> href="<?php echo $p->url() ?>"><?php echo ($p->uid() == 'registration') ? '<strong>Tickets</strong>' : html($p->title()) ?></a></li>
    <?php else: ?>
    <li><span title="Coming soon…" class="inactive"><?php echo html($p->title()) ?></span></li>
    <?php endif; ?>
    <?php endforeach ?>
  </ul>
</nav>
