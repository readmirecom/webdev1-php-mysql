<?php

function index() {
    global $db;

    if(isPost()) {
        if(isset($_FILES['image_file'])){
            $directory = 'uploads/';
            $image_title = $_POST['image_title'];
            $image_file  = $_FILES['image_file']['name'];
            $image_tmp = $_FILES['image_file']['tmp_name'];
            $name = explode(".", $image_file);
            $name[0] = $name[0] . uniqid();
            $image_file = implode('.', $name);

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

function view($id) {
    global $db;

    $image = $db->query("SELECT * FROM images WHERE id=$id")->fetch();

    return renderPage('template_view_image', ['image' => $image]);
}



/**
 * @params integer $id
 * 
 * @return string
 */
function edit($id) {
    global $db;

    $image = $db->query("SELECT * FROM images WHERE id=$id")->fetch();

    if(isPost()) {
        $query = $db->prepare("UPDATE images SET title=:title, featured_image=:featured, image_name=:img WHERE id=:id");
        if(!empty($_POST['image_featured'])){
            $featured_image = 1;
        }else{
            $featured_image = 0;
        }
        if($_FILES['image_file']['name'] !== '' ) {
            
            $directory = 'uploads/';
            $image_file  = $_FILES['image_file']['name'];
            $image_tmp = $_FILES['image_file']['tmp_name'];
            $name = explode(".", $image_file);
            $name[0] = $name[0] . uniqid();
            $image_file = implode('.', $name);
            $target_image = $directory . basename($image_file);
            move_uploaded_file($image_tmp, $target_image );
            $pathToFile = __DIR__ . '/../uploads/' . $image['image_name'];

            if(file_exists($pathToFile)) {
                unlink($pathToFile);
            }

            //TODO:: Загрузити нову фотку в папку
        } else {
            $image_file = $image['image_name'];
        }
        
        $query->bindParam('title', $_POST['image_title']);
        $query->bindParam('featured', $featured_image);
        $query->bindParam('img', $image_file);
        $query->bindParam('id', $id);

        $query->execute();

        return header("Refresh: 0");
    }

    return renderPage('template_add_edit_image', ['image' => $image]);
}



/**
 * @params integer $id
 * 
 * @return string
 */
function delete() {
    if(isPost()) {
        global $db;
        $id = $_POST['id'];

        if(empty(id)) {
            return header("HTTP/1.0 400 Bad Request");
        }

        $image = $db->query("SELECT * FROM images WHERE id=$id")->fetch();

        $pathToFile = __DIR__ . '/../uploads/' . $image['image_name'];

        if(file_exists($pathToFile)) {
            unlink($pathToFile);
        }

        $query = $db->prepare("DELETE FROM images WHERE id=:id");

        $query->bindParam('id', $_POST['id']);

        return $query->execute();
    }

    return header("HTTP/1.0 400 Bad Request");
}
