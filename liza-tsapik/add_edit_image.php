<?php
// add_edit_image.php
include 'inc/db_connect.php';
include 'inc/helper.php';
$image_featured = (isset($_POST['image_featured']) && $_POST['image_featured']) ? $_POST['image_featured'] : 0;
$file_name = isset($_FILES['image_file']['name']) ? $_FILES['image_file']['name'] : '';
if ($file_name) {
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . basename($_FILES['image_file']['name']);
    $is_moved = move_uploaded_file($_FILES["image_file"]["tmp_name"], $upload_file);
}
if (!isset($_GET['id']) && isset($_POST['image_title']) && isset($_FILES['image_file'])) {
    if ($is_moved){
        $sql = "SELECT COUNT(*) FROM image WHERE title = '{$_POST['image_title']}' and image = '{$file_name}'";
        if ($res = $dbh->query($sql)) {
            if ($res->fetchColumn() == 0) {
                $sql = "INSERT INTO image (	title, featured_image, image)
                    VALUES ('{$_POST['image_title']}', $image_featured, '{$file_name}')";
                $dbh->exec($sql);
            }
        }
    }
}
if (isset($_GET['id'])) {
    if (count($_POST)) {
        $set_file_name = $file_name ? ", image = '{$file_name}'" : '';
        $sql = "UPDATE image 
                SET	title='{$_POST['image_title']}',
                featured_image = $image_featured $set_file_name
                  WHERE id = {$_GET['id']}";
        $dbh->exec($sql);
    }
    $sql = "SELECT * FROM image WHERE id = {$_GET['id']}";
    $image = $dbh->query($sql)->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Denis Abdullin</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- jQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
    <!--<script src="js/test.js"></script>-->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>

<?php
    include 'header.html';
?>



<form action="" enctype="multipart/form-data" method="post">
    <section id="images" class="works">
        <div class="container">
            <h2>Images</h2>
            <div class="row">
                <!-- Image entry -->
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="title">Image Title</label>
                        <input type="text" name="image_title" class="form-control" id="title" placeholder="Enter title" required <?= isset($image['title'])?"value =\"{$image['title']}\"":''?> >
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="image_featured" type="checkbox" value="1" id="featured" <?= (isset($image['featured_image']) && $image['featured_image']) ?"checked":''?> >
                            Featured Image
                        </label>
                    </div>



                    <div class="form-group">
                        <label for="image">Image upload</label>
                        <input type="file" name="image_file" class="form-control" id="image" placeholder="Select image" onchange="update_img(this);" required>
                    </div>

                    <!-- Show uploaded image on edit page only -->
                    <?php if(count($image)):?>
                    <div class="form-group">
                        <div><label>Current image</label></div>
                        <img id="img" src="uploads/<?=$image['image']?>" alt="[ENTRY TITLE]">
                    </div>
                    <?php endif;?>
                    <!-- EO Show uploaded image-->

                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="\" class="btn btn-default">Cancel</a>
                </div>
                <div>
                </div>
                <!-- EO Image entry -->
            </div>
        </div>
    </section>
</form>


<footer id="contacts" class="contacts">
    <div class="container">
        <div class="contacts-bottom">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>Copyright &copy; 2018 Denis Abdullin – deab.ru</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="contacts-link">
                        <p><a href="#nolink">Invoicing</a></p>
                        <p><a href="#nolink">Documents</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>