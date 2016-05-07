<?php
require_once 'controllers/variables.php';
require_once 'controllers/function.php';
require_once 'controllers/seo.php';

require_once 'views/layouts/_head.php';
require_once 'views/layouts/_navigation.php';
?>
<div class="container">

    <div class="starter-template">
        <h1><?php echo "$greetings сегодня $day день $month месяц  $year год" ?></h1>
        <div class="row">
            <div class="col-md-4"><?php menu($menu2, true); ?></div>
            <div class="col-md-8">

                <?php include 'views/staticpages/_table.php' ?>

            </div>
        </div>
    </div>

<?php 
require_once 'views/layouts/_footer.php';
?>

</div><!-- /.container -->

</body>
</html>



