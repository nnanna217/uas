<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/">NSA Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><?= $this->Html->link(__('New Feed'), ['controller'=>'feeds','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('All Drones'), ['controller'=>'feeds','action' => 'index']) ?></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
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
