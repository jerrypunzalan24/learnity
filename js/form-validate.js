$('#username').change(function(){
    var str = $(this).val();
    if(str.length > 0){
        $.ajax({
            url:"validate-username.php",
            type: "GET",
            data: "username="+str,
            success: function(result){
                $('#user-hint').html(result);
            }
        })
    }else{
        $('#user-hint').html("");
    }
});
$('#email').change(function(){
var str = $(this).val();
    if(str.length > 0){
        $.ajax({
            url:"validate-email.php",
            type: "GET",
            data: "email="+str,
            success: function(result){
                $('#email-hint').html(result);
            }
        })
    }else{
        $('#email-hint').html("");
    }
});