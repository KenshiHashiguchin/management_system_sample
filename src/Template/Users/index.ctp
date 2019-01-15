<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div>
    <h3><?= __('Users') ?></h3>
    <div class="box box-solid">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th class="text-center"><?= $this->Paginator->sort('username') ?></th>
                <th class="text-center"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td class="text-center"><?= h($user->username) ?></td>
                <td class="text-center">
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
		<?= $this->element('Paginator', ['paginator' => $this->Paginator]) ?>
    </div>
</div>
