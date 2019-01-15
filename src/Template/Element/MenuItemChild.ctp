<?php
$icon = $icon ?? 'fa-circle-o text-aqua';
$class = ($active ?? false) ? ' class="active"' : '';
$name = $name ?? '';
$disabled = $disabled ?? false;
$trial = $trial ?? false;
$controller = '';
$action = '';
$prefix = '';
$class = '';
?>

<?php if($trial): ?>
	<li
		data-toggle="tooltip"
		data-original-title="<?= __("This menu can not be accessed with the trial account.") ?>"
	>
  <span class="text-muted"
		style="padding: 5px 5px 5px 15px; display: block; font-size: 14px;">
    <i class="fa <?= $icon ?>" style="width: 20px;"></i><?= __($name) ?>
  </span>
	</li>

<?php elseif($disabled === false): ?>
	<li <?= $class ?>>
		<a href="">
			<i class="fa <?= $icon ?>"></i><?= __($name) ?>
		</a>
	</li>

<?php else: ?>
	<li <?= $class ?>>
  <span class="text-muted" style="padding: 5px 5px 5px 15px; display: block; font-size: 14px;">
    <i class="fa <?= $icon ?>" style="width: 20px;"></i><?= __($name) ?>
  </span>
	</li>
<?php endif; ?>
