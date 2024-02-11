<?= $title = $post['title'] ?>

<?php ob_start() ?>
    <h1><?= $post['title'] ?></h1>

    <div class="date"></div>
    <div class="body">
        <?= $post['body'] ?>
    </div>
<?= $content = ob_get_clean() ?>

<?= include('layout.php') ?>