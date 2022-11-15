<?php

function get_list_users() {
    $result = pdo_query("SELECT * FROM `tbl_users`");
    return $result;
}

function get_user_by_id($id) {
    $sql = 'SELECT * FROM tbl_users WHERE id = ? ';
    return pdo_query_one($sql, $id);

}
function createUser($name, $email, $age, $earn) {
    $sql = 'INSERT INTO tbl_users(fullname, email, age, earn) VALUES(?, ?, ?, ?)';
    pdo_execute($sql, $name, $email, $age, $earn);
}
function deleteUser($id) {
    $sql = 'DELETE FROM tbl_users WHERE id = ?';
    pdo_execute($sql, $id);
}
function updateUser($id, $name, $email, $age, $earn) {
    $sql = 'UPDATE tbl_users SET fullname = ?, email = ?, age = ?, earn = ? WHERE id = ?';
    pdo_execute($sql, $name, $email, $age, $earn, $id);
}
