<?php
/**
 * @var \App\View\AppView                                                $this
 * @var \App\Model\Entity\Teacher[]|\Cake\Collection\CollectionInterface $teachers
 */
?>
<div class="box box-solid">
    <div class="box-header">
        <span class="box-title">
            講師一覧
        </span>
        <span class="pull-right"><?= $this->Html->link('講師を追加する', ['controller' => 'Teachers', 'action' => 'add']) ?></span>
    </div>
    <div class="box-body">
        <div class="table-responsive fix-table-header">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('last_name', '名前') ?></th>
                    <th scope="col" class="text-center"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
				<?php foreach ($teachers as $teacher): ?>
                    <tr>
                        <td><?= $this->Number->format($teacher->id) ?></td>
                        <td><?= h($teacher->last_name.' '.$teacher->first_name) ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cog text-orange"></i>&nbsp;<span class="caret text-gray"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><?= $this->Html->link(__('編集'), ['action' => 'edit', $teacher->id]) ?></li>
                                    <li><?= $this->Form->postLink(__('削除'), ['action' => 'delete', $teacher->id], ['confirm' => __('本当に削除しますか？', $teacher->id)]) ?></li>

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
