<?php
require('config.php');
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animations.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body> 
    <div class="container">
        <div class="jumbotron" style="margin: 50px auto 10px; max-width: 840px;">
            <img src="img/rule.jpg" alt="" class="pull-right img-rounded" style="width: 240px; height: auto;">
            <h1 id="title" class="bigEntrance" style="font-size: 50px;"><?php echo $title ?></h1>
            <p class="lead">
                <?php echo $slogan ?><br>
                <small>
                    <ul style="line-height: 1.6;">
                        <li><?php echo $rule1 ?></li>
                        <li><?php echo $rule2 ?></li>
                        <li><?php echo $rule3 ?></li>
                        <li><?php echo $rule4 ?></li>
                        <li><?php echo $rule5 ?></li>
                    </ul>
                    <?php echo $cslogan ?>
                    <br>
                    <code><?php echo $curl ?></code>
                </small>
            </p>

        </div>
    </div>
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>