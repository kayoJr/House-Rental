<nav>
            <div class="container nav-items">
                <div class="left-section">
                    <div class="logo">
                        <img src="./IMAGE/logo2 1.png" alt="Logo">
                    </div>
                    <ul>
                        <li class="<?php if($page == 'home'){echo 'active-link';}?>"><a href="index.php">HOME</a></li>
                        <li class="<?php if($page == 'service'){echo 'active-link';}?>"><a href="services.php">OUR SERVICES</a></li>
                        <li class="<?php if($page == 'contact'){echo 'active-link';}?>"><a href="contact.php">CONTACT</a></li>
                    </ul>
                </div>
                <div class="right-section">
                    <a href="login.php"><img src="./IMAGE/ooui_user-avatar.png" alt="Avatar"></a> 
                    <a class="btn" href="post.php">POST</a>
                </div>
            </div>
        </nav>