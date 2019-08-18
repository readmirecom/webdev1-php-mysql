<?php

function index() {
    global $db;

    if(!empty($_POST)) {

        $note_title = $_POST['note_title'];
        $note_text  = $_POST['note_text'];

        $query = $db->prepare("INSERT INTO notes (title, content) VALUES (?, ?)");
        $query->bindParam(1, $note_title);
        $query->bindParam(2, $note_text);

        $query->execute();
    }

    return renderPage('template_add_edit_note');
}