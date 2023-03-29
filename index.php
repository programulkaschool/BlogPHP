<?php include("./includes/head.php") ?>

<?php include("./includes/header.php") ?>


<div id="content">
    <div class="container">
        <div class="row">
            <section class="content_left col-xl-8">
                <div class="block new_text">
                    <?php $categor = mysqli_query($connection, "SELECT * FROM `articles` WHERE `post_look` = 1 ORDER BY `id` DESC LIMIT 6");
                    ?>
                    <a href="#">Всі пости</a>
                    <h3>Нові пости в блозі</h3>
                    <div class="block_content">132
                            ?>
                                <article class="article">
                                    <div class="article_image" style="background-image: url('/img/<?php echo $cati["img"] ?>');">
                                    </div>
                                    <div class="article_info">
                                        <a href="article.php?id=<?php echo $cati["id"]; ?>"><?php echo ($cati["title"]); ?></a>
                                        <div class="article_info_meta">
                                            <?php foreach ($categories as $cat) {
                                                $ct = false;
                                                if ($cat["id"] == $cati["categorie_id"]) {
                                                    $ct = $cat['title'];
                                                    break;
                                                };
                                            }; ?>
                                            <small>Категорія: <a href="/categories.php?id=<?php echo $cati["categorie_id"] ?>"><?php echo ($ct); ?></a></small>
                                        </div>


                                        <div class="article_info_preview">
                                            <?php echo substr($cati["text"], 0, 100); ?>
                                        </div>
                                    </div>

                                </article>



                        </div>
                    </div>
                </div>


                <div class="block">
                    <?php $categor = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id`=2 AND `post_look` = 1 ORDER BY `id` DESC LIMIT 6");
                    ?>
                    <a href="#">Всі пости</a>
                    <h3>Програмування</h3>
                    <div class="block_content">
                        <div class="articles articles_horizontal new_post">


                            <?php
                            while ($cati = mysqli_fetch_assoc($categor)) {

                            ?>
                                <article class="article">
                                    <div class="article_image" style="background-image: url('/img/<?php echo $cati["img"] ?>');">
                                    </div>
                                    <div class="article_info">
                                        <a href="article.php?id=<?php echo $cati["id"]; ?>"><?php echo ($cati["title"]); ?></a>
                                        <div class="article_info_meta">
                                            <?php foreach ($categories as $cat) {
                                                $ct = false;
                                                if ($cat["id"] == $cati["categorie_id"]) {
                                                    $ct = $cat['title'];
                                                    break;
                                                };
                                            }; ?>
                                            <small>Категорія: <a href="/categories.php?id=<?php echo $cati["categorie_id"] ?>"><?php echo ($ct); ?></a></small>
                                        </div>


                                        <div class="article_info_preview">
                                            <?php echo substr($cati["text"], 0, 100); ?>
                                        </div>
                                    </div>

                                </article>
                            <?php }; ?>



                        </div>
                    </div>
                </div>


                <div class="block">
                    <?php $categor = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id`=1 AND `post_look` = 1 ORDER BY `id` DESC LIMIT 6");
                    ?>
                    <a href="#">Всі пости</a>
                    <h3>Безпека у інтернеті</h3>
                    <div class="block_content">
                        <div class="articles articles_horizontal new_post">


                            <?php
                            while ($cati = mysqli_fetch_assoc($categor)) {

                            ?>
                                <article class="article">
                                    <div class="article_image" style="background-image: url('/img/<?php echo $cati["img"] ?>');">
                                    </div>
                                    <div class="article_info">
                                        <a href="article.php?id=<?php echo $cati["id"]; ?>"><?php echo ($cati["title"]); ?></a>
                                        <div class="article_info_meta">
                                            <?php foreach ($categories as $cat) {
                                                $ct = false;
                                                if ($cat["id"] == $cati["categorie_id"]) {
                                                    $ct = $cat['title'];
                                                    break;
                                                };
                                            }; ?>
                                            <small>Категорія: <a href="/categories.php?id=<?php echo $cati["categorie_id"] ?>"><?php echo ($ct); ?></a></small>
                                        </div>


                                        <div class="article_info_preview">
                                            <?php echo substr($cati["text"], 0, 100); ?>
                                        </div>
                                    </div>

                                </article>
                            <?php }; ?>



                        </div>
                    </div>
                </div>


            </section>

            <?php include("./includes/sidebar.php") ?>

        </div>
    </div>
</div>
</div>

<?php include("./includes/footer.php") ?>



</body>

</html>