<?php
    include_once 'core/init.php';

    if(isset($_POST['signupForm'])){
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($errors) === true && empty($_POST) === false){
            $signup_data = array(
                'firstname' => $firstname,
                'email'     => $email,
                'username'  => $username,
                'password'  => $password
            );
            if(user_signup($signup_data)){
                header("Location:login.php");
            }
        }
    }
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
                            <h2>sign up</h2>
                        </div>
                        <div class="form">
                            <form action="" method="post" spellcheck="false">
                                <div class="row first-row">
                                    <div class="group-input">
                                        <label for="">firstname</label>
                                        <input type="text" name="firstname" id="">
                                    </div>
                                    <div class="group-input">
                                        <label for="">email</label>
                                        <input type="email" name="email" id="">
                                    </div>
                                </div>
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
                                    <button class="ripple" type="submit" name="signupForm">signup</button>
                                </div>
                                <div class="additional-links">
                                    <div><a href="login.php">login</a> </div>
                                </div>
                            </form>
                        </div>
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