<?php
include 'drug_data.php'; // 确保包含药物数据文件

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $drug_name =$_POST["drug_name"];

    // 删除药物
    deleteDrug($drug_name);
}
?>
