<?php require("./includes/head.php") ?>

<?php include("./includes/header.php") ?>

<div id="content">
    <div class="container">
        <div class="row">

            <?php $articles_post = mysqli_query($connection, "SELECT * FROM `articles`"); ?>

            <?php $articles_id = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id`= " . (int)$_GET["id"] . " AND `post_look` = 1 ");
            if (mysqli_num_rows($articles_id) <= 0) {
            ?>
                <section class="content_left col-xl-8">
                    <div class="block">
                        <div class="block__content">
                            <div class="full-text">
                                Стаття не знайдена!!!
                            </div>
                        </div>
                    </div>

                </section>

            <?php } else {
                $articles_edit_post = mysqli_fetch_assoc($articles_id);
            ?>

                <h1>Edit post</h1>
                <section class="content_left col-xl-8">
                    <div class="input-group mb-3">

                        <input type="text" class="form-control change_post_title" value="<?php echo $articles_edit_post['title'] ?>" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control widt_and_heigh change_post_text" placeholder="Leave a comment here" id="floatingTextarea2"><?php echo $articles_edit_post['text'] ?></textarea>
                        <label for="floatingTextarea2">Edit text</label>
                    </div>
                </section>

                <section class="content_right col-xl-4">
                    <button type="button" class="btn btn-outline-success wid_and_heig btn-edit-save" save_id_post="<?php echo $articles_edit_post["id"] ?>">Save</button>
                    <select class="form-select margin_select_categorie" aria-label="Default select example">
                        <?php
                        foreach ($categories as $cat) {
                            $selected_categories = false;
                            if ($cat["id"] === $articles_edit_post["categorie_id"]) {
                                $selected_categories = "selected";
                            };

                        ?>

                            <option value="<?php echo $cat["id"] ?>" <?php echo $selected_categories; ?> class="change_post_categories"><?php echo $cat["title"]; ?> </option>
                        <?php }; ?>
                    </select>
                    <button type="button" class="btn btn-dark wid_and_heigе">Edit photo</button>




                    <div class="galer_photo_fon">

                        <div class="exit" id="exit"> <button type="button" class="btn-close" aria-label="Close"></button></div>

                        <div class="ful_galery_img">
                            <?php
                            while ($photo = mysqli_fetch_assoc($articles_post)) {
                            ?>
                                <img src="/img/<?php echo $photo['img'] ?>" class="galeri_img" id="id_photo">
                            <?php
                            }
                            ?>

                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label photo_input">Add photo</label>
                        <input class="form-control custom_file_post_photo" type="file" id="customFile" name="customFile">
                    </div>


                    <img src="/img/<?php echo $articles_edit_post['img'] ?>" class="img-thumbnail" alt="...">

                </section>

            <?php }; ?>
        </div>
    </div>
</div>
</div>
<?php include("./includes/footer.php") ?>