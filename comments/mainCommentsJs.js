$(document).ready(function(){

    $(document).on('click','#submit',function(event){ 
        event.preventDefault();
       var name = $('#name').val();
       var date=$('#date').val();
       var ID=$('#ID').val();
       var message=$('#message').val();
       if(ID==''){
        alert("please Enter Customer ID");
       }else
     if(name==""){
         alert("please enter Name");

     }else if(message==""){
        alert("please write some message");
     }else{

        $.ajax({
            url      : "mainCommentsDB.php",
            method   : "POST", 
            data     : { ID : ID , date : date , message : message , name : name},
            success  : function(resposd){
               
              $('#khan').html(resposd);
               $("#form")[0].reset();
                       }
        });

     }
});
});