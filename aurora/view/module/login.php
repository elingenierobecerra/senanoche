<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="view/css/login.css">
        <link rel="stylesheet" href="view/css/sweetalert2.min.css">
        <script src="view/js/sweetalert2.all.min.js"></script>
        
    </head>
    <body>
        <div id="login-button">
            <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
            </img>
            </div>
            <div id="container">
            <h1>Log In</h1>
            <span class="close-btn">
                <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
            </span>

            <form method="post">

                <input type="text" name="txtUser" placeholder="User">
                <input type="password" name="txtPass" placeholder="Password">
                <input type="submit" value="Enter">
                
            </form>

            <?php
                if (isset($_POST["txtUser"])){
                    $user = $_POST["txtUser"];
                    $pass = $_POST["txtPass"];
                    $objCon = new ConexionController();
                    $objCon -> ctrLogin($user, $pass);
                }
            ?>

        </div>
        <script src="view/js/jquery-3.6.0.min.js"></script>
        <script src="view/js/TweenMax.min.js"></script>
        <script src="view/js/login.js"></script>

    </body>
</html>