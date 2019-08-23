<?php

function index() {
    global $db;
    if(!empty($_POST)) {
        if(isset($_FILES['image_file'])){
            $directory = registerSrc('uploads/');
            $image_title = $_POST['image_title'];
            $image_file  = $_FILES['image_file']['name'];
            $image_tmp = $_FILES['image_file']['tmp_name'];
            move_uploaded_file($image_tmp, $directory.$image_file );
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
    return renderPage('template_view_image');
}

