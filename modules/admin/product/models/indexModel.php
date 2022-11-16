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

function get_user_by_id($id) {
    $sql = 'SELECT * FROM products WHERE id = ? ';
    return pdo_query_one($sql, $id);

}
function createProducts($category_id, $brand_id, $title, $price, $number, $promo_price, $view,
                        $thumnail, $description, $status) {
    $sql = 'INSERT INTO products(category_id, brand_id, title, price, number, promo_price, view, 
                        thumnail, description, status) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    pdo_execute($sql,$category_id, $brand_id, $title, $price, $number, $promo_price, $view,
        $thumnail, $description, $status);
}
function deleteProducts($id) {
    $sql = 'DELETE FROM products WHERE id = ?';
    pdo_execute($sql, $id);
}
function updateProducts($id,$category_id, $brand_id, $title, $price, $number, $promo_price, $view,
                            $thumnail, $description, $status) {
    $sql = 'UPDATE products SET category_id = ?, brand_id = ?, title = ?, price = ?, number = ?, promo_price = ?, view = ?, 
                        thumnail = ?, description = ?, status = ? WHERE id = ?';
    pdo_execute($sql,$category_id, $brand_id, $title, $price, $number, $promo_price, $view,
        $thumnail, $description, $status, $id);
}

