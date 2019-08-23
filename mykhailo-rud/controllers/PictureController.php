<?php

function index() {
    global $db;
    if(!empty($_POST)) {
        if(isset($_FILES['image_file'])){
            $directory = 'uploads/';
            $nameError = 0;
            $image_title = $_POST['image_title'];
            $image_file  = $_FILES['image_file']['name'];
            $image_tmp = $_FILES['image_file']['tmp_name'];
            $listFiles = scandir($directory);
            foreach ($listFiles as $file){
                if($image_file == $file){
                    $name = explode(".", $image_file);
                    $name[0] = $name[0] . uniqid();
                    $image_file = implode('.', $name);
                }
            }
            $target_image = $directory . basename($image_file);
            move_uploaded_file($image_tmp, $target_image );
            if(!empty($_POST['image_featured'])){
                $featured_image = 1;
            }else{
                $featured_image = 0;
            }
            $query = $db->prepare("INSERT INTO images (title,featured_image, image_name) VALUES (?, ?, ?)");
            $query->bindParam(1, $image_title);
            $query->bindParam(2, $featured_image);
            $query->bindParam(3, $image_file);
            $query->execute();
        }
        
    }
    return renderPage('template_add_edit_image');
}

function view() {
    $id =53;
    return renderPage('template_view_image',['id' => $id]);
}

