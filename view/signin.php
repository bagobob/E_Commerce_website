<?php
    $title="Connexion" ?> 

<?php ob_start(); //ob_start()   mémorise  toute la sortie HTML qui suit ?>

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                <form class="form-signin">
                   <a href="home.php"> <img class="mb-4" src="../public/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> </a>
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

                    <div class="form-group">
                      <label for="inputEmail" class="sr-only">Email address</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                      </div>
                    </div>

                    <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                     </div>
                    </div>

                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me"> Remember me
                      </label>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <br>

                    <div class="checkbox mb-3">
                      <label>
                        <a href="signup.php"> Vous êtes nouveau? inscrivez vous!  </a>
                      </label>
                    </div>
                    
                  </form>
            </div>
          </div>
        </div>
    </div>


<?php $content = ob_get_clean();
    require('form.php');
     ?>
