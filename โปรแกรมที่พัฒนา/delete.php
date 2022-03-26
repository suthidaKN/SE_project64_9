<?php
    require("./connection_connect.php");
    $output='';
    $sql="DELETE FROM company WHERE CompanyID='".$_POST['ID']."'";
    $result = $conn->query($sql);
    require("./connection_close.php");
?>