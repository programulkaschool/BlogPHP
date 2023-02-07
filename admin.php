<?php
require('includes/head.php');
include('includes/header.php');
$categories_select = mysqli_query($connection, "SELECT * FROM `articles`");

?>
<div class="content">
    <div class="container">
        <div class="row">
            <section class="content_left col-md-12">
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
                        $articles=0;
                while ($articles = mysqli_fetch_assoc($categories_select)) {
                ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $articles["id"]?></th>
                                <td><?php echo $articles["title"]?></td>
                                <td>Otto</td>
                                <td><?php echo $articles["pubdate"]?></td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>

                        </tbody>
                        <?php }; ?>
                    </table>

            </section>

        </div>

    </div>

</div>


</div>

<?php include('includes/footer.php'); ?>
</body>

</html>