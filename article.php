<?php include("./includes/head.php");
include("./includes/header.php");?>
    
        <div id="content">
            <div class="container">
                <div class="row">
                <?php $articles = mysqli_query($connection, "SELECT * FROM articles WHERE id=".(int)$_GET['id']) ;
                    if (mysqli_num_rows($articles)<=0){?>
                        
                    
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

<?php } else{
    $articles_art = mysqli_fetch_assoc($articles);
    mysqli_query($connection, "UPDATE `articles` SET `views`=`views`+1 WHERE id=".(int)$_GET['id']) ;
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
                                    <article class="article marg">
                                        <div class="article__image"
                                            style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <p>Johny Flame</p>
                                            <div class="article__info__meta">
                                                <small>2021-09-03 16:25:24</small>
                                            </div>

                                            <div class="article__info__preview">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam amet iusto
                                                assumenda dolores accusamus molestias quasi delectus? Adipisci,
                                                similique
                                                ullam?
                                            </div>
                                        </div>
                                    </article>

                                    <article class="article marg">
                                        <div class="article__image"
                                            style="background-image: url('./img/black-photo.jpg');">
                                        </div>
                                        <div class="article__info">
                                            <p>Johny Flame</p>
                                            <div class="article__info__meta">
                                                <small>2021-09-03 16:25:24</small>
                                            </div>

                                            <div class="article__info__preview">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam amet iusto
                                                assumenda dolores accusamus molestias quasi delectus? Adipisci,
                                                similique
                                                ullam?
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        
                            <div class="block">
                                <h3>Добавити коментар</h3>
                                <div class="block_forms">

                                    <form action="#" class="forms">
                                        <div class="form_group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="name" placeholder="Ім'я" class="form_control name_my_input">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="nickname" placeholder="Нікнейм"
                                                        class="form_control nickname_my_input">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form_group">
                                            <textarea name="text" placeholder="Опис..." class="form_control text_my_input"></textarea>
                                        </div>

                                        <div class="form_group">
                                            <input type="submit" value="Добавити коментар" class="form_control">
                                        </div>


                                    </form>

                                </div>
                            </div>
                    </section>
                    <?php };?>
                    <?php include("./includes/sidebar.php");?>

                </div>

            </div>
        </div>
        <?php include("./includes/footer.php"); ?>
    </div>
</body>

</html>