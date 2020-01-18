<?php
    require_once ('connection.php');
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
        if(isset($_GET['action'])){
            $action = $_GET['action'];
        }else{
            $action = 'index';
        }
    }else{
        $controller = 'pages';
        $action = 'home';
    }
    require_once ('routes.php');
    // File này sẽ là file nhận mọi yêu cầu truy vấn lên server. Bởi vậy, mọi đường dẫn truy cập đều 
    // phải có dạng /?param=value hoặc /index.php?param=value. Trước tiên, index.php chạy nội dung trong 
    // file connection.php được dùng để kết nối và truy vấn đến cơ sở dữ liệu, sử dụng PDO.
?>