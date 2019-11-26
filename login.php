<?php 
    session_start();

    if(isset($_POST["submit"])) {
        $_SESSION["courriel"] = $_POST["courriel"];
        $_SESSION["password"] = $_POST["password"];
        
        echo "<h4> votre prénom est : " . $_SESSION["courriel"] . "</h4><br>";
        echo "<h4> votre nom de famille est : " . $_SESSION["password"] . "</h4><br>";
        
        
         header("Location: acces.php"); 
        
    }

    


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <title>Connexion</title>
  </head>
  <body>
      
      <div class="container-fluid p-4">
      
        <div class="row">
          
            <div class="mx-auto ">
            
                <h3 style="background-color: #007bff; padding: 5%; text-align:center;" class="rounded-pill">entrez votre nom</h3>
            
            </div>
              
        
        </div>
          
      </div>
    
      <div class="container-fluid p-4 " style="margin-top : 5%; background: grey;">
          
          <div class="row">
                <div class="col-sm-2 col-xl-2  mx-auto " style="text-align:center;">
              
                  <img src="avatar.png" class="img-fluid rounded-circle " alt="Responsive image">
              
                </div>
          </div>

          
          
          <div class="row">
              <div class="col-md-8 mx-auto">
              
                    <form class="col-md-6 mx-auto" action="" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Votre Prénom</label>
                        <input name="courriel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Votre Nom</label>
                        <input name="password" type="text" class="form-control" id="exampleInputPassword1">
                      </div>

                      <button name="submit" type="submit" class="btn btn-primary" >Submit</button>
                    </form>
              
              </div>

          
          </div>

          
          
      </div>
      
      
      <?php include "footer.php" ?>
      

      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html>