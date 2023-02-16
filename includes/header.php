<div class="wrapper">
        <header class="header">
            <div class="header_top">
                <div class="container">
                    <div class="header_top_logo">
                        <h1><?php echo $config['title'];?></h1>
                    </div>
                    <nav class="header_top_menu">
                        <ul>
                            <li class="www"><a href="/">Головна</a></li>
                            <li><a href="#">Про мене</a></li>
                            <li class="www"><a href="#">Instagram</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
<?php $categories = mysqli_query($connection, "SELECT * FROM `article_categories`");
?>
            <div class="header_bottom">
                <div class="container">
                    <nav class="header_bottom_menu">
                        <ul>
                            <?php 
                            while($cat = mysqli_fetch_assoc($categories)){
                            ?>
                            <li><a href="/categories.php?id=<?php echo $cat["id"];?>"><?php echo $cat["title"];?></a></li>
                            <?php };?>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>