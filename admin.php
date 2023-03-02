<?php
require('includes/head.php');

require('includes/header.php');

$warf = mysqli_query($connection, "SELECT * FROM `articles`");

?>

<div id="content">
    <div class="container">
        <div class="row">
            <section class="content_left _col-md-12">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-algin:center;" scope="col">№</th>
                            <th scope="col">Title</th>
                            <th scope="col">Categorie</th>
                            <th scope="col">Date</th>
                            <th scope="col">OFF/ON</th>
                            <th scope="col" style="text-align: center">EditMode</th>
                            <th scope="col" style="text-align: center">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        while ($cot = mysqli_fetch_assoc($warf)) {
                            $cid = $cot["articles_id"];
                            foreach ($categories as $cat) {
                                $ct = false;
                                if ($cat["id"] == $cot["categorie_id"]) {
                                    $ct = $cat['title'];
                                    break;
                                };
                            }; ?>
                            <tr>
                                <th scope="row" style="text-algin:center;"><?php echo ($cot["id"]) ?></th>
                                <td><?php echo ($cot["title"]) ?></td>
                                <td><?php echo ($cat["title"]) ?></td>
                                <td><?php echo ($cot["pubdate"]) ?></td>
                                <td>


                                    <?php
                                    $p = "";
                                    if ($cot["post_look"] == 1) {
                                        $p = "checked";
                                    }
                                    ?>


                                    <div class="form-check form-switch">
                                        <input <?php echo $p ?> class="form-check-input chck" name id_on_off="<?php echo ($cot["id"]) ?>" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                    </div>



                                </td>
                                <td style="text-align: center">
                                    <a href="/edit.php?id=<?php echo $cot["id"]?>"><button class="btn btn-primary" type="submit">Edit</button></a>
                                </td>
                                <td style="text-align: center"><button id_delete="<?php echo ($cot["id"]) ?>" type="button" class="btn-close delbtn" aria-label="Close"></button></td>
                            </tr>
                        <?php }; ?>



                    </tbody>
                </table>


                <div class="input-group mb-3">
                    <input type="text" class="form-control add_input" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary add_button" type="button" id="button-addon2">Add</button>
                </div>

                <?php
                foreach ($categories as $cat) {
                ?>
                    <div class="input-group">
                        <input type="text" class="form-control del_upt_btn" value="<?php echo $cat["title"] ?>" aria-label="Recipient's username with two button addons">
                        <button class="btn btn-outline-secondary uptbtn" updt="<?php echo $cat["id"] ?>" type="button">Update</button>
                        <button class="btn btn-outline-secondary delctbtn" delbtn="<?php echo $cat["id"] ?>" type="button">Delete</button>
                    </div>
                <?php
                }; ?>

                <?php  ?>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-algin:center;" scope="col">№</th>
                            <th scope="col">Title</th>
                            <th scope="col">Text</th>
                            <th scope="col">Category</th>
                            <th scope="col" style="text-align: center;">OFF/ON</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <th scope="row" style="text-algin:center;">1</th>
                            <td>
                                <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control pstttl" placeholder="Post Title" aria-label="Post Title" aria-describedby="addon-wrapping">
                                </div>
                            </td>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control txtadd" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Comment</label>
                                </div>
                            </td>
                            <td>
                                <select class="form-select form-select-sm myselect" aria-label=".form-select-sm example">
                                    <option selected>Select Categories</option>

                                    <?php
                                    foreach ($categories as $cat) {

                                    ?>
                                        <option class="opt" value="<?php echo ($cat["id"]) ?>"><?php echo $cat["title"] ?></option>

                                    <?php  }; ?>

                                </select>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input ch" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                </div>
                            </td>
                            <td style="text-align: center;">
                                <button type="button" class="btn btn-dark addpst">ADD POST</button>
                            </td>

                        </tr>



                    </tbody>
                </table>

            </section>
        </div>
    </div>
</div>
</div>
<?php include('includes/footer.php');?>
</body>

</html>