<?php

/** Домашняя страница */
function index() {
    global $db;

    $images = $db->query("SELECT * FROM images")->fetchAll();
    $notes  = $db->query("SELECT * FROM notes")->fetchAll();
    
    return renderPage('template_index', ['images' => $images, 'notes' => $notes]);
}
