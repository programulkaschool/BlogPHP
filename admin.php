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
                    $articles = 0;
                    while ($articles = mysqli_fetch_assoc($categories_select)) {
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $articles["id"] ?></th>
                                <td><?php echo $articles["title"] ?></td>
                                <td>Otto</td>
                                <td><?php echo $articles["pubdate"] ?></td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>

                        </tbody>
                    <?php }; ?>
                </table>

                
                <div class="con">
                    <div class="tabs">
                        <nav class="tabs_items">
                            <a href="#tab_01" class="tabs_item"><span>Перша вкладка</span></a>
                            <a href="#tab_02" class="tabs_item"><span>Друга вкладка</span></a>
                            <a href="#tab_03" class="tabs_item"><span>Третя вкладка</span></a>
                        </nav>
                        <div class="tabs__body">
                            <div id="tab_01" class="tabs__block">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi eum voluptatem sit maiores rem vero iste laborum vel, facere ipsum accusantium cum? Rem, magnam officia veritatis ut molestiae reiciendis blanditiis.
                            </div>
                            <div id="tab_02" class="tabs__block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum numquam commodi laboriosam nostrum. Maxime ab dolores deleniti esse eius dolore. Omnis quasi eligendi sit fuga, neque rerum eaque ab.
                            </div>
                            <div id="tab_03" class="tabs__block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nulla consequuntur distinctio quae praesentium et repudiandae voluptatibus odit saepe, maiores id harum. Illo laudantium aliquam animi ipsam saepe aut! Fugit?
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