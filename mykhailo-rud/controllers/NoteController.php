<?php

function index() {
    global $db;
    if(isPost()) {

        $note_title = $_POST['note_title'];
        $note_text  = $_POST['note_text'];

        $query = $db->prepare("INSERT INTO notes (title, content) VALUES (?, ?)");
        $query->bindParam(1, $note_title);
        $query->bindParam(2, $note_text);

        $query->execute();
    }

    return renderPage('template_add_edit_note');
}

/**
 * @params integer $id
 * 
 * @return string
 */
function view($id) {
    global $db;

    $note = $db->query("SELECT * FROM notes WHERE id=$id")->fetch();

    return renderPage('template_view_note', ['note' => $note]);
}


/**
 * @params integer $id
 * 
 * @return string
 */
function edit($id) {
    global $db;

    $note = $db->query("SELECT * FROM notes WHERE id=$id")->fetch();

    if(isPost()) {
        $query = $db->prepare("UPDATE notes SET title=:title, content=:content WHERE id=:id");

        $query->bindParam('title', $_POST['note_title']);
        $query->bindParam('content', $_POST['note_text']);
        $query->bindParam('id', $id);

        $query->execute();

        return header("Refresh: 0");
    }

    return renderPage('template_add_edit_note', ['note' => $note]);
}




/**
 * @params integer $id
 * 
 * @return string
 */
function delete() {
    
    if(isPost()) {
        global $db;

        $query = $db->prepare("DELETE FROM notes WHERE id=:id");

        $query->bindParam('id', $_POST['id']);

        return $query->execute();
    }

    return header("HTTP/1.0 400 Bad Request");
}
