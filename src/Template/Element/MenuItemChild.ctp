<?php
$icon     = $icon ?? 'fa-circle-o text-aqua';
$class    = ($active ?? false) ? ' class="active"' : '';
$name     = $name ?? $controller;
$disabled = $disabled ?? false;
?>
<?php if(!$disabled): ?>
<li <?= $class ?>>
    <a href="<?= $this->url($controller, $action, $prefix ?? null) ?>">
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