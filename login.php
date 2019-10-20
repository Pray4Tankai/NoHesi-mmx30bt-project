<?php
    include_once 'core/init.php';
    include_once 'functions/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once 'includes/head.php';
    ?>
    <link rel="stylesheet" href="assets/css/account.css">
    <title>No Hesi Apparel / Account</title>
</head>
<body>
    <?php
        include_once 'includes/header.php';
    ?>
    <section>
        <div class="main-container">
            <div class="hero">
                <div class="overlay">
                    <div>
                        <div class="title">
                            <h2>login</h2>
                        </div>
                        <div class="form">
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" spellcheck="false" autocomplete=>
                                <div class="row first-row">
                                    <div class="group-input">
                                        <label for="">username</label>
                                        <input type="text" name="username" id="">
                                    </div>
                                    <div class="group-input">
                                        <label for="">password</label>
                                        <input type="password" name="password" id="">
                                    </div>
                                </div>
                                <div class="row row-btn">
                                    <button class="ripple" type="submit" name="user_login">login</button>
                                </div>
                                <div class="additional-links">
                                    <div><a href="signup.php">signup</a></div>
                                </div>
                            </form>
                        </div>
                        <?php
                            if(empty($errors) === false){
                                echo output_errors($errors);
                            }
                            if(empty($success) === false){
                                echo output_sucess($success);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include_once 'includes/scripts.php';
    ?>
</body>
</html>