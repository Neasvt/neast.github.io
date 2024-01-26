<?php
include 'drug_data.php'; // 确保包含药物数据文件

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name =$_POST["name"];
    $description =$_POST["description"];
    $usage =$_POST["usage"];
    $side_effects =$_POST["side_effects"];

    // 添加新药物
    addDrug($name,$description, $usage,$side_effects);
    echo "新药物已成功添加。";
}
?>
