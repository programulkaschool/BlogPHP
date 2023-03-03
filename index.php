  <?php include("./includes/head.php") ?>

  <?php include("./includes/header.php") ?>

  <?php $articles_all = mysqli_query($connection, "SELECT * FROM `articles`"); ?>



  <div id="content">
      <div class="container">
          <div class="row">
              <section class="content_left col-xl-8">
                  <div class="block new_text">
                      <?php $categories_select = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 6"); ?>
                      <a href="#">Всі пости</a>
                      <h3>Нові пости в блозі</h3>
                      <div class="block__content">
                          <div class="articles articles__horizontal new_post">
                              <?php
                                while ($post = mysqli_fetch_assoc($categories_select)) {
                                ?>
                                  <article class="article">

                                      <a href="http://www.example.com">
                                          <div class="article_image" style="background-image: url('/img/<?php echo $post["img"]; ?>');"></div>
                                      </a>

                                      <div class="article__info">
                                          <a href="/article.php?id=<?php echo $post["id"] ?>"><?php echo $post["title"]; ?></a>
                                          <div class="article__info__meta">
                                              <?php
                                                foreach ($categories as $cat) {
                                                    $cat_title = false;
                                                    if ($cat["id"] === $post["categorie_id"]) {
                                                        $cat_title = $cat["title"];
                                                        break;
                                                    };
                                                };
                                                ?>

                                              <small>Категорія: <a href="categories.php?id=<?php echo $post["categorie_id"] ?>"><?php echo $cat_title; ?></a></small>
                                          </div>


                                          <div class="article__info__preview">
                                            
                                              <?php echo substr($post["text"], 0, 150); ?>...
                                          </div>
                                      </div>
                                  </article>

                              <?php  }; ?>
                          </div>
                      </div>
                  </div>


                  <div class="block">
                      <?php $categories_select = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id`=2 ORDER BY `id` DESC LIMIT 6"); ?>
                      <a href="#">Всі пости</a>
                      <h3>Програмування</h3>
                      <div class="block__content">
                          <div class="articles articles__horizontal new_post">
                              <?php
                                while ($post = mysqli_fetch_assoc($categories_select)) {
                                ?>
                                  <article class="article">

                                      <div class="article_image" style="background-image: url('/img/<?php echo $post["img"]; ?>');">
                                      </div>

                                      <div class="article__info">
                                          <a href="/article.php?id=<?php echo $post["id"] ?>"><?php echo $post["title"]; ?></a>
                                          <div class="article__info__meta">
                                              <?php
                                                foreach ($categories as $cat) {
                                                    $cat_title = false;
                                                    if ($cat["id"] === $post["categorie_id"]) {
                                                        $cat_title = $cat["title"];
                                                        break;
                                                    };
                                                };
                                                ?>

                                              <small>Категорія: <a href="categories.php?id=<?php echo $post["categorie_id"] ?>"><?php echo $cat_title; ?></a></small>
                                          </div>


                                          <div class="article__info__preview">
                                              <?php echo substr($post["text"], 0, 150); ?>...
                                          </div>
                                      </div>
                                  </article>

                              <?php  }; ?>
                          </div>
                      </div>
                  </div>

                  <div class="block">
                      <?php $categories_select = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id`=1 ORDER BY `id` DESC LIMIT 6"); ?>
                      <a href="#">Всі пости</a>
                      <h3>Безпека</h3>
                      <div class="block__content">
                          <div class="articles articles__horizontal new_post">
                              <?php
                                while ($post = mysqli_fetch_assoc($categories_select)) {
                                ?>
                                  <article class="article">

                                      <div class="article_image" style="background-image: url('/img/<?php echo $post["img"]; ?>');">
                                      </div>

                                      <div class="article__info">
                                          <a href="/article.php?id=<?php echo $post["id"] ?>"><?php echo $post["title"]; ?></a>
                                          <div class="article__info__meta">
                                              <?php
                                                foreach ($categories as $cat) {
                                                    $cat_title = false;
                                                    if ($cat["id"] === $post["categorie_id"]) {
                                                        $cat_title = $cat["title"];
                                                        break;
                                                    };
                                                };
                                                ?>

                                              <small>Категорія: <a href="categories.php?id=<?php echo $post["categorie_id"] ?>"><?php echo $cat_title; ?></a></small>
                                          </div>


                                          <div class="article__info__preview">
                                              <?php echo substr($post["text"], 0, 150); ?>...
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
  <?php include("./includes/footer.php") ?>
  </body>

  </html>