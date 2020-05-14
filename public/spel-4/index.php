<html>
<head>
    <title>Spelletjes-website | Tetris Game JS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        #score{
            display: inline-block;
        }
        .score{
            font-size: 25px;
            font-weight: bold;
            font-family: monospace;
            text-align: center;
        }
        canvas{
            display: block;
            margin:63px auto;
        }

        h3 {
            text-align: center;
            padding-top:15px;
        }
    </style>
</head>
<body>
<?php require_once("../../private/shared/nav.php")?>

    <h3>Tetris</h3>

    <canvas id="tetris" width="200" height="400"></canvas>
    <div class="score">
        Score : <div id="score">0</div>
    </div>

<?php require_once("../../private/shared/footer.php")?>



    <script src="tetrominoes.js"></script>
    <script src="tetris.js"></script>
</body>
</html>