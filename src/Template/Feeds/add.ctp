<div class="col-md-6 col-md-offset-3">
        <div class="form-bg">
        <section class="header"> <h4 class="text-center" style="font-size:4em; color:#fff"><span class="icon-user bg-color-grey set-icon flat "><i class="fa fa-user"></i></span></h4></section>
        <section id="loginForm" class="form-x">
         
                <div class="form-group">
                   <?= $this->Flash->render('auth') ?>
					<?= $this->Form->create($feed) ?>
				    <fieldset>
				        <legend><?= __('Add Feed') ?></legend>
				        <?php
				            echo $this->Form->input('name');
				            echo $this->Form->input('location');
				            echo $this->Form->input('city');
				            echo $this->Form->input('url',['row'=>2]);
				        ?>
				    </fieldset>
				    <?= $this->Form->button(__('Submit')) ?>
				    <?= $this->Form->end() ?>
					
                </div>
                
                
           
        </section>

</div></div>

    
