<?php
function getTable($number)
{
    $result = "<div style=\"margin: 10px;\">";
    for ($i = 1; $i <= 10; $i++) {
        $mult = $number * $i;
        $result .= "<p>$number * $i = $mult<p>";
    }
    $result .= "</div>";
    return $result;
}

if (isset($_POST['tables']) && !empty($_POST['tables'])) {
    $datas = [];
    foreach ($_POST['tables'] as $table) {
        $datas[] = getTable($table);
    }
    echo json_encode($datas);
}