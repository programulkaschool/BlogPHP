<?php
require('includes/head.php');
include('includes/header.php');
?>

<div id="content">
    <div class="container">
        <div class="row">
            <section class="content_left col-xl-8">
                <div class="block">
                    <a href="#">Всі пости</a>
                    <?php
                    foreach ($categories as $cat_val) {
                        if ($_GET["id"] === $cat_val["id"]) {
                            echo '<h3>' . $cat_val["title"] . '</h3>';
                        };
                    };
                    ?>

                    <div class="block__content">
                        <div class="articles articles__horizontal new_post">
                            <?php
                            $articles_categories = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` =" . (int)$_GET["id"]);
                            while ($articles = mysqli_fetch_assoc($articles_categories)) {
                            ?>
                                <article class="article">

                                    <div class="article_image" style="background-image: url('/img/<?php echo $articles["img"]; ?>');">
                                    </div>

                                    <div class="article__info">
                                        <a href="/article.php?id=<?php echo $articles["id"] ?>"><?php echo $articles["title"]; ?></a>
                                        <div class="article__info__meta">
                                            <?php
                                            foreach ($categories as $cat) {
                                                $cat_title = false;
                                                if ($cat["id"] === $articles["categorie_id"]) {
                                                    $cat_title = $cat["title"];
                                                    break;
                                                };
                                            };
                                            ?>

                                            <small>Категорія: <a href="/article.php?categorie=<?php echo $articles["categorie_id"] ?>"><?php echo $cat_title; ?></a></small>
                                        </div>


                                        <div class="article__info__preview">
                                            <?php echo substr($articles["text"], 0, 150); ?>...
                                        </div>
                                    </div>
                                </article>

                            <?php  }; ?>
                        </div>
                    </div>
                </div>
            </section>

            <?php include("./includes/sidebar.php") ?>
        </div>
    </div>
</div>
</div>


<?php include('includes/footer.php'); ?>
</body>

</html>