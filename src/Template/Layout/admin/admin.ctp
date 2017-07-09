<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Mecánica
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.min', 'metisMenu.min', 'sb-admin-2.min', 'font-awesome.min']) ?>
    <?= $this->Html->script(['jquery.min', 'bootstrap.min', 'metisMenu.min', 'sb-admin-2.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
   
    <?= $this->Flash->render() ?>
    <div>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
