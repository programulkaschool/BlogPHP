<?php
require('includes/head.php');
include('includes/header.php');
$categories_select = mysqli_query($connection, "SELECT * FROM `articles`");

?>
<div class="content">
    <div class="container">
        <div class="row">
            <section class="content_left col-md-12">

                <div class="con">
                    <div class="tabs">
                        <nav class="tabs_items">
                            <a href="#tab_01" class="tabs_item"><span>Перша вкладка</span></a>
                            <a href="#tab_02" class="tabs_item"><span>Друга вкладка</span></a>
                            <a href="#tab_03" class="tabs_item"><span>Третя вкладка</span></a>
                        </nav>
                        <div class="tabs__body">
                            <div id="tab_01" class="tabs__block">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">№</th>
                                            <th scope="col">Назва</th>
                                            <th scope="col">Категорія</th>
                                            <th scope="col">Дата</th>
                                            <th scope="col">ON/OF</th>
                                            <th scope="col">Видалити</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $articles = 0;
                                    while ($articles = mysqli_fetch_assoc($categories_select)) {
                                    ?>
                                        <?php
                                        foreach ($categories as $cat) {
                                            $cat_title = false;
                                            if ($cat["id"] === $articles["categorie_id"]) {
                                                $cat_title = $cat["title"];
                                                break;
                                            };
                                        };
                                        ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo $articles["id"] ?></th>
                                                <td><?php echo $articles["title"] ?></td>
                                                <td><?php echo $cat_title ?></td>
                                                <td><?php echo $articles["pubdate"] ?></td>
                                                <td>
                                                    <?php
                                                    $o = "";
                                                    if ($articles["post_look"] == 1) {
                                                        $o = "checked";
                                                    }
                                                    ?>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input on_of" id_on_of="<?php echo $articles["id"] ?>" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?php echo $o; ?>>
                                                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                    </div>
                                                </td>
                                                <td><button id_delete="<?php echo $articles["id"] ?>" type="button" class="btn btn-outline-danger delete">Delete</button></td>
                                            </tr>

                                        </tbody>
                                    <?php }; ?>
                                </table>
                            </div>
                            <div id="tab_02" class="tabs__block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum numquam commodi laboriosam nostrum. Maxime ab dolores deleniti esse eius dolore. Omnis quasi eligendi sit fuga, neque rerum eaque ab.
                            </div>
                            <div id="tab_03" class="tabs__block">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control text_button" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary ad_button" type="button" id="button-addon2" >Add</button>
                                </div>
                                <?php
                                foreach ($categories as $cat) {
                                ?>

                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?php echo $cat["title"]; ?>" aria-label="Recipient's username with two button addons">
                                        <button class="btn btn-outline-secondary update_categories" id_1="<?php echo $cat["id"] ?>" type="button">Update</button>
                                        <button id_delete_categories="<?php echo $cat["id"] ?>" class="btn btn-outline-secondary delete_categories" type="button">Delete</button>
                                    </div>

                                <?php
                                }; ?>
                            </div>
                        </div>
                    </div>
                </div>



            </section>

        </div>

    </div>

</div>


</div>

<?php include('includes/footer.php'); ?>
</body>

</html>