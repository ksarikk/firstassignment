<!-- in /templates/Users/login.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your Email and Password') ?></legend>
        <?= $this->Form->control('email', ['required' => true, 'placeholder'=>'abc@gmail.com']) ?>
        <?= $this->Form->control('password', ['required' => true, 'placeholder'=>'********']) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
<?php
echo "Not having an account??"
?>
    <?= $this->Html->link("Register Here", ['action' => 'index']) ?>
</div>