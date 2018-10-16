$(document).ready(function(){

    $(document).on('click','#update',function(event){ 
        event.preventDefault();
       var cost = $('#cost').val();
       
      
       if(cost==''){
        alert("please Enter Cost per Unit");
       }else{

        $.ajax({
            url      : "mainCostPerUnitDB.php",
            method   : "POST", 
            data     : {cost:cost},
            success  : function(resposd){
               
              $('#result').html(resposd);
               $("#form")[0].reset();
                       }
        });

       }
    });
});