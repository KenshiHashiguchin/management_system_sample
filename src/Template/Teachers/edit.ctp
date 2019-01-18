<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
use Cake\ORM\TableRegistry;
$options = TableRegistry::get('Subjects')->getSubjectOption();
?>
<div class="box box-solid">
    <div class="box-header">
        <span class="box-title">講師編集</span>
    </div>
    <div class="box-body">
    <?= $this->Form->create($teacher) ?>
    <fieldset>
        <?php
            echo $this->Form->control('last_name',[
                    'label' => '苗字'
            ]);
            echo $this->Form->control('first_name',[
                    'label' => '名前'
            ]);
        ?>
		<?= $this->Form->control('subjects._ids', [
			'label'       => '担当教科',
			'type'        => 'select',
			'multiple'    => 'checkbox',
			'templates'   => $this->Template->checkboxRow(5),
			'options'     => TableRegistry::get('Subjects')->getSubjectOption()
		]) ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),[
            'class' => 'btn btn-primary'
    ]) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
