<?php
    include_once("template/header.php");
?>

<section id="title">
    <h1>Relatos de um Junior</h1>
    <p>um blog para retratar a carreira de um programador junior</p>
</section>
<main>
    <section id="post-cont">
        <?php foreach($posts as $post): ?>
            <div class='post-box'>
                <div class= 'post-screen'>
                    <img src="<?= $BASE_URL?>/img/<?=$post['img']?>" alt ="<?= $post['title']?>">
                </div>

                <h2 class='post-title'><a href="<?= $BASE_URL?>post.php?id=<?=$post['id']?>"><?= $post['title']?></a></h2>
                <p class='post-description'> <?= $post['description']?></p>
                
                <div class='post-tags'>
                    <?php foreach($post['tags'] as $tag):?>
                        <a href="" class='tag'><?= $tag?></a>
                    <?php endforeach; ?>
                </div>
                <div class='btn-base'>
                    <a href="<?= $BASE_URL?>post.php?id=<?=$post['id']?>">
                    <input type="button" value="Veja mais" class='post-btn'>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>

<?php
    include_once("template/footer.php");
?>