<?php 
require('conn.php');

session_start();

if(isset($_POST['submit'])){

    $semester = htmlspecialchars($_POST["semester"]);
    $ipk = htmlspecialchars($_POST["ipk"]);
    
    $sql = "insert into data (semester,ipk) values ('$semester', '$ipk')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            echo "<script>
            alert('Data Tersimpan');
            </script>";
    }else{
        
        echo "<script>
        alert('Data Tidak Tersimpan');
        </script>";
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>INPUT DATA</title>
  </head>
  <body>

  	<!--============================================ NAVBAR ===================================================-->

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">♥</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="home.php">Home</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="data_ipk.php">Data IPK<span class="sr-only">(current)</span></a>
	      </li>
          <li class="nav-item ">
	        <a class="nav-link" href="about.php">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="logout.php">Logout</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<!--============================================ NAVBAR ===================================================-->

    <!--============================================ HEADER ===================================================-->

    <div class="jumbotron text-center"><h1> INPUT DATA </h1></div>

    <!--============================================ HEADER ===================================================-->

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6 col-xs-offset-3">
            <form id="contact-form" class="form" method="POST" role="form">
                <div class="form-group">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="number" class="form-control" id="semester" name="semester" required>
                </div>                            
                <div class="form-group">
                    <label for="ipk" class="form-label">IPK</label>
                    <input type="text" class="form-control" id="ipk" name="ipk" required>
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
