<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Denis Abdullin</title>

    <!-- Latest compiled and minified CSS -->
    <link href="<?= registerSrc('css/bootstrap.min.css') ?>" rel="stylesheet"> 
    <link href="<?= registerSrc('css/bootstrap-theme.min.css') ?>" rel="stylesheet">   
    
    

    <!-- jQuery -->
    <script src=" <?= registerSrc('js/jquery-3.4.1.min.js') ?>"></script>
    <script src=" <?= registerSrc('js/test.js') ?>"></script>
    

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,800" rel="stylesheet">
    <link href="<?= registerSrc('css/style.css') ?>" rel="stylesheet">  
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<header class="header">
    <div class="container">

        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav ">
                    <li><a href="#images">Images</a></li>
                    <li><a href="#note">Notes</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= registerSrc('image/add'); ?>">Add image</a></li>
                    <li><a href="<?= registerSrc('note/add'); ?>">Add note</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
        </nav>


        <div id="top-logo">
            <a href="/" class="header-logo">
                <img src="<?= registerSrc('img/Avatar.png'); ?>" alt="Denis Abdullin">
            </a>
        </div>
    </div>
</header>

<section id="head" class="hero text-center">
    <div class="container">
        <h1>Motivation Is The First<br>Step To <span>Success</span></h1>
        <ul class="social-list">
            <li><a data-checknum="15" href="https://www.facebook.com/readmirecom/"><img src="<?= registerSrc('img/twitter.png'); ?>" alt="twitter"></a></li>
            <li><a data-checknum="0" href="https://readmire.com/"><img src="<?= registerSrc('img/behance.png'); ?>" alt="behance"></a></li>
            <li><a data-checknum="42" href="https://www.instagram.com/readmirecom/"><img src="<?= registerSrc('img/instagram.png'); ?>" alt="instagram"></a></li>
        </ul>
    </div>
</section>

        <?php include_once($content) ?>




</body>
</html>