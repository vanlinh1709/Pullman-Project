<?php

function construct() {
    request_auth(false);
    load_model('index');
}

function indexAction() {
    $notifications = get_notification();
    load_view('index', [
        "notifications" => $notifications
    ]);
}

function indexPostAction() {
//    echo '1';
//    die();
    // validation
    $username = $_POST['username'];
    $password = $_POST['password'];
//    var_dump($username, $password);
//    die();
    if (empty($username) || empty($password)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
        header('Location: ?role=admin&mod=auth');
    }
    // xử lý đăng nhập
        //$auth trả về 1 mảng chứa thong tin người dùng
    $auth = get_auth_user($username, $password);
    if ($auth) {
        push_auth($auth);//Tạo giá trị cho session['auth']
//        var_dump($_SESSION['auth'];
//        echo '1';
        header('Location: ?role=client');//Chạy về modules mặc định là home
    } else {
        push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
        header('Location: ?role=client&mod=auth');
    }
}