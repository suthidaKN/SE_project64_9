<?php
    require("./connection_connect.php");
    $output='';
    $sql="UPDATE jobrequirment SET reason='".$_POST['value']."'
    WHERE JID='".$_POST['ID']."'";
    $result = $conn->query($sql);
    require("./connection_close.php");
?>