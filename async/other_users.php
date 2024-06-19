<?php
include('functions.php');

$usr_id = $_SESSION['usr_id'];
$query  = "SELECT * FROM wbsockets_users WHERE usr_id <> '$usr_id'";
$select_other_users = mysqli_query($connection,$query);
checkQuery($select_other_users);

if(mysqli_num_rows($select_other_users) !== 0){
while($row = mysqli_fetch_assoc($select_other_users)){
$this_usr_id = $row['usr_id'];
$profile_url = $row['profile_url'];
$username = $row['username'];
?>

<a class="sidebar-chat-card" href="?page=home&recipient_id=<?php echo $this_usr_id?>">

<div class="sidebar-chat-pic">
    <img src="assets/images/<?php echo $profile_url ?>" alt="">
</div>
<div class="title-chat"><?php echo $username; ?></div>   

</a>
 
<?php
}
}else{
    echo 'No users';
}
