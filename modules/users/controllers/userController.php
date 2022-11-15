<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('user');
}

function showUsersAction() {
    load('helper','format');
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('user', $data);
}

function addNewUserAction() {
    if(isset($_POST)) {
       $name =  $_POST['name'] ;
       $email = $_POST['email'] ;
       $age = $_POST['age'] ;
       $earn = $_POST['earn'] ;
       createUser($name, $email, $age, $earn);
    }
    header('location: http://localhost/pullman.vn/?mod=users&controller=user&action=showUsers');
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

