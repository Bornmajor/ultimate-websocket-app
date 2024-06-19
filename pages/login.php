<?php include('includes/header.php') ?>

<div class="container_login">
    <div class="container_welcome">
        <div class="feedback"></div>
     <h4>Welcome to wbsocket apps</h4>
     <p>Enter your email to proceed</p>

     <form action="" class="create_session_form">
     <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com" required>
    <label for="floatingInput">Email address</label>
    </div>

     <button type="submit" class="btn btn-primary get-started">Get started</button> 

     </form>
   
    </div>
  
</div>

<script>
$(".create_session_form").submit(function(e){
    e.preventDefault();

    let postData = $(this).serialize();

    $.post("async/create_session.php",postData,function(data){
       $(".feedback").html(data);
    });

})
</script>

<?php  include('includes/footer.php') ?>