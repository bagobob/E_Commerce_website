<?php
    $title="Inscription" ?> 

<?php ob_start(); //ob_start()   mémorise  toute la sortie HTML qui suit ?>

      <form class="form-signin">
            <a href="home.php"> <img class="mb-4" src="../public/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> </a>
              <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1> 
                <div class="form-group">
                  <label for="inputEmail" class="sr-only">Email address</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="email" id="inputEmail" name="inputemail" class="form-control" placeholder="Email address" required autofocus>
                    </div>
                    </div>
                <div class="form-group">
                  <label for="Name" class="sr-only">Name</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="text" id="Name" name="name" class="form-control" placeholder="Name" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                  <label for="FirstName" class="sr-only">Firstname</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="text" id="FirstName" name="firstname" class="form-control" placeholder="First Name" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                  <label for="Phone" class="sr-only">Phone</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                  <label for="Street" class="sr-only">Street</label> 
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="text" id="street" name="street" class="form-control" placeholder="Street" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                  <label for="City" class="sr-only">Email address</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="text" id="City" name="city" class="form-control" placeholder="City" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                  <label for="PostalCode" class="sr-only">Postal Code</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="number" id="PostalCode" name="postalCode" class="form-control" placeholder="PostalCode" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword" class="sr-only">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>
                      
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button><br>
                <div class="checkbox mb-3">
                  <label>
                    <a href="signin.php"> Vous avez déja un compte?  </a>
                  </label>
                </div>
        </form>

<?php $content = ob_get_clean();
    require('form.php');
     ?>
