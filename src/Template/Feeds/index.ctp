<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand" href="#">SecureTech Surveillance</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse"
			id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Dashboard'), ['controller'=>'dashboard','action' => 'dashboard']) ?></li>
				<li><?= $this->Html->link(__('New Feed'), ['controller'=>'feeds','action' => 'add']) ?></li>
				<li><?= $this->Html->link(__('All Drones'), ['controller'=>'feeds','action' => 'index']) ?></li>

			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<div>
	<h3><?= __('Feeds') ?></h3>
	<table class="table table-striped" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th><?= $this->Paginator->sort('id') ?></th>
				<th><?= $this->Paginator->sort('name') ?></th>
				<th><?= $this->Paginator->sort('location') ?></th>
				<th><?= $this->Paginator->sort('city') ?></th>
				<th><?= $this->Paginator->sort('url') ?></th>
				<th class="actions"><?= __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
            <?php foreach ($feeds as $feed): ?>
            <tr>
				<td><?= $this->Number->format($feed->id) ?></td>
				<td><?= h($feed->name) ?></td>
				<td><?= h($feed->location) ?></td>
				<td><?= h($feed->city) ?></td>
				<td><?= h($feed->url) ?></td>
				<td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $feed->id])?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feed->id])?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feed->id)])?>
                </td>
			</tr>
            <?php endforeach; ?>
        </tbody>
	</table>
	<div class="paginator">
		<ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous'))?>
            <?= $this->Paginator->numbers()?>
            <?= $this->Paginator->next(__('next') . ' >')?>
        </ul>
		<p><?= $this->Paginator->counter() ?></p>
	</div>
</div>
