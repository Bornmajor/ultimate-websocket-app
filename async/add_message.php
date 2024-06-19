<?php
include('functions.php');

$sender_usr_id = $_SESSION['usr_id'];
$recipient_usr_id = escapeString($_POST['recipient_usr_id']);
$msg = escapeString($_POST['msg']);


$query = "INSERT INTO wbsockets_messages(msg_content,sender_usr_id,recipient_usr_id)VALUES('$msg','$sender_usr_id','$recipient_usr_id')";
$add_message = mysqli_query($connection,$query);
checkQuery($add_message);
