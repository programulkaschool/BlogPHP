<?php
require('includes/head.php');

require('includes/header.php');



$articles_edit_post = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id`=" . (int)$_GET['id']);

$allpst = mysqli_query($connection, "SELECT * FROM `articles`");

if (mysqli_num_rows($articles_edit_post) <= 0) { ?>

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

    $articles_single_post = mysqli_fetch_assoc($articles_edit_post);

?>

    <div id="content">
        <div class="container">
            <div class="row">
                <div style="margin-top: 50px">
                    <h2>
                        Edit Post Mode
                    </h2>
                </div>

                <section class="content_left col-xl-8">


                    <div class="input-group flex-nowrap mr-bm">
                        <input type="text" class="form-control title_text" value="<?php echo $articles_single_post["title"]; ?>" aria-label="Title" aria-describedby="addon-wrapping">
                    </div>

                    <div class="edit_text_area">
                        <div class="form-floating">
                            <textarea class="form-control txt-pst-descr pst_text" placeholder="Leave a comment here" id="floatingTextarea"><?php echo $articles_single_post["text"]; ?></textarea>
                            <label for="floatingTextarea">Text</label>
                        </div>
                    </div>

                </section>
                <section class="content_right col-xl-4">

                    <div class="save_button mr-bm">
                        <button id="save_button" type="button" class="btn btn-outline-secondary save_buttonn1">Save</button>
                    </div>


                    <div>
                        <select class="form-select form-select-lg mb-3 cat_slct" aria-label=".form-select-lg example">

                            <?php

                            foreach ($categories as $cat) {
                                $sf = false;
                                if ($articles_single_post["categorie_id"] === $cat["id"]) {
                                    $sf = "selected";
                                };
                            ?>
                                <option class="opt" <?php echo $sf; ?> value="<?php echo ($cat["id"]) ?>"><?php echo $cat["title"] ?></option>

                            <?php }; ?>

                        </select>
                    </div>

                    <div class="save_button mr-bm">

                        <button type="button" class="btn btn-dark pht-edit" id="pga">Edit photo</button>

                    </div>

                    <div class="mb-3">
                        <input class="form-control upload_photo" type="file" id="customFile" name="customFile">
                    </div>

                    <div id="selected-images">
                        <img class="pht upload_photo_img" src="img/<?php echo $articles_single_post["img"] ?>" alt="">
                    </div>

                    <div id="galere">
                        <div class="close-container">
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </div>

                        <div class="imgs">

                            <?php
                            while ($all_post_selected = mysqli_fetch_assoc($allpst)) {
                            ?>

                                <div class="responsive">
                                    <img class="pht pht-hide" src="img/<?php echo $all_post_selected["img"] ?>" alt="">
                                </div>
                            <?php }; ?>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

    </div>

    <?php include('includes/footer.php'); ?>

<?php }; ?>