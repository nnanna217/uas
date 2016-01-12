<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feed'), ['action' => 'edit', $feed->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feed'), ['action' => 'delete', $feed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feed->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Feeds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feed'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="feeds view large-9 medium-8 columns content">
    <h3><?= h($feed->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($feed->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($feed->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($feed->url)); ?>
    </div>
</div>
