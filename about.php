<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>About</title>
    <link rel="stylesheet" href="about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <section class="row p-4 outerbox">
        <div class="container animated animatedFadeInUp fadeInUp" id="j2">
            <h1 class="text-center">About the Game </h1>
            <div class="row p-2 ">

                <div class="col-md-8 mx-auto shadow p-1 rounded"
                    style="background: #0f1236"
                    id="instructions">

                    <video id="my_video_1" class="video-js vjs-default-skin embed-responsive embed-responsive-21by9"
                        style="width: 100%; height:auto;" controls preload="none"
                        poster='http://video-js.zencoder.com/oceans-clip.jpg'
                        data-setup='{ "aspectRatio":"720:480", "playbackRates": [1, 1.5, 2] }'>
                        <source src="about_beatthegame.mp4" type='video/mp4' />
                        <!-- <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' /> -->
                    </video>
                </div>

            </div>
        </div>
    </section>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="home.html"><button class="btn btn-primary btn-lg me-md-2" type="button" style="background-color: #0f1236; border: 1px solid #0f1236;">Go to home</button></a>
    </div>

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