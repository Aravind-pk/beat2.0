<?php
session_start();
$email=$_SESSION['alogin'];
if(strlen($email)==0){
    echo "<script>document.location = '../login.php'; </script>";
}else{
// echo "<script>alert('Time Up'); document.location = '../index/index.php'; </script>";
include('../includes/config.php');
$sql ="SELECT * FROM myteam WHERE useremail = :email";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
echo "<script> let myT = ".json_encode($results)."</script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="iste.png" type="image/icon type">
    <!-- <script src="myteam.js"></script> -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beat the game</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        body{
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(255,0,0,1) 100%);
        }
        li {
            list-style-type: none;

        }



        #bg {
            background-image: url('https://wallpapercave.com/wp/wp4844549.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 2vmin;
        }



        #bg-2 {

            background-image: url('https://www.seelatest.com/images/ipl-2020-tournament-begin-from-19-september-opening-sharjah.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 2vmin;

        }

        .block {
            
            display: block;
            width: 100%;
            color: white;
            border: none;
            border-right: 2px solid white;
            background-color: transparent;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .block-f {
            display: block;
            width: 100%;
            color: white;
            border: none;
            border-right: 2px solid white;
            background-color: transparent;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .block:hover {
            display: block;
            width: 100%;
            border: none;

            border-left: 2px solid white;
            border-right: 2px solid white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;

        }


        .block:focus {
            display: block;
            width: 100%;
            border: none;
            border-left: 2px solid rgb(31, 28, 28);
            border-right: 2px solid rgb(31, 28, 28);
            background-color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;

        }

        .block:active {
            display: block;
            width: 100%;
            border: none;
            color: black;
            border-left: 2px solid rgb(31, 28, 28);
            border-right: 2px solid rgb(31, 28, 28);
            background-color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;

        }

        .block-f:active {
            display: block;
            width: 100%;
            border: none;
            color: black;
            border-left: 2px solid rgb(31, 28, 28);
            border-right: 2px solid rgb(31, 28, 28);

            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;

        }

        .footer {
            width: 100%;
            color: white;
            font-weight: 600;
            font-size: 0.9em;

        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(255,0,0,1) 100%);
            /* background: url('https://image.freepik.com/free-vector/cricket-ball-fire_1308-33325.jpg'); */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-origin: content-box;
            font-family: 'Roboto', sans-serif;


        }

        #header1 {

            background-image: url('before-cut.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 2vmin;
            background-origin: padding-box;
            background-position-y: 65%;
            background-position-x: 15%;

        }

        #upper-nav {

            background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(255,0,0,1) 100%);
            border-radius: 5px;
            color: white;
        }

        #nav-11-img {
            width: 9vmin;
            height: 9vmin;
        }
    </style>
</head>

<body>
    <div class="container-fluid">



        <nav class="navbar navbar-expand-lg navbar-dark navbar-trans navbar-inverse rounded mb-1" id="upper-nav">
            <a class="navbar-brand" href="#"><img src='1024px-Eleven_logo.svg.png' id="nav-11-img" class='logo'><span
                    class='welcome-txt'>&nbsp;<?php echo htmlentities($_SESSION['name']); ?><span class='username'> (<?php echo htmlentities($_SESSION['score']); ?>)</span><span></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../leaderboard.php">LeaderBoard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about/index.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://istetkmce.in/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--  style="background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(255,0,0,1) 100%); -->

        

      


        <!-- div row for the team players listing -->
        <div class="row mx-auto pb-5"
            style="background-position: center;  background-origin: content-box;background-color:black;background-repeat: no-repeat;background-size: cover; background-blend-mode: lighten; ">
           
           

            <!-- right side -->
            <div onmouseover="glowEnter3(this)" onmouseout="glowLeave3(this)"
                class="col-12 col-md-5 shadow rounded mt-2 pt-3 pb-3 mx-auto" id="bg-">


                <div class="row">
                    <div class="col-6 mx-auto" style="color:white; font-weight:520;">My Team</div>
                    <div class=" col-6" id="lat" style="color:white; font-weight:520;">
                    </div>
                </div>

                <div id="myTeam"></div>
            </div>

        </div>






        <!-- footer final completed -->
        <div class="footer row p-0 mx-auto jumbotron jumbo-color mt-1">


            <div class="col-12">
               
            
            
                <div class="col-6 col-md-4 mx-auto">
                            <a href="index.php">
                                <button style="outline:none; border:none;"
                                    class="btn  block-f btn-danger rounded pt-1 pb-1">Recreate Team</button></a>
                </div>
                
                
                   <div class="col-6 col-md-4 mx-auto">
                        <a href="submit.php">
                            <button style="outline:none; border:none;"
                                class="btn  block-f btn-danger rounded pt-1 pb-1">SUBMIT</button></a>
                    </div>

                <div class="row mx-auto mb-3">
                    <div class="col-12 text-center my-auto text-responsive text-center mx-auto  "
                        style="font-size:1.2em; font-weight:550;">BEAT THE GAME</div>

                </div>

                <div class="row mx-auto my-auto">
                    <div class="col-md-1 col-4  pb-3 mx-auto">
                        <img class="img-responsive mx-auto img-thumbnail img-fluid rounded-circle" style="width:25vmin;"
                            src="iste.png" alt="iste">
                    </div>
                </div>


            </div>


        </div>
    </div>

    <script>
        // let myTeam =  JSON.parse(localStorage.getItem('myTeam'));
