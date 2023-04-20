<div class="wrapper">
    <header id="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top__logo">
                    <h1><?php echo $config['title']; ?></h1>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href="/">Головна</a></li>
                        <li><a href="#">Про мене</a></li>
                        <li><a href="#">Instagram</a></li>
                        <?php
                        session_start();
                        if (isset($_SESSION['username'])) {
                            echo '<li class="user"><a href="#">Hello ' . $_SESSION['username'] . '</a><a class="logout" href="./logout.php">Вийти</a></li>';
                        } else {
                            echo '<li><a href="../login.php">Увійти</a></li>';
                        }
                        if ($_SESSION['role'] == 'admin') {
                            echo '<li><a href="./admin.php">Admin panel</a></li>';
                        }
                        ?>

                    </ul>
                </nav>
            </div>
        </div>
        <?php $categories = mysqli_query($connection, "SELECT * FROM `articles_categories`"); ?>
        <div class="header__bottom">
            <div class="container">
                <nav>
                    <ul>
                        <?php while ($cat = mysqli_fetch_assoc($categories)) { ?>
                            <li><a href="/categories.php?id=<?php echo $cat['id'] ?>"><?php echo $cat['title']; ?></a></li>
                        <?php }; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>