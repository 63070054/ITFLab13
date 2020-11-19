<?php
    $conn = mysqli_connect('servertest002.mysql.database.azure.com', 'Trda@servertest002', 'Tadaohm1234', 'pythondbs');
    $sql = 'SELECT * FROM user WHERE ID = '.$_GET['ID'].'';
    $query = mysqli_query($conn, $sql);
    if(!$query) {
        header('Location: show.php');
    }
    else {
        $data = mysqli_fetch_assoc($query);
    }
?>