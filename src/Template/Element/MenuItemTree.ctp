<?php

$icon = $icon ?? 'fa-circle-o text-aqua';
$color = $color ?? 'text-gray';

$activeParent = '';
foreach ($children as $idx => $child) {
	$active = ($child['controller'] === $this->name &&
		$child['action'] === $this->request->getParam('action'));
	$children[$idx]['active'] = $active;
	if ($active) {
		$activeParent = ' active';
	}
}

?>
<li class="treeview<?= $activeParent ?>">
	<a href="#"><i class="fa <?= $icon ?> <?= $color ?>"></i>
		<span><?= __($name) ?></span>
		<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
	</a>
	<ul class="treeview-menu">
		<?php foreach ($children as $child) {
			echo $this->element('MenuItemChild', $child);
		} ?>
	</ul>
</li>