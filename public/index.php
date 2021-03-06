<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../private/img/flaticon.jpg">
    <title>Spelletjes-website | Home</title>
    <link href="../private/css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #0065A0;">
    <a class="navbar-brand" href="index.php">Spelletjes-site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="colorLine"></div>



<div class="container-fluid">
    <div class="row">
        <div  class="col-md-4">
            <a href="spel-1/index.php">
                <div class="spel-1">

                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="spel-2/pacman-canvas-master/index.html">
                <div class="spel-2">

                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="spel-3/index.php">
                <div class="spel-3">

                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <a href="spel-4/index.php">
                <div class="spel-4"></div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="spel-5/index.php">
                <div class="spel-5"></div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="spel-6/index.php">
                <div class="spel-6"></div>
            </a>
        </div>
    </div>
</div>

<?php include_once ("../private/shared/footer.php")?>




</body>
</html>