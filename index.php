<?php
require_once 'controllers/variables.php';
require_once 'controllers/function.php';
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
            <?php
                menu($menu);
            ?>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1><?php echo "$greetings сегодня $day день $month месяц  $year год" ?></h1>
        <div class="row">
            <div class="col-md-4"><?php menu($menu2, true); ?></div>
            <div class="col-md-8">

                <?php include 'views/'.$id.".php" ?>

            </div>
        </div>
    </div>
    <div class="mastfoot">
        <div class="inner">
            <p>
                <a href="#">Copyright <?php echo $year ?></a>
            </p>
        </div>
    </div>
</div><!-- /.container -->

</body>
</html>



