<?php require_once './header.php'; ?>

<div class="container page">
    <?php if (!empty($_GET['id']) && !empty($pageData[$_GET['id']])):
    $page = $pageData[$_GET['id']]; ?>

        <h1><?= $page['name']?></h1>

        <?php if ($_GET['id'] != 'blog'): ?>
            <?= $page['text']?>
        <?php elseif ($_GET['id'] == 'blog') : $blogPost = $page['text']?>

            <?php foreach ($blogPost as $id => $post): ?>
                <div class="post-item">
                    <h3><a href="/page.php?id=<?= $id; ?>"><?php echo $post['name']; ?></a></h3>
                    <div class="type"><?= $post['type']; ?></div>
                </div>
            <?php endforeach ?>

        <?php endif; ?>    
    <?php elseif(!empty($pageData['blog']['text'][$_GET['id']])): 
    $postView = $pageData['blog']['text'][$_GET['id']]?> 

        <h1><?= $postView['name']?></h1>
        <div class="type"><?= $postView['type']; ?></div>
        <div class="text"><?= $postView['text']; ?></div>

    <?php else: ?>
        <h1>Страница не найдена</h1>
    <?php endif; ?>
</div>

<?php require_once './footer.php'; ?>