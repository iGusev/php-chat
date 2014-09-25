<?php
session_start();
if($_REQUEST['name'] && $_REQUEST['text']) {
    file_put_contents('text','<div class="sender">'.strip_tags($_REQUEST['name']).'</div><div class="message">'.strip_tags($_REQUEST['text']).'</div>');
    header('Location: '.$_SERVER['HTTP_REFERER']);
}