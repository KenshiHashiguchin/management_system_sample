<?php
/**
 * @var \App\View\AppView         $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="box box-solid">
    <div class="box-header">
        <span class="box-title">
            生徒を追加
        </span>
        <span class="pull-right"><?=$this->Html->link('生徒一覧',['controller' => 'Students', 'action' => 'index'])?></span>
    </div>
    <div class="box-body">
	<?= $this->Form->create($student) ?>
    <fieldset>
		<?php
		echo $this->Form->control('last_name');
		echo $this->Form->control('first_name');
		echo $this->Form->control('grade', [
			'options' => [1, 2, 3],
			'type'    => 'select',
		]);
		echo $this->Form->control('school');
		?>
    </fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
    </div>
</div>
