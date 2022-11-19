<?php

function get_list_categories() {
    $result = pdo_query("SELECT * FROM `categories`");
    return $result;
}

function get_cate_by_id($id) {
    $sql = 'SELECT * FROM categories WHERE id = ? ';
    return pdo_query_one($sql, $id);

}
function createCate($name) {
    $sql = 'INSERT INTO categories(name) VALUES(?)';
    pdo_execute($sql,$name);
}
function deleteCate($id) {
    $sql = 'DELETE FROM categories WHERE id = ?';
    pdo_execute($sql, $id);
}
function updateCate($id, $name) {
    $sql = 'UPDATE categories SET name= ? WHERE id = ?';
    pdo_execute($sql,$name, $id);
}

