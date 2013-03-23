$(function(){
    
    //Ajax request to view the recent posts
    $.getJSON('/WWB/modules/recentPost.php',function(data){
        for(var i=0; i<data.length; i++){            
            $("#content").append('<a class="link" id="'+data[i].id+'" href="#"><h1>'+data[i].title+'</h1></a>\n\
                                  <p>Posted at '+data[i].date+'</p>');
        }
    })
    
    //Ajax request to view a single post when clicked
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
                                 <p id="date">Posted at '+data[0].date+'</p>\n ');
            },1000)
                   
            
        })       
    });
    
})

})