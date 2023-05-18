<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($SESSION['auth'])){
            header('location:chatroom.php');
        }
    ?>

    <form>
        <div id="signin-status"></div>
        <div>
            <label for="username">Username</label>
            <input type="text"name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="text"name="password" id="password">
        </div>
        <div>
            <button type="button">SIGN IN</button>
        </div>
    
    </form>
    <script src="asssets/js/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>