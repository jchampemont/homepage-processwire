<?php

$title = $page->title . " - Jean Champémont"; //headline if available, otherwise title
$content = $page->body;

$homepage = $pages->get('/');

include_once("./_func.php");
