<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Fun!</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 10px;
            text-align: center;
            font-size: 2em;
        }
    </style>
</head>

<body>
    <header>
        <p>Playground</p>
    </header>
    <main>
        <ul>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <ul>
            <?php foreach ($tasks as $task) : ?>
                <li>
                    <?php if ($task->isComplete()) : ?>
                        <strike>
                            <?= $task->getDescription(); ?>
                        </strike>
                    <?php else: ?>
                        <?= $task->getDescription(); ?>
                    <?php endif; ?>
                </li>
            <?php endforeach ?>
        </ul>
    </main>
</body>

</html>