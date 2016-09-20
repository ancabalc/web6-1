$(function(){
    
    (function getAll(){
    console.log("salut");
    $.ajax({
        
        url: document.location.origin + "/applications/list",
        
        success: function(response){
            
            var content='';
            
            for(var i in response ){
                // content += '<tr>';
                // content += '<th> Title </th>';
                // content += '<th> Description </th>';
                // content += '<th> Category </th> </tr>';
                // content += '<tr>';
                // content += '<td>' + response[i].title +'</th>';
                // content += '<td>' + response[i].description +'</th>';
                // content += '<td>' + response[i].category_id +'</th></tr>';
                content += '<div class="panel panel-default">';
                content +=  '<div class="panel-heading">';
                content +=    '<h1 class="panel-title">'+response[i].title+'</h1>';
                content +=    '<span>Category : '+ response[i].category_id +'</span>'
                content +=  '</div>';
                content +=  '<div class="panel-body">'+response[i].description+'</div>';
                
                content +='</div>';
            
            }
            
           
            $('.applications').html(content);
            
        },
          error: function(xhr, status, errorMessage) {
            alert("There was an error, pls try again");
            console.log("error", xhr, status, errorMessage);
        },
        
        complete: function(xhr, status) {
            
        }
    });
    

    })()//getAll end
    
})
    
    
