<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $feed->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feed->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Feeds'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="col-md-6 col-md-offset-3">
        <div class="form-bg">
        <section class="header"> <h4 class="text-center" style="font-size:4em; color:#fff"><span class="icon-user bg-color-grey set-icon flat "><i class="fa fa-user"></i></span></h4></section>
        <section id="loginForm" class="form-x">

    <?= $this->Form->create($feed) ?>
    <fieldset>
        <legend><?= __('Edit Feed') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('location');
            echo $this->Form->input('city');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

</div>
                
                
           
        </section>

</div></div>
