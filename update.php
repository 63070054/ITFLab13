<?php
	$conn = mysqli_connect('63070054itf.mysql.database.azure.com', 'waveza2@63070054itf', 'Zaza456654', 'ITFlab', 3306);

	$name = $_POST['Name'];
	$comment = $_POST['Comment'];
	$link = $_POST['Link'];
	$id = $_POST['ID'];

    $sql = 'UPDATE guestbook SET Name = "'.$name.'", Comment = "'.$comment.'", Link = "'.$link.'" WHERE ID = '.$id.'';
    if(mysqli_query($conn, $sql)) {
        echo "EDIT COMPLETED";
    }
    else {
        echo "FAILED TO EDIT";
    }
?>
