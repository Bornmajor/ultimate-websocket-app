<div class="side-chats-container">

<div class="d-flex align-items-center justify-content-between mx-1">
<h4>Available users</h4> 
<!-- <span style="font-size:20px;"><i class="fas fa-plus"></i></span>    -->
</div>   

<!-- #see other users-->
<div class="view_other_users"></div>





<!-- #active user-->
 <?php 
 if(isset($_SESSION['username'])){
   ?>
<div class="active-user-section">
<h5 class="mx-2">Your profile</h5>

<div class="d-flex align-items-center justify-content-between mb-3">
<div class="sidebar-chat-card">
<div class="sidebar-chat-pic">
    <img src="assets/images/<?php echo $_SESSION['profile_url']; ?>" alt="">
</div>
<div class="title-chat"><?php echo $_SESSION['username']; ?></div>   

</div> 
<a href="?page=logout" style="margin-left:40px;"><i class="fas fa-door-open fa-lg"></i></a>

</div>

</div>   
   <?php
 }
 ?>



</div>