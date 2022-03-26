<?php
    require("./connection_connect.php");
    $output='';
    $sql="SELECT * FROM amphures WHERE province_id='".$_POST['provinceID']."' ORDER BY amphure_name_th";
    $result = $conn->query($sql);
    $output .='<option value="" >-เลือกอำเภอ-</option>';
    while($my_row = $result->fetch_assoc()){
        $output .='<option value="'.$my_row["amphure_id"].'">'.$my_row["amphure_name_th"].'</option>';
    }
    echo $output;
    require("./connection_close.php");
?>