<h1>Welcome to our website...</h1>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
       <!-- <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>-->
         <li><?= $this->Html->link(__('Logout'), [ 'controller'=> 'Users','action' => 'add']) ?></li>
    </ul>
</nav>

<h3>Blog articles</h3>
<?= $this->Html->link('Add Article', ['action' => 'add']) ?>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>

        <td>
                        <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?>

            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
        </td>

    </tr>
    <?php endforeach; ?>
</table>
