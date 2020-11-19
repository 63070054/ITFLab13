<?php
    $conn = mysqli_connect('63070054itf.mysql.database.azure.com', 'waveza2@63070054itf', 'Zaza456654', 'ITFlab', 3306);
    $sql = 'SELECT * FROM guestbook WHERE ID = '.$_GET['ID'].'';
    $query = mysqli_query($conn, $sql);
    if(!$query) {
        header('Location: show.php');
    }
    else {
        $data = mysqli_fetch_assoc($query);
    }
?>
