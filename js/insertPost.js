$(function(){
    
    $("#submitText").click(function(){
        var title = $("#title").val();
        var post  = $("#post").val();
        var Submit = true; 
        
        //Sending what the user entered to the database
        $.ajax({
            url : '/WWB/modules/insertPost.php',
            data: {Title: title, Post: post},
            type: "post"
        }).done(function(res){
            $("#content").children().fadeOut();
            setTimeout(function(){
                $("#content").append('<h1 id="response">Entry Posted</h1>');
            },1000)
            
            if(res){
                console.log("Data Entered");
            }else{
                console.log("Nothing Came Back");
            }                                
        })
    })
    
})

