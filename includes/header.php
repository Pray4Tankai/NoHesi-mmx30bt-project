<header>
    <div class="nav">
        <div>
            <div class="brand">
                <li><a href="/nohesi"><span>No Hesi Apparel</span></a></li>
            </div>
            <div class="menu">
                <li><a href="/nohesi">home</a></li>
                <li><a href="shop.php">shop</a></li>
            </div>
            <div class="add-nav cart">
                <li><a href="cart.php"><i class="fa-shopping-cart ripple"></i></a></li>
            </div>
            <?php
                if(logged_in()){
                    echo'<div class="add-nav user">
                            <li><a><i class="fa-user ripple" id="userIcon"></i></a></li>
                        </div>';
                }else{
                    echo'<div class="add-nav lock">
                            <li><a><i class="ion-ios-locked ripple" id="lockIcon"></i></a></li>
                        </div>';
                }
            ?>
        </div>
    </div>
    <div class="lock-opt">
        <li><a href="login.php">login</a></li>
        <li><a href="signup.php">signup</a></li>
    </div>
    <div class="user-opt">
        <li class=""><a href="logout.php">logout <i class="fa-sign-out"></i></a></li>
    </div>
</header>