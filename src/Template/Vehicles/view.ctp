<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Vehicle $vehicle
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vehicle'), ['action' => 'edit', $vehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehicles view large-9 medium-8 columns content">
    <h3><?= h($vehicle->model) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($vehicle->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Register') ?></th>
            <td><?= h($vehicle->register) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($vehicle->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brand') ?></th>
            <td><?= h($vehicle->brand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Detail') ?></th>
            <td><?= h($vehicle->detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($vehicle->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($vehicle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($vehicle->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Services') ?></h4>
        <?php if (!empty($vehicle->services)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Total Cost') ?></th>
                <th scope="col"><?= __('Star Date') ?></th>
                <th scope="col"><?= __('End Date') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Vehicle Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicle->services as $services): ?>
            <tr>
                <td><?= h($services->id) ?></td>
                <td><?= h($services->total_cost) ?></td>
                <td><?= h($services->star_date) ?></td>
                <td><?= h($services->end_date) ?></td>
                <td><?= h($services->state) ?></td>
                <td><?= h($services->created) ?></td>
                <td><?= h($services->modified) ?></td>
                <td><?= h($services->vehicle_id) ?></td>
                <td><?= h($services->category_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Services', 'action' => 'view', $services->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Services', 'action' => 'edit', $services->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Services', 'action' => 'delete', $services->id], ['confirm' => __('Are you sure you want to delete # {0}?', $services->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
