<script src="assets/js/all.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/myscript.js"></script>


<script>
    $(document).ready(function(){
        
        function loadOtherUsers(){
            $.ajax({
                url: "async/other_users.php",
                type: "POST",
                success:function(data){
                    if(!data.error){
                    $('.view_other_users').html(data);
                    }

                }
                })

        }

        loadOtherUsers();

    })
</script>
</body>
</html>