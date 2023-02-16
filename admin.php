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
                            <th scope="col">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        while ($cot = mysqli_fetch_assoc($warf)) {
                            $cid = $cot["id"];

                            if($cot === $cat["id"]){
                                $cotcat = $cat["title"];
                            };

                        ?>
                            <tr>
                                <th scope="row"><?php echo ($cot["id"]) ?></th>
                                <td><?php echo ($cot["title"]) ?></td>
                                <td><?php echo ($cotcat) ?></td>
                                <td><?php echo ($cot["pubdate"]) ?></td>
                                <td>@mdo</td>
                                <td>@mdo</td>
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