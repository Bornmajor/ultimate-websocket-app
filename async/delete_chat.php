<?php
include('functions.php');

$current_usr_id = $_SESSION['usr_id'];
$other_usr_id = escapeString($_POST['recipient_id']); 

$query = "DELETE FROM wbsockets_messages WHERE (sender_usr_id = '$current_usr_id' AND recipient_usr_id = '$other_usr_id') OR (sender_usr_id = '$other_usr_id' AND recipient_usr_id = '$current_usr_id')";
$delete_chat = mysqli_query($connection,$query);
checkQuery($delete_chat);
