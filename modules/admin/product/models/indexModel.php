<?php

function get_list_products() {
    $result = pdo_query("SELECT * FROM brand as b JOIN products as p ON b.id = p.brand_id JOIN categories as c ON 
                            p.category_id = c.id");
//    echo '<pre>';
////    var_dump($result);
//    array_push($result, $result_1);
//    var_dump($result);
//    die();
    return $result;
}

function get_product_by_id($id) {
    $sql = 'SELECT * FROM products WHERE id = ? ';
    return pdo_query_one($sql, $id);
}
function get_category0fProduct_by_id($id) {
    $sql = 'SELECT c.id, c.cate_name FROM categories as c JOIN products as p ON c.id = p.category_id  WHERE p.id = ? ';
    return pdo_query_one($sql, $id);
}
function get_brandOfProduct_by_id($id) {
    $sql = 'SELECT b.id, b.brand_name FROM brand as b JOIN products as p ON b.id = p.category_id  WHERE p.id = ? ';
    return pdo_query_one($sql, $id);
}

function createProduct($category_id,$brand_id, $name, $price, $number,$promo_price,$thumbnail,$des,$status) {
    $sql = 'INSERT INTO products(category_id, brand_id, title, price, number, promo_price, 
                        thumbnail, description, status) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)';
    pdo_execute($sql,$category_id,$brand_id,$name,$price, $number,$promo_price,$thumbnail,$des,$status);
}
function deleteProduct($id) {
    $sql = 'DELETE FROM products WHERE id = ?';
    pdo_execute($sql, $id);
}
function updateProduct($id,$category_id, $brand_id, $name, $price, $number, $promo_price,
                            $thumbnail, $description, $status) {
    $sql = 'UPDATE products SET category_id = ?, brand_id = ?, title = ?, price = ?, number = ?, promo_price = ?, view = ?, 
                        thumbnail = ?, description = ?, status = ? WHERE id = ?';
    pdo_execute($sql,$category_id, $brand_id, $name, $price, $number, $promo_price, $view,
        $thumbnail, $description, $status, $id);
}
//
function get_list_categories() {
    $result = pdo_query("SELECT * FROM `categories`");
    return $result;
}
function get_list_brands() {
    $result = pdo_query("SELECT * FROM `brand`");
    return $result;
}

