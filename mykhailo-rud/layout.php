<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Denis Abdullin</title>

    <!-- Latest compiled and minified CSS -->
    <?= registerCss('css/bootstrap.min.css') ?>
    <?= registerCss('css/bootstrap-theme.min.css') ?>

    <!-- jQuery -->
    <?= registerJs('js/jquery-3.4.1.min.js') ?>
    <?= registerJs('js/test.js') ?>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,800" rel="stylesheet">

    <?= registerCss('css/style.css') ?>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
        <?php include_once($content) ?>
</body>
</html>