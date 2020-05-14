<!DOCTYPE html>
<html>
<head>
    <title>Spelletjes-website | Pixel Art Maker</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="spel1.css">
</head>
<body>

<?php require_once("../../private/shared/nav.php")?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Lab: Pixel Art Maker</h1>

            <h2>Choose Grid Size</h2>
            <form id="sizePicker">
                Grid Height:
                <input type="number" id="inputHeight" name="height" min="1" value="1">
                Grid Width:
                <input type="number" id="inputWidth" name="width" min="1" value="1">
                <input type="submit" id="submitButton">
            </form>

            <h2>Pick A Color</h2>
            <input type="color" id="colorPicker">

            <h2>Design Canvas</h2>
            <table id="pixelCanvas"></table>
        </div>
    </div>
</div>

<?php include_once ("../../private/shared/footer.php")?>


    <script
  src="http://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="spel1.js"></script>


</body>
</html>
