<?php include("./includes/head.php");
include("./includes/header.php"); ?>

<div id="content">
    <div class="container">
        <div class="row">
            <?php $articles = mysqli_query($connection, "SELECT * FROM articles WHERE id=" . (int)$_GET['id'] ." AND `post_look`=1");
            if (mysqli_num_rows($articles) <= 0) { ?>


                <section class="content__left col-xl-8">
                    <div class="block">
                        <h3>Пост не знайдено</h3>
                        <div class="block_content">
                            <div class="full_text">
                                Запитувана стаття не знайдена
                            </div>
                        </div>
                    </div>
                </section>

            <?php } else {
                $articles_art = mysqli_fetch_assoc($articles);
                mysqli_query($connection, "UPDATE `articles` SET `views`=`views`+1 WHERE id=" . (int)$_GET['id']);
            ?>
                <section class="content__left col-xl-8">
                    <div class="block">
                        <a><?php echo $articles_art['views'] ?></a>
                        <h3><?php echo $articles_art['title'] ?></h3>
                        <div class="block_content">
                            <div class="articles articles_full new_post">
                                <article class="article">
                                    <img class="photo_content" src="/img/<?php echo $articles_art['img'] ?>" alt="black_photo">
                                    <div class="full-text">
                                        <?php echo $articles_art['text'] ?>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>


                    <div class="block">
                        <a href="#">Добавити свій</a>
                        <h3>Коментарі</h3>
                        <div class="block_content">
                            <div class="articles articles_vertical new_post flex-col">
                                <?php $comments_select = mysqli_query($connection, "SELECT * FROM comments WHERE id=" . $articles_art['id']);
                                if (mysqli_num_rows($comments_select) <= 0) {
                                    echo "Коментарі відсутні...";
                                } else {
                                    while ($comm = mysqli_fetch_assoc($comments_select)) {
                                ?>
                                        <article class="article marg">
                                            <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                                            </div>
                                            <div class="article__info">
                                                <p><?php echo $comm["name"] . " " . ["author"]; ?></p>
                                                <div class="article__info__meta">
                                                    <small><?php echo $comm["pubdate"]; ?></small>
                                                </div>

                                                <div class="article__info__preview">
                                                    <?php echo substr($comm["text"], 0, 100) . "..."; ?>
                                                </div>
                                            </div>
                                        </article>
                                <?php };
                                }; ?>

                            </div>
                        </div>

                        <div class="block">
                            <h3>Добавити коментар</h3>
                            <div class="block_forms">

                                <form action="#" class="forms" id="form_comments">
                                    <div class="form_group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="name" placeholder="Ім'я" class="form_control name_my_input" value="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="nickname" placeholder="Нікнейм" class="form_control nickname_my_input" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form_group">
                                        <textarea name="text" placeholder="Опис..." class="form_control text_my_input" value=""></textarea>
                                    </div>

                                    <div class="form_group">
                                        <input type="submit" value="Добавити коментар" class="form_control">
                                    </div>

                                    <div id="text_log_comments"> </div>
                                </form>
                                <div class="add_comments" id_post_comments=<?php echo $articles_art['id'] ?> style="width:100%; height:30px; background-color:black; color:#fff; text-align:center; cursor:pointer;"> Add comments</div>
                            </div>
                        </div>
                </section>
            <?php }; ?>
            <?php include("./includes/sidebar.php"); ?>

        </div>

    </div>
</div>
<?php include("./includes/footer.php"); ?>
</div>
</body>

</html>