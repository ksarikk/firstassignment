<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */


?>
<style> .error{color:red}</style> 
<style> .error-message{color:red} </style>

<div class="row">
    <aside class="column">
        <?php
     
     echo  $this->Breadcrumbs->render();
        
        ?>
        <!-- <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'listing'], ['class' => 'side-nav-item']) ?>
        </div> -->
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user,['id'=>'form','enctype'=>"multipart/form-data"]) ?>
            <fieldset>

                <legend><?= __('<i><b>Registration Form</b></i>') ?></legend>
                <?php
                    echo $this->Form->control('firstname',['required' => false,'placeholder' => 'Enter First Name']);
                    echo $this->Form->control('lastname',['required' => false,'placeholder' => 'Enter Last Name']);
                    echo $this->Form->control('orderid',['required' => false,'placeholder' => '####']);
                    echo $this->Form->control('phone',['required' => false,'placeholder' => '9999999999']);
                   
                   
                   
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            
            <?php echo $this->Form->button('Login', array(
    'type' => 'button',
    'onclick' => 'location.href=\'http://localhost:8765/Users/login\';',
    )); ?>
    <?= $this->Form->end() ?>
        </div>
    </div>
</div>
