<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i> Register to create account
        </div>

        <form action="includes/signup.inc.php" method="POST">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
               
                <input id="name" placeholder="Fullnames" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
               
                <input id="email" placeholder="E-mail" type="email" name="email" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
               
                <input id="username" placeholder="Username" type="text" name="username" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" name="password" required class="validate" autocomplete="off">
            </div>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="Confirm password" placeholder="Confirm Password" name="password2" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">I accept Terms of Service</span>
            </div>

            <input type="submit" value="Register" name="submit" />
        </form>

        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Do you already have an account?
            <a href="file:///home/sammug254/Downloads/Compressed/Extracted%20files/Login-Register-Template-master/login.html"><button id="register-link">Log In here</button></a>
        </div>
    </div>
</body>

</html>
