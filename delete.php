<?php
    $conn = mysqli_connect('63070054itf.mysql.database.azure.com', 'waveza2@63070054itf', 'Zaza456654', 'ITFlab', 3306);
    $sql = 'DELETE FROM guestbook WHERE ID = '.$_GET['ID'].'';
    if(mysqli_query($conn, $sql)) {
        echo "delete COMPLETED";
    }
    else {
        echo "FAILED TO DELETE";
    }
?>
