<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
    load('helper','format');
    $list_products = get_list_products();
//    show_array($list_products);
    $data['list_products'] = $list_products;
    load_view('index', $data);
}
function createAction() {
    load_view('create');
}
function createPostAction() {
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
        header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=products&action=create');
        die();
    }
    createProduct($name, $email, $phone_number, $address, $password, $role_id, $avatar);
    push_notification('success', ['Tạo mới tài khoản thành công']);
    header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=products');
}
function deleteAction() {
    $id = $_GET['id_product'];
    deleteProduct($id);
    push_notification('success', ['Xoá danh mục tài khoản thành công']);
    header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=products');
}

function showFormAction($id) {
    return get_product_by_id($id);
}
function updateAction() {
    $id = $_GET['id_product'];
    $product = get_product_by_id($id);
    $data['product'] = $product;
    if ($product) {
        load_view('update', $data);
    } else {
        header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=products');
    }
}
function updatePostAction() {
    $id = $_GET['id_product'];
//    echo $id;
        $product = get_product_by_id($id);
    if (!$product) {
        header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=product');
        die();
    }
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
        header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=products&action=update');
        die();
    }
    updateProduct($id ,$name, $email, $phone_number, $address, $password, $role_id, $avatar);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=products');
}


