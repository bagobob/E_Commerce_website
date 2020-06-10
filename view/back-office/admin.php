<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Administrateur </title>
    <!-- fond -->
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <script src="../../public/js/bootstrap.min.js"></script>
</head>

<body>
<header class="header">
    <div class="text-right">
        <a href="../product.php" class="logo">
            <svg class="bi bi-house-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"> </path>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"> </path>
            </svg>
            E-commerce </a>
        <nav class="menu">
            <a href="#"> <button type="button" class="btn btn-danger"> se déconnecter
                    <svg class="bi bi-person-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"> </path>
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"> </path>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"> </path>
                    </svg>
                </button> </a>
        </nav>
    </div>
</header>
<br>
<div class="container fluid">
    <br>
    <div class="container">
        <div class="row">

            <div class="col-lg-6 table2">
                <br>
                <h5 class="tab"> Definir l'affichage</h5> <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum soluta, quae culpa reiciendis maiores eveniet reprehenderit neque quod ipsa doloremque. Odit autem nam quis blanditiis libero labore distinctio laudantium. Quaerat!

            </div>

            <div class="col-lg-6">
                <br>
                <h5 class="tab"> Enregistrer un produit</h5> <br>
                <form class="" method="post" action="#">

                    <div class="form-group">
                        <label for="name">Nom Produit</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name"  placeholder="Entrer le nom du produit"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username">Catégorie</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Entrer la catégorie"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="quantité"> quantité </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="number" class="form-control" name="email" placeholder="Entrer la quantité"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Prix"> Prix </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" placeholder="Entrer le prix"/>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-md">Enregistrer</button>

                </form>

            </div>
        </div>


    </div>



</div>



</body>

</html>