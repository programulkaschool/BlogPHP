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
                            <th scope="col">№</th>
                            <th scope="col">Title</th>
                            <th scope="col">Categorie</th>
                            <th scope="col">Date</th>
                            <th scope="col">ON/OF</th>
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
                                <th scope="row"><?php echo ($cot["id"]) ?></th>
                                <td><?php echo ($cot["title"]) ?></td>
                                <td><?php echo ($cat["title"]) ?></td>
                                <td><?php echo ($cot["pubdate"]) ?></td>
                                <td>


                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                    </div>


                                </td>
                                <td style="text-align: center"><button id_delete="<?php echo ($cot["id"]) ?>" type="button" class="btn-close delbtn" aria-label="Close"></button></td>
                            </tr>
                        <?php }; ?>



                    </tbody>
                </table>

            </section>
        </div>
    </div>
</div>
</div>
<?php include('includes/footer.php'); ?>
</body>

</html>