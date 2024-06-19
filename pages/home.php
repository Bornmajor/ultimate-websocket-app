<?php include('includes/header.php') ?>
<?php
if(!isset($_SESSION['usr_id'])){
  //if ssession not set
  header("location: ?page=login");
}
?>
<div class="container-body">
    
<div class="sidebar-container">


<?php 
include('includes/sidebar.php')
?>


</div>
<?php 
if(isset($_GET['recipient_id'])){
?>
<div class="chat-container">

<div class="chat-tab-header">

   <div class="chat-tab-header-1">
       <div class="profile-pic-header">
        <img src="assets/images/<?php echo getUserData('profile_url',$_GET['recipient_id']); ?>" alt="">
    </div>
    <div class="profile-title-header">
    <?php echo getUserData('username',$_GET['recipient_id']); ?>
    </div>
   </div>
 

    <div class="profile-options-header">
    <div class="dropdown">
        <span class="icon-drop" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-ellipsis-v"></i>
        </span>
 
  <ul class="dropdown-menu">
    <li><a class="dropdown-item clear-chat" >Delete chat</a></li>
    <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li> -->
  </ul>
</div>
    </div>

</div>

<!-- #message text comes here-->
<div class="chat-panel-container">

 <!-- #load chats-->

</div>

<div class="chat-prompt-container">



<div class="mb-3 chat-input" >
  <textarea class="form-control text-content"  recipient-id="<?php echo $_GET['recipient_id'] ?>" id="exampleFormControlTextarea1" placeholder="Type something.." rows="3" name="message" required></textarea>
</div>

<div class="send-btn">
 <button class="send_btn" disabled><i class="fas fa-paper-plane fa-lg"></i></button>
</div>

</div>

</div>
<script>

//work only when recipient_id is set
$(document).ready(function(){

var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};  

//load msg 
function loadChat(){
let recipient_id = "<?php echo $_GET['recipient_id']; ?>";
$.ajax({
url: "async/view_chat.php",
data:{recipient_id:recipient_id},
type: "POST",
success:function(data){
    if(!data.error){
    $('.chat-panel-container').html(data);
    //scroll chat-panel-container
    $('.chat-panel-container').scrollTop($('.chat-panel-container')[0].scrollHeight);

    }

}
})

console.log('Loaded chats');
}
loadChat();

$(".clear-chat").click(function(e){
let recipient_id = "<?php echo $_GET['recipient_id']; ?>";

if(confirm("Do you wish to delete this chat")){
$.post("async/delete_chat.php",{recipient_id:recipient_id},function(){
  loadChat();

  //trigger reload other party
  conn.send('Clear data');

});  

}


})


  $('.text-content').on('input', function() {
      let content = $(this).val();
      if (content.trim() !== '') {
          $('.send_btn').prop('disabled', false);
      } else {
          $('.send_btn').prop('disabled', true);
      }

   

  });

  $(".send_btn").click(function(e){
    let recipient_usr_id = $(".text-content").attr("recipient-id");
  

    let msg = $(".text-content").val();

    //store message
    $.post("async/add_message.php",{msg:msg,recipient_usr_id:recipient_usr_id},function(){
     conn.send(msg);
    loadChat();
    $('.text-content').val('');  // Clear the textarea  
    })
  
   
  })

  //fired when any user send a message
conn.onmessage = function(e) {
loadChat();
console.log('On message');
};

    

});




</script>

<?php
}else{
  ?>
<div class="container_center">
  <div class="empty_section">
    <img src="assets/images/chat-pana.png" alt="">
    <h5>Tap on user on left sidebar to chat</h5>
  </div>  
</div>


  <?php
}
?>


</div>


<?php include('includes/footer.php') ?>