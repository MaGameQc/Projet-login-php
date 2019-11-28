<?php 
    session_start();

    if(isset($_POST["submit"])) {
        
        
        $_SESSION["courriel"] = $_POST["courriel"];
        $_SESSION["password"] = $_POST["password"];
        
//        echo "<h4> votre prénom est : " . $_SESSION["courriel"] . "</h4><br>";
//        echo "<h4> votre nom de famille est : " . $_SESSION["password"] . "</h4><br>";
        
        
        if($_SESSION["password"] && $_SESSION["courriel"] != ""){
         header("Location: acces.php"); 
            } else {
            echo "<h4>Please, enter your name.</h4><br>";
        }
        
    }

    


?>

<!doctype html>
<html lang="en">
  <head>
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <title>Connexion</title>
  </head>
  <body style="background: url('back.jpg') no-repeat center center fixed; overflow: auto;">
      
      
  <section style="padding-bottom: 8vh; min-height: 92vh;">
      <div class="container-fluid p-4" style="position:relative;" >
      
        <div class="row">
          
            <div class="mx-auto " style="" id="titleDiv">
            
                <h3 style="background-color: #007bff; padding: 5%; text-align:center; color:white;" class="rounded-pill">The Weather App</h3>
            
            </div>
            

              
        
        </div>
          
      </div>
    
      <div class="container-fluid p-4 col-8" style=" background: #273b66;  color:white; box-shadow: 0 0 10px black;">
          
          <div class="row">
                <div class="col-sm-2 col-xl-2  mx-auto " style="text-align:center;">
              
                  <img src="avatar.png" class="img-fluid rounded-circle " alt="Responsive image">
              
                </div>
          </div>

          
          
          <div class="row" >
              <div class="col-md-8 mx-auto" >
              
                    <form class="col-md-6 mx-auto" action="" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input name="courriel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Last Name</label>
                        <input name="password" type="text" class="form-control" id="exampleInputPassword1">
                      </div>

                      <button name="submit" type="submit" class="btn btn-primary" >Submit</button>
                    </form>
              
              </div>

          
          </div>

          
          
      </div>
      
</section>
      
      <?php include "footer.php" ?>
      

      
            

      
    <!-- Optional JavaScript -->
<!--      <script type="text/javascript" src="index.js"></script>-->
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
      

      

  </body>
</html>