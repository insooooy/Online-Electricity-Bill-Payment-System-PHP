$(document).ready(function(){

    $(document).on('click','#insertion',function(){
        
        $('#myModal2').modal('toggle');


        $('#save1').click(function(){         
         
     	  // var id  = $('#userId').val(); 
         var NIC =  $('#NIC1').val();
         var Gender =  $('#Gender1').val();
		  var MeterNO =  $('#MeterNO1').val();
		  var Name=  $('#Name1').val();
		  var FatherName=  $('#FatherName1').val();
		  var Address= $('#Address1').val();
          var email =   $('#email1').val();
          if(NIC==''){
         alert('NIC Number is require');
          }else if(MeterNO==''){
            alert('Meter Number is require');
          }else if(Name==''){
            alert('Name  is require');
          }else if(FatherName==''){
            alert('FatherName is require');
          }else if(Gender==''){
            alert('  Gender is require');
          }else if(Address==''){
            alert('Address  is require');
          }else if(email==''){
            alert('Email  is require');
          }else{
          $.ajax({
              url      : 'DBinsertion.php',
			        method   : 'POST',
              data     : { NIC: NIC, Gender : Gender , Address : Address , MeterNO: MeterNO , email : email , Name: Name, FatherName: FatherName },
              success  : function(data){
                $('#khan').html(data);
				            
                           
               $('#myModal2').modal('toggle'); 
              
                                

                         }
          });
        }
       });
   
	
    
       

    });

});