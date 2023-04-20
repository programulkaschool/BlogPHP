<?php include("./includes/head.php");
include("./includes/header.php"); ?>
<?php
session_start();

if ($_SESSION['role'] == 'admin') {
?>


<div id="content">
    <div class="container">
        <div class="row">
            <section class="content__left col-xl-12">
                <div class="container text-center">
                    <div class="row">
                        <?php $edit_post = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id`=" . (int)$_GET['id']);
                        $articles_edit = mysqli_fetch_assoc($edit_post);
                        if ($articles_edit['post_look'] == 1) {
                            $onp = "checked";
                        } else {
                            $onp = false;
                        }; ?>
                        <div class="col">
                            <div class="input-group mb-3">

                                <input type="text" value="<?php echo $articles_edit["title"]; ?>" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1" id="title_edit">
                            </div>
                            <div class="input-group">
                                <textarea class="form-control" aria-label="With textarea" id="text_edit"><?php echo $articles_edit['text']; ?></textarea>
                            </div>

                        </div>
                        <div class="col sel_inp">

                            <select id="select_edit" class="form-select">
                                <option selected disabled>Виберіть категорію</option>
                                <?php foreach ($categories as $cat) {
                                    $selected = false;
                                    if ($cat['id'] == $articles_edit['categorie_id']) {
                                        $selected = 'selected';
                                    } ?>

                                    <option <?php echo $selected ?> value="<?php echo $cat['id'] ?>"><?php echo $cat['title']; ?></option>
                                <?php } ?>
                            </select>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="upload_inputFile">
                            </div>
                            <button class="btn btn-primary" type="submit" id="save_button_photo">Save photo</button>


                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="check_edit" edit_checkbox="<?php echo $articles_edit['id']; ?>" <?php echo $onp; ?>>
                            </div>
                            <div class="text-center" id="img_center">
                                <img src="/img/<?php echo $articles_edit['img'] ?>" class="img-thumbnail" alt="..." id="image_preview">
                            </div>
                            <button class="btn btn-primary" type="submit" id="edit_btn">Edit</button>
                            <?php $gallery_img = mysqli_query($connection, "SELECT `img` FROM `articles`"); ?>
                            <div id="overlay">
                                <button type="button" id="close_btn" class="btn-close btn-close-white" aria-label="Close"></button>
                                <div class="gallery" id="gallery">
                                    <?php while ($gall = mysqli_fetch_assoc($gallery_img)) { ?>
                                        <div class="responsive">
                                            <img src="/img/<?php echo $gall['img'] ?>" alt="" >
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" id="save_button" sv_edit="<?php echo $articles_edit['id'] ?>">Save</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php }
else {
    echo 'Сторінку не знайдено';
}?>
</div>
<?php include("./includes/footer.php"); ?>
<script src="./js/admin.js"></script>

</body>

</html>