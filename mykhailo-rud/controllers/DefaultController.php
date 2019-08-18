<?php

/** Домашняя страница */
function index() {
    global $db;

    $notes = $db->query("SELECT * FROM notes")->fetch();

    return renderPage('template_index', ['notes' => $notes]);
}
