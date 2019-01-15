<?php
/**
 * Created by PhpStorm.
 * User: torii
 * Date: 2017/12/26
 * Time: 12:20
 *
 * @var \BootstrapUI\View\Helper\PaginatorHelper $paginator
 */

use Cake\Core\Configure;

?>

	<p><?= $paginator->counter(['format' => '{{pages}}件中{{page}}件表示 - {{current}} / {{count}} 表示']) ?></p>
	<div class="paginator text-center">
		<ul class="pagination  no-margin">
			<?= $paginator->first('<< 先頭') ?>
			<?= $paginator->prev('< 前') ?>
			<?= $paginator->numbers(['before' =>null, 'after' => null]) ?>
			<?= $paginator->next('次 >') ?>
			<?= $paginator->last('最終 >>') ?>
		</ul>
	</div>