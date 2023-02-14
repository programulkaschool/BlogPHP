<?php include("./includes/head.php");
include("./includes/header.php");?>
    
        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-xl-8">
                        <div class="block">
                            <a>14</a>
                            <h3>Розробка на Node.JS</h3>
                            <div class="block_content">
                                <div class="articles articles_full new_post">
                                    <article class="article">
                                        <img class="photo_content" src="/img/black-photo.jpg" alt="black_photo">
                                        <div class="full-text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                                            repellat? Excepturi
                                            magnam iure autem perspiciatis esse. Facere molestiae quasi quos obcaecati
                                            natus in
                                            reiciendis itaque assumenda quidem rerum ullam corporis iusto, laboriosam
                                            dolore sed quod
                                            amet blanditiis, modi voluptatum sapiente quia. Facilis architecto quaerat
                                            assumenda harum!
                                            Iusto eligendi maiores, consequatur autem voluptas veniam reprehenderit iure
                                            incidunt,
                                            voluptate suscipit numquam beatae perferendis possimus hic dolore corrupti
                                            ab, tempora error
                                            in velit! Qui ipsa culpa ut consequatur hic, reiciendis quod rem ex quos
                                            odit voluptas
                                            provident earum, debitis repellendus voluptatum aliquam! Quaerat beatae
                                            magni explicabo
                                            incidunt nobis, doloribus enim ad architecto temporibus!
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>


                        <div class="block">
                            <a href="#">Добавити свій</a>
                            <h3>Коментарі</h3>
                            <div class="block_content">
                                <div class="articles articles_vertical new_post">
                                    <article class="article">
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

                                    <article class="article">
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
                    <?php include("./includes/sidebar.php");?>

                </div>

            </div>
        </div>
        <?php include("./includes/footer.php"); ?>
    </div>
</body>

</html>