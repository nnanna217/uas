
<?php $this->extend('/Layout/TwitterBootstrap/signin'); ?>
<div class="col-md-6 col-md-offset-3">
        <div class="form-bg">
        <section class="header"> <h4 class="text-center" style="font-size:4em; color:#fff"><span class="icon-user bg-color-grey set-icon flat "><i class="fa fa-user"></i></span></h4></section>
        <section id="loginForm" class="form-x">
         
                <div class="form-group">
                   <?= $this->Flash->render('auth') ?>
					<?= $this->Form->create() ?>
					<legend><?= __('Please enter your username and password') ?></legend>
                    <div class="col-md-10 col-md-offset-1">
                        <?= $this->Form->input('username',['class'=>'form-control login-input']) ?>
                    </div>
                </div>
                <div class="form-group">
                  
                    <div class="col-md-10 col-md-offset-1">
                        <?= $this->Form->input('password') ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                    <?= $this->Form->button(__('Login'),['class'=>'btn bg-color-blue btn-block ']); ?>
					<?= $this->Form->end() ?>
                    </div>
                </div>
                
           
        </section>

</div></div>