<?php
    include_once("template/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){

            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

<main id='main-post'>
    <section id='content'>
        <div id='cont-area'>
        <div id='cont-img'>
                <img src="<?= $BASE_URL?>img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
            </div>
            <h1 class='teste'><?= $currentPost['title']?></h1>
            <p><?= $currentPost['description']?></p>

        </div>
        <section id='cont-text'>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur natus hic fugit inventore, nam omnis nihil voluptatibus modi fuga repudiandae et recusandae nisi beatae vero temporibus assumenda eius quae. Quia.
                Quas, debitis cumque! Deserunt illum sapiente nihil tempora, dolorum, quo ratione pariatur neque impedit saepe est voluptatum tempore. Nobis possimus quos eligendi, earum tempore consequuntur! Iusto adipisci maxime earum! Magni!
                Voluptatem delectus nisi iure molestiae maxime eaque voluptate, exercitationem aspernatur culpa quaerat quidem nulla perspiciatis quos cum, nostrum sed rerum hic unde ipsum commodi. Eum ab numquam explicabo non nostrum.
                Facilis illum harum odit quidem praesentium amet minus, odio libero animi quos. Odio recusandae labore deserunt inventore sed suscipit reiciendis explicabo consequuntur? Assumenda quos sit libero rerum est provident debitis.
                Repellat voluptate maxime corrupti eligendi asperiores veritatis enim sapiente laudantium molestias voluptates illum deserunt, eaque dolores, iste facilis sunt labore alias natus a quae sint nostrum amet minima inventore? Numquam.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur natus hic fugit inventore, nam omnis nihil voluptatibus modi fuga repudiandae et recusandae nisi beatae vero temporibus assumenda eius quae. Quia.
            dent debitis.
                Repellat voluptate maxime corrupti eligendi asperiores veritatis enim sapiente laudantium molestias voluptates illum deserunt, eaque dolores, iste facilis sunt labore alias natus a quae sint nostrum amet minima inventore? Numquam.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur natus hic fugit inventore, nam omnis nihil voluptatibus modi fuga repudiandae et recusandae nisi beatae vero temporibus assumenda eius quae. Quia.
                Quas, debitis cumque! Deserunt illum sapiente nihil tempora, dolorum, quo ratione pariatur neque impedit saepe est voluptatum tempore. Nobis possimus quos eligendi, earum tempore consequuntur! Iusto adipisci maxime earum! Magni!
                Voluptatem delectus nisi iure molestiae maxime eaque voluptate, exercitationem aspernatur culpa quaerat quidem nulla perspiciatis quos cum, nostrum sed rerum hic unde ipsum commodi. Eum ab numquam explicabo non nostrum.
                Facilis illum harum odit quidem praesentium amet minus, odio libero animi quos. Odio recusandae labore deserunt inventore sed suscipit reiciendis explicabo consequuntur? Assumenda quos sit libero rerum est provident debitis.
                Repellat voluptate maxime corrupti eligendi asperiores veritatis enim sapiente laudantium molestias voluptates illum deserunt, eaque dolores, iste facilis sunt labore alias natus a quae sint nostrum amet minima inventore? Numquam.
            </p>
        </section>
    </section>

    <aside id='aside'>
        <nav>
            <h3>Categorias</h3>
            <ul class='list-aside'>
                <?php foreach($categories as $cat):?>
                    <li><a href="#"><?=$cat?></a></li>
                <?php endforeach; ?>
            </ul>

            <h3>Veja mais:</h3>
            <ul>
                <?php foreach($posts as $post): ?>
                    <li><a href="<?= $BASE_URL?>post.php?id=<?= $post['id']?>"><?=$post['title']?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>
</main>

<?php
    include_once("template/footer.php");
?>