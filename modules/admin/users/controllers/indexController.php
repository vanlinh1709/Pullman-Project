<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
    load('helper','format');
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}
function createAction() {
    load_view('create');
}
function createPostAction() {
//    if(isset($_POST)) {
//        $name =  $_POST['name'] ;
//        $email = $_POST['email'] ;
//        $age = $_POST['age'] ;
//        $earn = $_POST['earn'] ;
//        createUser($name, $email, $age, $earn);
//    }
//    header('location: http://localhost/pullman.vn/?mod=users&controller=user&action=showUsers');
//    var_dump($_POST);
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phonenumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $role_id = $_POST['role_id'];
    $avatar = $_POST['avatar'];

    if (empty($name) || empty($email) || empty($phone_number) || empty($address) || empty($password) ||
        empty($role_id)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ các trường']);
        header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=users&action=create');
        die();
    }
    createUser($name, $email, $phone_number, $address, $password, $role_id, $avatar);
    push_notification('success', ['Tạo mới tài khoản thành công']);
    header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=users');
}
function deleteUserAction() {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        deleteUser($id);
    }
    header('location: http://localhost/pullman.vn/?mod=users&controller=user&action=showUsers');
}

function showFormAction($id) {
    return get_user_by_id($id);
}
function updateUserAction() {
//    echo '1';
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $name =  $_POST['name'] ;
        $email = $_POST['email'] ;
        $age = $_POST['age'] ;
        $earn = $_POST['earn'] ;
//        var_dump($earn);
        updateUser($id, $name, $email, $age, $earn);
    }
    header('location: http://localhost/pullman.vn/?mod=users&controller=user&action=showUsers');
}

