<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Inscription </title>
    <!-- fond -->
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style_2.css">
    <link rel="stylesheet" href="../public/css/style_3.css">
    <script src="../public/js/bootstrap.min.js"></script>
</head>


<body class="fond">
<div id="login">
    <h3 class="text-center text-white pt-5">E-commerce</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Identification</h3>
                        <div class="form-group">
                            <label for="email" class="text-info">Adresse Email:</label><br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="Entrer adresse mail"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Mot de passe:</label><br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Entrer mot de passe"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info fa"><span>se rappeler</span><span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="valider">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="signup.php" class="text-info">Créer un compte</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>