<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> formulaire </title>
    <!-- fond -->
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style_3.css">
    <script src="../public/js/bootstrap.min.js"></script>
</head>

<body class="fond">
<br><br>
<div class="container">
    <div class="main">
        <div class="main-center">
            <h5>Enregistrer vous pour plus d'expérience.</h5>
            <form class="" method="post" action="#">

                <div class="form-group">
                    <label for="name">Nom</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="name" id="name"  placeholder="Entrer votre nom"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username">Prénom</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Entrer votre prénom"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="email" placeholder="Enter votre adresse e-mail"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Entrer mot de passe"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm">Confirmation du mot de Passe</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="confirm" placeholder="Confirmer votre mot de passe"/>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-md">S'inscrire</button>

            </form>
        </div><!--main-center"-->
    </div><!--main-->
</div>

</body>

</html>