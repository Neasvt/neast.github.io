<?php
// drug_data.php

// 检查数据文件是否存在，如果不存在则创建一个空数组
if (!file_exists('drug_data.ser')) {
    $drugs = array();
    file_put_contents('drug_data.ser', serialize($drugs));
}

// 从文件中读取药物数据
$drugs = unserialize(file_get_contents('drug_data.ser'));

// 函数来保存药物数据到文件
function saveDrugsToFile($drugs) {
    file_put_contents('drug_data.ser', serialize($drugs));
}

// 函数来检索所有药物
function getAllDrugs() {
    global $drugs;
    return $drugs;
}

// 函数来根据名称检索药物
function getDrugByName($name) {
    global $drugs;
    $foundDrugs = array();
    foreach ($drugs as$drug) {
        if (strpos(strtolower($drug['name']), strtolower($name)) !== false) {
            $foundDrugs[] =$drug;
        }
    }
    return $foundDrugs;
}
// 函数来删除药物
function deleteDrug($name) {
    global $drugs;
    $found = false;
    foreach ($drugs as$key => $drug) {
        if ($drug["name"] ==$name) {
            unset($drugs[$key]);
            $found = true;
            break;
        }
    }
    if ($found) {
        saveDrugsToFile($drugs);
        echo "药物已成功删除。";
    } else {
        echo "没有找到相关药物。";
    }
}

// 函数来编辑药物
function editDrug($name,$new_name, $new_description,$new_usage, $new_side_effects) {
    global $drugs;
    $found = false;
    foreach ($drugs as$key => $drug) {
        if ($drug["name"] ==$name) {
            $drugs[$key]["name"] = $new_name;
            $drugs[$key]["description"] = $new_description;
            $drugs[$key]["usage"] = $new_usage;
            $drugs[$key]["side_effects"] = $new_side_effects;
            $found = true;
            break;
        }
    }
    if ($found) {
        saveDrugsToFile($drugs);
        echo "药物已成功编辑。";
    } else {
        echo "没有找到相关药物。";
    }
}
// 函数来添加新药物
function addDrug($name,$description, $usage,$side_effects) {
    global $drugs;
    $drug = array(
        'name' => $name,
        'description' => $description,
        'usage' => $usage,
        'side_effects' => $side_effects
    );
    $drugs[] =$drug;
    saveDrugsToFile($drugs);
}
?>