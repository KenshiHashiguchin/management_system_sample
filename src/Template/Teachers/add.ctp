<?php
/**
 * @var \App\View\AppView         $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<div class="box box-solid">
    <div class="box-header">
        <span class="box-title">
            講師を追加
        </span>
        <span class="pull-right"><?= $this->Html->link('講師一覧', ['controller' => 'Teachers', 'action' => 'index']) ?></span>
    </div>
    <div class="box-body">
		<?= $this->Form->create($teacher) ?>
        <fieldset>
			<?php
			echo $this->Form->control('last_name', [
				'label' => '苗字',
			]);
			echo $this->Form->control('first_name', [
				'label' => '名前',
			]);
			?>
        </fieldset>
		<?= $this->Form->button(__('登録')) ?>
		<?= $this->Form->end() ?>
    </div>
</div>
