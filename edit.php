<?php
require('includes/head.php');

require('includes/header.php');



$articles_edit_post = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id`=" . (int)$_GET['id']);

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

    var_dump($articles_single_post);
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
                        <input type="text" class="form-control" value="<?php echo $articles_single_post["title"]; ?>" aria-label="Title" aria-describedby="addon-wrapping">
                    </div>

                    <div class="edit_text_area">
                        <div class="form-floating">
                            <textarea class="form-control txt-pst-descr" placeholder="Leave a comment here" id="floatingTextarea"><?php echo $articles_single_post["text"];?></textarea>
                            <label for="floatingTextarea">Text</label>
                        </div>
                    </div>

                </section>
                <section class="content_right col-xl-4">

                    <div class="save_button mr-bm">
                        <button type="button" class="btn btn-outline-secondary">Save</button>
                    </div>


                    <div>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Select Categories</option>

                            <?php
                            foreach ($categories as $cat) {

                            ?>
                                <option class="opt" value="<?php echo ($cat["id"]) ?>"><?php echo $cat["title"] ?></option>

                            <?php  }; ?>

                        </select>
                    </div>

                    <div class="pst-img">
                        <img class="img-thumbnail" src="/img/<?php echo $articles_single_post["img"]?>" alt="da">
                    </div>

                </section>
            </div>
        </div>
    </div>

    </div>

    <?php include('includes/footer.php'); ?>

<?php }; ?>