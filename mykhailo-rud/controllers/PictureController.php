<?php

function index() {
    global $db;
    if(!empty($_POST)) {

        $image_title = $_POST['image_title'];
        $image_file  = $_FILES['image_file']['name'];
        $featured_image = 1;
        $query = $db->prepare("INSERT INTO images (title,featured_image, image_name) VALUES (?, ?, ?)");
        $query->bindParam(1, $image_title);
        $query->bindParam(2, $featured_image);
        $query->bindParam(3, $image_file);

        $query->execute();
    }
    $images = $db->query("SELECT * FROM images")->fetch();
    return renderPage('template_add_edit_image');
}

function view() {
    return renderPage('template_view_image');
}

