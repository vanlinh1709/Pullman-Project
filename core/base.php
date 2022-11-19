<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

session_start();

// get Controller name
function get_controller() {
    global $config;
    $controller = isset($_GET['controller']) ? $_GET['controller'] : $config['default_controller'];
    return $controller;
}

// get Module name

function get_role() {
    global $config;
    $role = isset($_GET['role']) ? $_GET['role'] : $config['default_role'];
    return $role;
}

function get_module() {
    global $config;
    $module = isset($_GET['mod']) ? $_GET['mod'] : $config['default_module'];
    return $module;
}

//get Action name
function get_action() {
    global $config;
    $action = isset($_GET['action']) ? $_GET['action'] : $config['default_action'];
    return $action;
}

/*
 * -------------------------------
 * Load
 * ------------------------------------------------------------------------------------
 * Load các file từ các phân vùng vào hệ thống tham gia xử lý
 * Ví dụ: load('lib','database');
 * ------------------------------------------------------------------------------------
 * GIẢI THÍCH
 * ------------------------------------------------------------------------------------
 * Đầu vào
 * - $type: Loại phân vùng hệ thống: lib, helper...
 * - $name: Tên chức năng được load: database, string...
 * ------------------------------------------------------------------------------------
 */

//function run_module($url, $data_echo = true) {
////    global $config;
//    include  base_url().$url;
////    if (empty($url))
////        return FALSE;
////
////    if ($data_echo) {
////        echo get_data($url);
////    } else {
////        return get_data($url);
////    }
//}

function load($type, $name) {
    if ($type == 'lib')
        $path = LIBPATH . DIRECTORY_SEPARATOR . "{$name}.php";
    if ($type == 'helper')
        $path = HELPERPATH . DIRECTORY_SEPARATOR . "{$name}.php";
    if (file_exists($path)) {
        require "$path";
    } else {
        echo "{$type}:{$name} không tồn tại";
    }
}

/*
 * -----------------------------
 * callFunction
 * -----------------------------
 * Gọi đến hàm theo tham số biến
 */

function call_function($list_function = array()) {
    if (is_array($list_function)) {
        foreach ($list_function as $f) {
            if (function_exists($f())) {
                $f();
            }
        }
    }
}

function load_view($name, $data_send = array()) {
    global $data;
    $data = $data_send;
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_role() . DIRECTORY_SEPARATOR .  get_module() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $name . 'View.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key_data => $v_data) {
                $$key_data = $v_data;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function load_model($name) {
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_role() . DIRECTORY_SEPARATOR .  get_module() . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $name . 'Model.php';
    if (file_exists($path)) {
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function get_header($name = '', $title = '') {
    global $data;
    if (empty($name)) {
        $name = 'header';
    } else {
        $name = "header-{$name}";
    }
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR . $name . '_' . get_role() . '.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key => $a) {
                $$key = $a;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function get_footer($name = '') {
    global $data;
    if (empty($name)) {
        $name = 'footer';
    } else {
        $name = "footer-{$name}";
    }
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR . $name . '_' . get_role() . '.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key => $a) {
                $$key = $a;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function get_sidebar($name = '') {
    global $data;
    if (empty($name)) {
        $name = 'sidebar';
    } else {
        $name = "sidebar-{$name}";
    }
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR . $name . '_' . get_role() . '.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key => $a) {
                $$key = $a;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function get_template_part($name) {
    global $data;
    if (empty($name))
        return FALSE;
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR . "template-{$name}.php";
    if (file_exists($path)) {
        foreach ($data as $key => $a) {
            $$key = $a;
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}
//validate sign up
function validator($email, $password) {
    $flag = true;
    $invalidEmail = validateEmail($email);
    $invalidPassword = validatePassword($password);
//    var_dump($invalidPassword, $invalidEmail);die();
    //
    $_SESSION['notification'] = [];
    $msg = [];
    $msg['type'] = 'danger';
    $msg['email'] ='';
    $msg['password'] = '';
    if($invalidEmail) {
        $msg['email'] = 'Để trống email hoặc nhập sai định dạng email!';
        $flag = false;
    }
    if($invalidPassword) {
        $msg['password'] = 'Để trống password!';
        $flag = false;
    }
    $_SESSION['notification'][] = $msg;
    echo '<pre>';
//    var_dump($msg);die();
    return $flag;
}
function validateEmail($email) {
    $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);// Email hợp lệ -> true
    if (empty($email) || !$validEmail) {
        return true;//Email khong hop le
    }
    return false;
}
function validatePassword($password) {
    if(empty($password)) {
        return true;//Pass word khong hop le
    }
    return false;
}
function push_notification() {
    $_SESSION['notification'] = [];
    $msg['type'] ='danger';
    $msg['email'] ='';
    $msg['password'] = '';
    $msg['user']= 'Tài khoản không tồn tại';
    $_SESSION['notification'][] = $msg;
}
//Push cảnh báo đăng nhập admin
function get_notification() {

    if (!isset($_SESSION["notification"])) $_SESSION["notification"] = [];
    $notification = $_SESSION["notification"];
    unset($_SESSION["notification"]);
    return $notification;
}

function push_auth($user) {
    $_SESSION["auth"] = $user;
}
//create flag
function is_auth()
{
    return isset($_SESSION["auth"]);
}

function get_auth()
{
    return $_SESSION["auth"];
}

function request_auth($isLogin = true)
{
    if (is_auth() !== $isLogin) {
        header("Location: " . ($isLogin ? '?role=admin&mod=auth' : '?role=admin'));
        die;
    }
}
?>