// console.log(myT);
// alert("working");

// setting my team to the right of the window
let playerhtml='';
let playersList='';
let c=0;

function setMyteam(play,count){
    c=c+1;
    if (count==1) {
      badge = "(C)";
    } else if (count==2) {
      badge = "(VC)";
    } else badge = "";

    console.log(play)

    playerhtml += `<div class = "col-12 text-center shadow-lg  mb-1 bg-white rounded-pill mx-auto" style = " border:1px solid orange;overflow:hidden;" >
        <div class = "row my-auto p-2" style = "background-color:black; color:white;">
        <div class = "col-3" style = "font-weight:500;text-transform:uppercase;font-size:.9em;"><li>${c}</div></div>
        <div class = "col-12" style = "font-weight:500;text-transform:uppercase;font-size:.9em;">
        <li>${play}${badge}<br></li></div>
         
        <div class = "col-3"style = "font-weight:500;text-transform:uppercase;font-size:.9em;">
        <a></a></div>
           
        <div class = "col-3">
         </div></div></div>`;
    return playerhtml;
}

// const setMyteam = (play,count) => {
//   playersList = myT.reduce((playerhtml, player) => {
    
//   }, "");

//   playersElement = document.getElementById("myTeam");
//   playersElement.innerHTML = playersList;
// };

setMyteam(myT[0].p1,1);
setMyteam(myT[0].p2,2);
setMyteam(myT[0].p3,0);
setMyteam(myT[0].p4,0);
setMyteam(myT[0].p5,0);
setMyteam(myT[0].p6,0);
setMyteam(myT[0].p7,0);
setMyteam(myT[0].p8,0);
setMyteam(myT[0].p9,0);
setMyteam(myT[0].p10,0);
setMyteam(myT[0].p11,0);
playersElement = document.getElementById("myTeam");
playersElement.innerHTML = playerhtml;
document.getElementById("lat").innerHTML= "Score: "+myT[0].tscore;

function revealMessage() {
  document.getElementById("lol").style.display = "block";
}

function countFunc() {
  var cur_val = document.getElementById("count").innerHTML;
  var newVal = cur_val - 1;

  document.getElementById("count").innerHTML = newVal;
}

function glowLeave(parent) {
  parent.style.border = "10px solid #495057";
}

function glowEnter(parent) {
  parent.style.border = "10px solid #e63946";
}

function glowEnter3(parent) {
  parent.style.border = "10px solid blue";
}
//extra added by luhta
function glowEnter2(parent) {
  parent.style.border = ".25vmin solid orange";
}
function glowLeave2(parent) {
  parent.style.border = ".25vmin solid #495057";
}

function glowEnter3(parent) {
  parent.style.border = ".25vmin solid orange";
}
function glowLeave3(parent) {
  parent.style.border = ".25vmin solid #495057";
}

</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

</body>

</html>
    <?php } ?>