<section class="content_right   col-xl-4">

    <div class="block">
        <h3>Ми знаємо</h3>
        <div class="block_content">
            <script type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
        </div>
    </div>




    <div class="block">

        <?php $mostviews = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `views` DESC LIMIT 5");
        ?>

        <h3>Топ прочитаних постів</h3>
        <div class="block_content">
            <div class="articles articles_vertical new_post">
                <?php
                while ($cati = mysqli_fetch_assoc($mostviews)) {

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
                                <small>Категорія: <a href="/article.php?categorie=<?php echo $cati["categorie_id"] ?>"><?php echo ($ct); ?></a></small>
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
        <h3>Топ прочитаних коментів</h3>
        <div class="block_content">

            <?php $mycom = mysqli_query($connection, "SELECT * FROM `comments` DESK LIMIT 5");
            ?>




            <div class="articles articles_vertical new_post">

                <?php
                while ($cf = mysqli_fetch_assoc($mycom)) {
                ?>

                    <article class="article">
                        <div class="article_image" style="background-image: url('img/<?php echo $cf['img'];?>');">

                        </div>
                        <div class="article_info">
                            <h5><?php echo $cf['name'];?></h5>
                            <div class="article_info_meta">
                            <?php
                                foreach($categor_all as  $artcval){
                                    $fls = false;
                                    if($artcval["id"] === $cf["articles_id"]){
                                        $fls = $artcval["title"];
                                        break;
                                    };
                                };
                            ?>
                                <small>Назва поста: <a href="/article.php?id=<?php echo $cf["articles_id"];?>"><?php echo ($fls);?> </a></small>
                            </div>


                            <div class="article_info_preview">
                                <?php echo substr($cf['text'], 0, 100);?>
                            </div>
                        </div>
                    </article>
                <?php
                };
                ?>

            </div>
        </div>
    </div>
</section>