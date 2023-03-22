<?php include("./includes/head.php");
include("./includes/header.php"); ?>

<div id="content">
    <div class="container">
        <div class="row">
            <section class="content__left col-xl-12">

                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'first')">Перша вкладка</button>
                    <button class="tablinks" onclick="openCity(event, 'second')">Друга вкладка</button>
                    <button class="tablinks" onclick="openCity(event, 'third')">Третя вкладка</button>
                </div>


                <div id="first" class="tabcontent">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Назва</th>
                                <th scope="col">Категорія</th>
                                <th scope="col">Дата</th>
                                <th scope="col">ON/OFF</th>
                                <th scope="col">Видалити</th>

                            </tr>
                        </thead>
                        <tbody><?php


                                $table_select = mysqli_query($connection, "SELECT * FROM `articles`");
                                while ($table = mysqli_fetch_assoc($table_select)) {

                                    foreach ($categories as $cat) {
                                        $art_cat = false;
                                        if ($cat['id'] == $table['categorie_id']) {
                                            $art_cat = $cat['title'];
                                            break;
                                        }
                                    }
                                    if ($table['post_look'] == 1) {
                                        $on = "checked";
                                    } else {
                                        $on = false;
                                    };
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $table["id"]; ?></th>
                                    <td><?php echo $table["title"]; ?></td>
                                    <td><?php echo $art_cat; ?></td>
                                    <td><?php echo $table["pubdate"]; ?></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" admin_checkbox="<?php echo $table['id']; ?>" <?php echo $on; ?>>
                                        </div>
                                    </td>
                                    <td><button class="btn btn-primary" id="tr_btn" admin_btn="<?php echo $table['id'] ?>" type="submit">Видалити</button></td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>

                <div id="second" class="tabcontent">

                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1" id="title_scd" >
                                </div>
                                <div class="input-group">
                                    <textarea class="form-control" aria-label="With textarea" id="text_scd" ></textarea>
                                </div>

                            </div>
                            <div class="col sel_inp">

                                <select id="select_scd" class="form-select"  >
                                    <option selected disabled>Виберіть категорію</option>
                                    <?php foreach ($categories as $cat) { ?>

                                        <option value="<?php echo $cat['id'] ?>"><?php echo $cat['title'] ?></option>
                                    <?php } ?>
                                </select>

                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="check_scd" >
                                </div>
                                <button class="btn btn-primary" type="submit" id="save_btn">Save</button>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="third" class="tabcontent">
                    <?php foreach ($categories as $cat) {
                        $art_cat = false;
                        if ($cat['id'] == $table['categorie_id']) {
                            $art_cat = $cat['title'];
                            break;
                        }
                    } ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" id="inp_add">
                        <button class="btn btn-outline-secondary" type="button" id="add_btn">ADD</button>
                    </div>
                    <?php foreach ($categories as $cat) { ?>

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" value=<?php echo $cat['title'] ?>>
                            <button class="btn btn-outline-secondary" type="button" id="upd_btn">UPDATE</button>
                            <button class="btn btn-outline-secondary" type="button" id="del_btn" admin_del_btn="<?php echo $cat['id'] ?>">DELETE</button>
                        <?php } ?>
                        </div>

                </div>

            </section>
        </div>
    </div>
</div>
</div>
<?php include("./includes/footer.php"); ?>
<script src="./js/admin.js"></script>

</body>

</html>