<h1><?= h($costomer->name) ?></h1>
<h1><?= h($costomer->email) ?></h1>
<h1><?= h($costomer->mobile) ?></h1>

<p><small>Created: <?= $costomer->created->format(DATE_RFC850) ?></small></p>
