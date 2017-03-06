<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>

         <li><?= $this->Html->link(__('Logout'), ['action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="users form large-5 medium-8 columns content">
    <?= $this->Form->create($costomer) ?>
    <fieldset>
        <legend><?= __('Edit Costomers') ?></legend>

<?php
    echo $this->Form->create($costomer);
    echo $this->Form->input('name');
    echo $this->Form->input('email');
    echo $this->Form->input('mobile');

?>
    </fieldset>
    <?= $this->Form->button(__('Update ')) ?>
    <?= $this->Form->end() ?>
</div>
