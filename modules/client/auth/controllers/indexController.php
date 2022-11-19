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
//    echo '1'; die();
    $email = $_POST['email'];
    $password = $_POST['password'];
//    var_dump($email, $password);
//    die();
    //Xử lý validate.
    $validInput = validator($email, $password);//Kiểm tra 2 trường và tạo thông báo lỗi bằng session
//    var_dump($validInput);die();
    if(!$validInput) {
        header('Location: ?role=client&mod=auth');
        exit();
    }
    //Xác thực có tồn tại user.
    $auth = get_auth_user($email, $password);
    if ($auth) {
        push_auth($auth);//Tạo giá trị cho session['auth'];
        header('Location: ?role=client');//Chạy về modules mặc định là home.
    } else {
        push_notification();
        header('Location: ?role=client&mod=auth');
    }
}