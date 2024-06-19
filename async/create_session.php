<?php
include('functions.php');

$mail = escapeString($_POST['mail']);


//add user to db if does not exist
//check if mail exist
$query = "SELECT * FROM wbsockets_users WHERE mail = '$mail'";
$select_users = mysqli_query($connection,$query);
if(mysqli_num_rows($select_users) == 0){

$usr_id = generateUserId();
$username = generateUsername();
$profile_url = getRandomImage();

//mail does not exist add to DB
$query = "INSERT INTO wbsockets_users(usr_id,mail,username,profile_url)VALUES('$usr_id','$mail','$username','$profile_url')";
$add_mail = mysqli_query($connection,$query);
checkQuery($add_mail);

$_SESSION['usr_id'] = $usr_id;    
$_SESSION['username']   = $username;
$_SESSION['profile_url'] = $profile_url;
    
}else{
    //user exist
    //create session
    while($row = mysqli_fetch_assoc($select_users)){
    $_SESSION['usr_id'] = $row['usr_id'];    
    $_SESSION['username']  =$row['username'];
    $_SESSION['profile_url'] = $row['profile_url'];

    }
}




    //if true
echo "<script type='text/javascript'>
window.setTimeout(function() {
window.location = '?page=home';
}, 2000);
</script>";


?>