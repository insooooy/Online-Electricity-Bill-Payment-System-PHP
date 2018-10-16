$(document).ready(function(){

    $(document).on('click','#khan',function(event){ 
        event.preventDefault();
        var referenceID=$("#referenceID").val();
           var units=$("#Units").val();
           var month=$("#Month").val();
           var date=$("#date").val();
           var meter=$("#MeterNO").val();
           var name=$("#Name").val();
           var NIC=$("#NIC").val();
           
           if(referenceID==''){
            alert("please enter reference ID");
           }else
         if(units==""){
             alert("please enter units");

         }else if( month=="Month"){
            alert("please select month");
         }else if(date==""){
            alert("please Enter date");
         }else{

            $.ajax({
                url      : 'updateAction.php',
                method   : 'POST', 
                data     : { NIC : NIC , referenceID : referenceID, units : units, month : month , date :  date , meter : meter , name: name},
                success  : function(date){
                        
                    $('#hh').html(date);
                           }
            });



         }

    });
});