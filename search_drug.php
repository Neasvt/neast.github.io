<?php
include 'drug_data.php'; // 确保包含药物数据文件

if (isset($_GET['drug_name'])) {
    $drug_name =$_GET['drug_name'];
    $drugs = getDrugByName($drug_name);
    
    if (!empty($drugs)) {
        echo "<h2>检索结果：</h2>";
        foreach ($drugs as$drug) {
            echo "<h3>" . $drug["name"] . "</h3>";
            echo "<p>描述：" . $drug["description"] . "</p>";
            echo "<p>用法：" . $drug["usage"] . "</p>";
            echo "<p>副作用：" . $drug["side_effects"] . "</p><br>";
        }
    } else {
        echo "没有找到相关药物。";
    }
} else {
    echo "请输入药物名称进行检索。";
    }
?>