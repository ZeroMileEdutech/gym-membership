<h1>Welcome to our website...</h1>
<nav class="large-3 medium-6 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
       <!-- <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>-->
     <li>  <?= $this->Html->link('Add Costomers', ['action' => 'add']) ?></li>

         <li><?= $this->Html->link(__('Logout'), [ 'controller'=> 'Users','action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
<h3>Costomers</h3>

<table>
    <tr>

        <th>Sr. No.</th>
        <th>Name</th>

        <th>Email</th>
        <th>Mobile No.</th>

        <th>Actions</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($costomers as $costomer): ?>
    <tr>
        <td><?= $costomer->id ?></td>
        <td>

            <?= $costomer->name ?>
        </td>
         <td>
            <?= $costomer->email ?>
        </td>
       <td>
            <?= $costomer->mobile ?>
        </td>


        <td>
                        <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $costomer->id],
                ['confirm' => 'Are you sure?'])
            ?>

            <?= $this->Html->link('Edit', ['action' => 'edit', $costomer->id]) ?>
        </td>

    </tr>
    <?php endforeach; ?>
</table>
</div>