<?php require_once './pagesData.php'; ?>

<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <?php foreach ($pageData as $value): ?>
            <li><a href="page.php?id=<?=$value['link']?>"><?=$value['name']?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>