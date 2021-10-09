<?php
session_start();
error_reporting(0);
include('./includes/config.php');
$sql ="SELECT * FROM myteam";
$query= $dbh -> prepare($sql);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
echo "<script> let myTeams = ".json_encode($results)."</script>";

$sql ="SELECT * FROM userlogin ORDER BY score DESC LIMIT 5";
$query= $dbh -> prepare($sql);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
echo "<script> let toppers = ".json_encode($results)."</script>";

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Leaderboard</title>
    <link rel="stylesheet" href="leaderboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    
    <div class="leaderboard">
        <header>
            <h1>Leader Board</h1>
            <img src="./images/50+ Dhoni Png.png" alt="">
        </header>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th class="Username">Username</th>
                    <th class="Dept">Department</th>
                    <th class="Score">Score</th>
                </tr>
            </thead>
            <tbody id="toppers">
                <tr>
                    <td class="rank">1</td>
                    <td class="username">Charlie</td>
                    <td class="dept">ECE</td>
                    <td class="score">4000</td>
                </tr>
                <tr>
                    <td class="rank">2</td>
                    <td class="username">Robert</td>
                    <td class="dept">ECE</td>
                    <td class="score">3500</td>
                </tr>
                <tr>
                    <td class="rank">3</td>
                    <td class="username">Chris</td>
                    <td class="dept">ECE</td>
                    <td class="score">3250</td>
                </tr>
                <tr>
                    <td class="rank">1</td>
                    <td class="username">Thomas</td>
                    <td class="dept">ECE</td>
                    <td class="score">3000</td>
                </tr>
                <tr>
                    <td class="rank">1</td>
                    <td class="username">Charlie</td>
                    <td class="dept">ECE</td>
                    <td class="score">4000</td>
                </tr>
                <tr>
                    <td class="rank">2</td>
                    <td class="username">Robert</td>
                    <td class="dept">ECE</td>
                    <td class="score">3500</td>
                </tr>
                <tr>
                    <td class="rank">3</td>
                    <td class="username">Chris</td>
                    <td class="dept">ECE</td>
                    <td class="score">3250</td>
                </tr>
                <tr>
                    <td class="rank">1</td>
                    <td class="username">Thomas</td>
                    <td class="dept">ECE</td>
                    <td class="score">3000</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="home.html"><button class="btn btn-primary btn-lg me-md-2" style="background-color: #ff0000; border: 1px solid #ff0000;" type="button">Go to home</button></a>
    </div>

     <!-- Optional JavaScript; choose one of the two! -->
     
     
     
     
    <script>
    let cnt = 0;
    const setPlayers = () => {
      playersList = toppers.reduce((leaderBoard, topper) => {
    cnt = cnt + 1;
    leaderBoard += `<div class = "list p-0" style = "width:80vmin;">
            <div class = "item p-4">
            
            <div class="pos" style = "font-weight:510;">
            ${cnt}
            </div>
          <div class="name col-10 mx-auto" style = "font-weight:510;">
        ${topper.name}
          </div>
          <div class="name col-1 mx-auto" style = "font-weight:510;">
        ${topper.batch}
          </div>&nbsp;
         <div class="col-2" style = "">
        <strong>${topper.score}</strong>
        </div>
            </div>
            </div>`;

    return leaderBoard;
  }, "");

  playersElement = document.getElementById("toppers");
  playersElement.innerHTML = playersList;
};

setPlayers();
  </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
