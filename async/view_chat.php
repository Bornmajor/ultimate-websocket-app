
<?php 
include('functions.php');

$current_usr_id = $_SESSION['usr_id'];
$other_usr_id = escapeString($_POST['recipient_id']);

$query = "SELECT * FROM wbsockets_messages WHERE (sender_usr_id = '$current_usr_id' AND recipient_usr_id = '$other_usr_id') OR (sender_usr_id = '$other_usr_id' AND recipient_usr_id = '$current_usr_id')";
$select_chat = mysqli_query($connection,$query);
checkQuery($select_chat);
if(mysqli_num_rows($select_chat) !== 0){
while($row = mysqli_fetch_assoc($select_chat)){
$msg_id = $row['msg_id'];
$msg_content = $row['msg_content'];
$recipient_usr_id = $row['recipient_usr_id'];
$sender_usr_id = $row['sender_usr_id'];

?>

<?php 
if($sender_usr_id == $current_usr_id){
 ?>
<div class="sender-chat-msg-tab">
 <div class="chat-content"><?php echo $msg_content ?></div>
</div>
 <?php 
}else{
  ?>
<div class="recipient-chat-msg-tab">
  <div class="chat-content"><?php echo $msg_content ?></div> 
</div>
  <?php
}
?>


<?php
}  
}else{
  echo "No messages here";
}

