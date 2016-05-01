<?php

print_r($_POST);
print_r($_GET);
print_r($_REQUEST);

$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';

?>

<h1><?= isset($_GET['paramname']) ? $_GET['paramname'] : ':(' ?></h1>

<form action="/test.php?paramname=съели?" method="post">
    <input type="hidden" name="paramname" value="post">
    <input type="text" name="name">
    <input type="password" name="password">
    <input type="submit">
</form>
