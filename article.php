<?php include("./includes/head.php") ?>
<?php include("./includes/header.php") ?>

<div id="content">
    <div class="container">
        <div class="row">
            <?php $articles_ids = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id`=" . (int)$_GET['id'] . " AND `post_look` = 1");
            if (mysqli_num_rows($articles_ids) <= 0) { ?>

                <section class="content_left col-xl-8">
                    <div class="block">
                        <div class="block_content">
                        </div>
                        <div class="full-text">
                            <h1>СТАТЯ НЕ ЗНАЙДЕНА<h1>
                        </div>
                    </div>
                </section>

            <?php
            } else {
                $articles_single_post = mysqli_fetch_assoc($articles_ids);
                $ck = (int)$_GET['id'];
                mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id`=" . $ck)
            ?>



                <section class="content_left col-xl-8">
                    <div class="block">
                        <a><?php echo $articles_single_post['views'] ?> переглядів</a>
                        <h3><?php echo $articles_single_post['title']; ?></h3>
                        <div class="block_content">
                            <img src="img/<?php echo $articles_single_post['img']; ?>" alt="fd" class="photo_content">
                        </div>
                        <div class="full-text">

                            <?php echo $articles_single_post['text']; ?>

                        </div>
                    </div>



                    <div class="block">
                        <a href="#anchor">Добавити свій</a>
                        <h3>Коментарі</h3>
                        <div class="block_content">
                            <div class="articles articles_vertical new_post">
                                <?php $comments_select = mysqli_query($connection, "SELECT * FROM `comments` WHERE `articles_id` = " . $ck . " ORDER BY `pubdate` DESC");
                                if (mysqli_num_rows($comments_select) <= 0) {
                                    echo "-__-";
                                } else {

                                    while ($com = mysqli_fetch_assoc($comments_select)) {
                                ?>


                                        <article class="article comme">
                                            <div class="article_image" style="background-image: url('img/<?php echo $com["img"];?>');">

                                            </div>
                                            <div class="article_info">
                                                <a href="#"><?php echo $com['author']. " ". $com['name'];?></a>
                                                <div class="article_info_meta">
                                                    <small>Date: <?php echo $com['pubdate']?></small>
                                                </div>


                                                <div class="article_info_preview">
                                             <?php   echo $com['text']; ?>
                                                </div>
                                            </div>
                                        </article>

                                    <?php }; ?>

                                <?php } ?>
                            </div>
                        </div>
                    </div>



                    <div class="block" id="anchor">
                        <h3>Добавити коментар</h3>
                        <div class="block_content">
                            <form id_page="<?php echo $articles_single_post['id'];?>" id="form_comments" method="post" action="article.php?id=<?php echo $articles_single_post['id'];?>#comments-add-form" class="form">
                                <div class="form__group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form__control name_my_input" name="name" placeholder="Ім'я">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form__control nickname_my_input" name="nickname" placeholder="Нікнейм">
                                        </div>
                                    </div>
                                </div>

                                <div class="form__group">
                                    <textarea name="text" class="form__control text_my_input" name="text" placeholder="Опис..."></textarea>
                                </div>
                                <div class="form__group">
                                    <input type="submit" class="form__control cont" value="Добавити коментар">
                                </div>
                                <div class="sumbit_div" style="padding: 20px; background-color: black; color: white; cursor:pointer;">
                                    My button
                                </div>
                                <div id="position_button"></div>
                            </form>
                        </div>
                    </div>
                </section>





            <?php }; ?>
            <?php include("./includes/sidebar.php") ?>
        </div>
    </div>
</div>
</div>

<?php include("./includes/footer.php") ?>

</body>

</html>