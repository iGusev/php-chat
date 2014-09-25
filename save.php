<?php
session_start();
if($_REQUEST['name'] && $_REQUEST['text']) {
    $name = strip_tags($_REQUEST['name']);
    $text = strip_tags($_REQUEST['text']);

    ob_start();
    include('template.php');
    $out = ob_get_clean();

    file_put_contents('text', $out, FILE_APPEND);
    $_SESSION['name'] = strip_tags($_REQUEST['name']);
}
header('Location: '.$_SERVER['HTTP_REFERER']);
