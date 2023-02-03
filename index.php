
<?php include("./includes/head.php")?>

<?php $articles_all = mysqli_query($connection, "SELECT * FROM `articles`" );?>
<?php include("./includes/header.php")?>
        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content_left col-xl-8">
                        <div class="block new_text">
                            <?php $articles_select = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 6" );?>
                            <a href="#">Всі пости</a>
                            <h3>Нові пости в блозі</h3>
                            <div class="block__content">
                                <div class="articles articles__horizontal new_post">

                                <?php  while($articles = mysqli_fetch_assoc($articles_select)){?>
                                    <article class="article">

                                        <div class="article_image"
                                            style="background-image: url('./img/<?php echo $articles["img"];?>');">
                                        </div>

                                        <div class="article__info">
                                            <a href="/article.php?id=<?php echo $articles["id"];?>"><?php echo $articles["title"];?></a>
                                            <div class="article__info__meta">
                                                <?php foreach($categories as $cat){
                                                    $cat_title = false;
                                                    if($cat["id"] === $articles["categorie_id"]){
                                                        $cat_title = $cat["title"];
                                                        break;
                                                    };
                                                };?>
                                                <small>Категорія: <a href="catgeories.php?id=<?php echo $articles["categorie_id"];?>"><?php echo $cat_title;?></a></small>
                                            </div>


                                            <div class="article__info__preview">
                                            <?php echo substr($articles["text"], 0, 100)."..."?>
                                            </div>
                                        </div>
                                    </article>

                               <?php } ?>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="block">
                            <?php $articles_select = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id`=2 ORDER BY `id` DESC LIMIT 6" );?>
                            <a href="#">Всі пости</a>
                            <h3>Програмування</h3>
                            <div class="block__content">
                                <div class="articles articles__horizontal new_post">

                                <?php  while($articles = mysqli_fetch_assoc($articles_select)){?>
                                    <article class="article">

                                        <div class="article_image"
                                            style="background-image: url('./img/<?php echo $articles["img"];?>');">
                                        </div>

                                        <div class="article__info">
                                            <a href="/article.php?id=<?php echo $articles["id"];?>"><?php echo $articles["title"];?></a>
                                            <div class="article__info__meta">
                                                <?php foreach($categories as $cat){
                                                    $cat_title = false;
                                                    if($cat["id"] === $articles["categorie_id"]){
                                                        $cat_title = $cat["title"];
                                                        break;
                                                    };
                                                };?>
                                                <small>Категорія: <a href="/article.php?categorie=<?php echo $articles["categorie_id"];?>"><?php echo $cat_title;?></a></small>
                                            </div>


                                            <div class="article__info__preview">
                                            <?php echo substr($articles["text"], 0, 100)."..."?>
                                            </div>
                                        </div>
                                    </article>

                               <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <?php $articles_select = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id`=1 ORDER BY `id` DESC LIMIT 6" );?>
                            <a href="#">Всі пости</a>
                            <h3>Безпека</h3>
                            <div class="block__content">
                                <div class="articles articles__horizontal new_post">

                                <?php  while($articles = mysqli_fetch_assoc($articles_select)){?>
                                    <article class="article">

                                        <div class="article_image"
                                            style="background-image: url('./img/<?php echo $articles["img"];?>');">
                                        </div>

                                        <div class="article__info">
                                            <a href="/article.php?id=<?php echo $articles["id"];?>"><?php echo $articles["title"];?></a>
                                            <div class="article__info__meta">
                                                <?php foreach($categories as $cat){
                                                    $cat_title = false;
                                                    if($cat["id"] === $articles["categorie_id"]){
                                                        $cat_title = $cat["title"];
                                                        break;
                                                    };
                                                };?>
                                                <small>Категорія: <a href="catgeories.php?id=<?php echo $articles["categorie_id"];?>"><?php echo $cat_title;?></a></small>
                                            </div>


                                            <div class="article__info__preview">
                                            <?php echo substr($articles["text"], 0, 100)."..."?>
                                            </div>
                                        </div>
                                    </article>

                               <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php include("./includes/sidebar.php")?>
                </div>
            </div>
        </div>
    </div>

    <?php include("./includes/footer.php")?>
    
</body>
</html>