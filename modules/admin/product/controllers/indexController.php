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
    $data['list_cates'] = get_list_categories();
    $data['list_brands']= get_list_brands();
    load_view('create', $data);
}
function createPostAction() {
//    var_dump($_POST);
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];
    $brand_id = $_POST['brand_id'];
    $price = $_POST['price'];
    $number = $_POST['number'];
    $promo_price = $_POST['promo_price'];
    $thumbnail = $_FILES['thumbnail'];
    $des = $_POST['des'];
    $status = $_POST['status'];
    if (empty($name) || empty($category_id) || empty($brand_id) || empty($price) ||
        empty($number) || empty($thumbnail) || empty($des) || empty($status)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ các trường']);
        header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=product&action=create');
        die();
    }
    if (isset($thumbnail)) {
        move_uploaded_file($thumbnail['tmp_name'], "C:/xampp/htdocs/Nhom_7_DA1/public/uploads/images/product/" . $thumbnail['name']);
    }
    createProduct($category_id,$brand_id,$name, $price, $number,$promo_price,$thumbnail['name'],$des,$status);
    push_notification('success', ['Tạo mới sản phẩm thành công']);
    header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=product');
}
function deleteAction() {
    $id = $_GET['id_product'];
    deleteProduct($id);
    push_notification('success', ['Xoá sản phẩm  thành công']);
    header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=product');
}

function updateAction() {
    $id = $_GET['id_product'];
    $product = get_product_by_id($id);
    $categoryOfProduct = get_category0fProduct_by_id($id);
    $brandOfProduct = get_brandOfProduct_by_id($id);
    $data['product'] = $product;
    $data['categoryOfProduct'] = $categoryOfProduct;
    $data['brandOfProduct'] = $brandOfProduct;
    $data['list_cates'] = get_list_categories();
    $data['list_brands']= get_list_brands();
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
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];
    $brand_id = $_POST['brand_id'];
    $price = $_POST['price'];
    $number = $_POST['number'];
    $promo_price = $_POST['promo_price'];
    $thumbnail = $product['thumbnail'];
    $des = $_POST['des'];
    $status = $_POST['status'];
//    if (empty($name) || empty($category_id) || empty($brand_id) || empty($price) ||
//        empty($number) || empty($thumbnail) || empty($des) || empty($status)) {
//        push_notification('danger', ['Vui lòng nhập đầy đủ các trường']);
//        header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=product&action=create');
//        die();
//    }
    if($_FILES['thumbnail']['name'] != '') {
        $thumbnail = $_FILES['thumbnail']['name'];
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], "C:/xampp/htdocs/Nhom_7_DA1/public/uploads/images/product/" . $thumbnail);
    }
    updateProduct($id ,$category_id,$brand_id,$name, $price, $number,$promo_price,$thumbnail,$des,$status);
    push_notification('success', ['Chỉnh sửa sản phẩm thành công']);
    header('Location: http://localhost/Nhom_7_DA1/?role=admin&mod=product');
}


