<?php
/**
 * @var \App\View\AppView $this
 */
use Cake\View\Helper\UrlHelper;

$class = ($controller === $this->name &&
	$action === $this->request->getParam('action')) ? ' class="active"' : '';
$name = $name ?? $controller;
$icon = $icon ?? 'fa-circle-o text-aqua';
$label = $label ?? '';
?>
<li<?= $class ?>>
	<a href="<?= $this->url($controller, $action, $prefix ?? null, $id ?? null) ?>">
		<i class="fa <?= $icon ?>"></i>&nbsp;<span><?= __($name) ?></span>
		<?php if(!empty($label)): ?>
			<span class="pull-right-container">
        <small class="label pull-right bg-blue" style="color: #fafafa;"><?= h($label) ?></small>
      </span>
		<?php endif; ?>
	</a>
</li>
