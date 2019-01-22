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
		echo $this->Form->control('last_name',[
			'label' => '苗字'
		]);
		echo $this->Form->control('first_name',[
			'label' => '名前'
		]);
		echo $this->Form->control('grade', [
		    'label' => '学年',
			'type'    => 'select',
			'options' => [1 => 1, 2 => 2, 3 => 3],
		]);
		echo $this->Form->control('school',[
			'label' => '学校名'
		]);
		?>
    </fieldset>
	<?= $this->Form->button(__('登録')) ?>
	<?= $this->Form->end() ?>
    </div>
</div>
