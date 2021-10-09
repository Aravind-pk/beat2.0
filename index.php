<?php
session_start();
error_reporting(0);
// $pass=md5('Daniel');
// echo "$pass";
include('./includes/config.php');
if(isset($_POST['SIGNUP'])){
  echo "<script type='text/javascript'> document.location = 'https://www.btgregister.istetkmce.in'; </script>";
}
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT * FROM userlogin WHERE useremail=:email and pass=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
  foreach($results as $result){
    if($result->flag==0){
      $_SESSION['alogin']=$_POST['username'];
      $_SESSION['name']=$result->name;
      $_SESSION['score']=$result->score;
      echo "<script type='text/javascript'> document.location = 'changepass.php'; </script>";
    }else{
      $_SESSION['alogin']=$_POST['username'];
      $_SESSION['name']=$result->name;
      $_SESSION['score']=$result->score;
      echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
    }
  }

} else{
  
  echo "<script>alert('Invalid Details'); document.location = 'index.php'; </script>";

}

}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>BTG_login</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Stick+No+Bills:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  </head>
  <body>

        <section class="login py-5">
            <form method="POST">
            <div class="container" style="padding-top:70px;">
                <div class="row g-0">
                    <div class="col-lg-5" style="border-bottom-left-radius: 30px;">
                        <img src="./images/bfdbbc44670c08055e05e6edee9774a9.webp" class="img-fluid" alt="" style="background-color: #fff;">
                    </div>
                    <div class="logincard col-lg-7 text-center py-5" style="background-color: #fff;">
                        <h1 style="background-color: #fff;">BEAT THE GAME 2.0</h1>

                        <div class="form-row py-3 pt-5" style="background-color: #fff;">
                            <div class="offset-1 col-lg-10" style="background-color: #fff;">
                                <img src="./images/person-circle.svg" alt="">
                                <input type="text" class="inp px-3" placeholder="Username" name="username" style="background-color: #fff;">
                            </div>
                        </div>
                        <div class="form-row py-3" style="background-color: #fff;">
                            <div class="offset-1 col-lg-10" style="background-color: #fff;">
                                <img src="./images/key-fill.svg" alt="">
                                <input type="password" class="inp px-3" name="password" placeholder="Password" style="background-color: #fff;">
                            </div>
                        </div>
                        <div class="form-row py-3" style="background-color: #fff;">
                            <div class="offset-1 col-lg-10" style="background-color: #fff;">
                                 <button   name ="login" class="btn-1">LogIn</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </section>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

