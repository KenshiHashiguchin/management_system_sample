<?php
/**
 * @var \App\View\AppView                                                $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $students
 */
?>
<div class="box box-solid">
    <div class="box-header">
        <span class="box-title">
            生徒一覧
        </span>
        <span class="pull-right"><?=$this->Html->link('生徒を追加する',['controller' => 'Students', 'action' => 'add'])?></span>
    </div>
    <div class="box-body">
        <div class="table-responsive fix-table-header">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('last_name','名前') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('grade','学年') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('school', '学校') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
				<?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= $this->Number->format($student->id) ?></td>
                        <td><?= h($student->last_name.' '.$student->first_name) ?></td>
                        <td><?= $this->Number->format($student->grade) ?></td>
                        <td><?= h($student->school) ?></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cog text-orange"></i>&nbsp;<span class="caret text-gray"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><?= $this->Html->link(__('編集'), ['action' => 'edit', $student->id]) ?></li>
                                    <li><?= $this->Form->postLink(__('退会'), ['action' => 'delete', $student->id], ['confirm' => __('本当に退会させますか？', $student->id)]) ?></li>

                                </ul>
                            </div>
                        </td>
                    </tr>
				<?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="box-footer">
		<?= $this->element('Paginator', ['paginator' => $this->Paginator]) ?>
    </div>
</div>
