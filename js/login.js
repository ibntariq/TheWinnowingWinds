$(function(){
    
    
    $("#login").click(function(){
        var username = $("#user").val();
        var password = $("#pass").val();
    
        //Authenticating the user
        $.ajax({
            url  :  "/WWB/modules/auth.php",
            data : {UserName: username,Password: password},
            type : "post"
        }).done(function(data){
            console.log(data);
            document.location.href='index.php';
            return false;
        })
        
    })
    
    
}) 



