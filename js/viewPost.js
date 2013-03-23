$(function(){
    
    //Ajax request to fetch the blog posts as a JSON object    
    $.getJSON('/WWB/modules/viewPost.php',function(data){
        for(var i=0; i<data.length; i++){            
            $("#content").append('<a class="link" id="'+data[i].id+'" href="#"><h1>'+data[i].title+'</h1></a>\n\
                                  <p>Posted at '+data[i].date+'</p>');
        }
        
    })
    
    //Request to view a single post when viewed
    $(document).ajaxComplete(function() {
    $("a").on("click",function(){
        var id = $(this).attr("id");        
        
        $.ajax({
            dataType: 'json',
            url  :  "/WWB/modules/viewSinglePost.php",
            data : {ID: id},
            type : 'post'
        }).done(function(data){           
            $("#content").children().fadeOut();
                setTimeout(function(){
                    $("#content").append('<h1 id="title">'+data[0].title+'</h1>\n\
                                 <p id="post">'+data[0].post+'</p>\n\
                                 <p id="date">Posted at '+data[0].date+'</p>\n\
                                 <div class="delLink" id="'+data[0].id+'"><p id="delText">Delete Post</p></div>');
                },1000)
                 
            
            
        })       
    });
    
    //Deleting the post
    $(".delLink").click(function(){
        var id = $(this).attr("id");
        console.log("Delete link Clicked");
        $.ajax({
            dataType: 'json',
            url  :  "/WWB/modules/delPost.php",
            data : {ID: id},
            type : 'post'
        }).done(function(data){
            })
            $("#content").children().fadeOut();
            $("#content").append('<h1 id="response">Entry Deleted</h1>');
        
    })
    
    
    
    
    
    });
    
         
})


