<?php include("./includes/head.php");

include("./includes/header.php"); ?>

<div id="content">
    <div class="container">
        <div class="row">
            <section class="content__left col-xl-12">
                <div class="container text-center">
                    <div class="row">
                        <form class="login_user">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="username1" placeholder="username">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password1" placeholder="password" aria-labelledby="passwordHelpInline">
                            </div>
                            <div class="log_sign_btn">
                                <button type="submit" class="btn_log">Log in</button>
                                <button type="submit" class="btn_sign">Sign up</button>
                            </div>
                        </form>

                        <form class="register_user">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="username2" placeholder="username">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email2" aria-describedby="emailHelp" placeholder="email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password2" placeholder="password" aria-labelledby="passwordHelpInline">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password3" placeholder="repeat password" aria-labelledby="passwordHelpInline">
                            </div>
                            <div class="log_sign_btn">
                                <button type="submit" class="btn_signup">Sign up</button>
                                
                            </div>
                        </form>
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