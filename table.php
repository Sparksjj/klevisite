<?php
$cols = 10;
$rows = 10;
$color = '#f4645f';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Starter Template for Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">C</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Таблица</h1>
        <?php
        function ola($rows, $cols, $color){
          echo '<table class="table table-bordered">';
            for($tr = 1; $tr <= $rows; $tr++){
                echo "<tr>";
                for($td = 1; $td <= $cols; $td++){
                    if($tr == 1 || $td == 1){
                        echo "<td style='background-color: $color'>". $tr * $td ."</td>";
                    }else{
                        echo "<td>". $tr * $td ."</td>";
                }
            }
            echo "</tr>";
        }
        echo '</table>';  
        }
        ola ($rows, $cols, $color);
        ola ($rows, $cols, $color);
        ola ($rows, $cols, $color);
        ?>
    </div>
    <div class="mastfoot">

    </div>
</div><!-- /.container -->

</body>
</html>



