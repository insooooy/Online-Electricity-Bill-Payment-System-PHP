$(document).ready(function(){

    $(document).on('click','a[data-role=Delete]',function(event){

        var id  = $(this).data('id');
       
        $.ajax({
            url      : 'mainCommentsViewDelete.php',
            method   : 'POST', 
            data     : {id:id},
            success  : function(response){
                     $('#khan').html(response);
                       }
        });
    
    
    
    
    });



});

