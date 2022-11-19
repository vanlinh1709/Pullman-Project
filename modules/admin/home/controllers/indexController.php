<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
//    echo '1';
    load_view('index');
}