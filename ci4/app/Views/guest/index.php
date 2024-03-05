<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <h3><?= esc($guest_item['name']) ?></h3>

        <div class="main">
            <?= esc($guest_item['name']) ?>
        </div>
        <p><a href="./guests/<?= esc($guest_item['email'], 'url') ?>">View Guest Details</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No guest</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>