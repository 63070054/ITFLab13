<?php
    $conn = mysqli_real_connect($conn, '63070054itf.mysql.database.azure.com', 'waveza2@63070054itf', 'Zaza456654', 'ITFlab', 3306);
    $sql = 'DELETE FROM user WHERE ID = '.$_GET['ID'].'';
    if(mysqli_query($conn, $sql)) {
        echo "DELETE COMPLETED";
    }
    else {
        echo "FAILED TO DELETE";
    }
?>