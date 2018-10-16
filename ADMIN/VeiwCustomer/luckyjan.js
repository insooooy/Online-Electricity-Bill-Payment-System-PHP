
 $(document).ready(function(){
	   

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(event){
		
            var id  = $(this).data('id');
            var NIC  = $('#'+id).children('td[data-target=NIC]').text();			
            var MeterNO  = $('#'+id).children('td[data-target=MeterNO]').text();
			var Name  = $('#'+id).children('td[data-target=Name]').text();
			var Gender = $('#'+id).children('td[data-target=Gender]').text();
			var FatherName = $('#'+id).children('td[data-target=FatherName]').text();
			var Address = $('#'+id).children('td[data-target=Address]').text();
            var email  = $('#'+id).children('td[data-target=Email]').text();
            $('#NIC').val(NIC);
			$('#Gender').val(Gender);
            $('#MeterNO').val(MeterNO);
			$('#Name').val(Name);
            $('#FatherName').val(FatherName);
			$('#Address').val(Address);
            $('#email').val(email);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
   });

 
      // now create event to get data from fields and update in database 

      $('#save').click(function(){         

     	   var id  = $('#userId').val(); 
         var NIC =  $('#NIC').val();
         var Gender =  $('#Gender').val();
		  var MeterNO =  $('#MeterNO').val();
		  var Name=  $('#Name').val();
		  var FatherName=  $('#FatherName').val();
		  var Address= $('#Address').val();
          var email =   $('#email').val();

          $.ajax({
              url      : 'khan.php',
              method   : 'POST', 
              data     : { NIC: NIC, Gender : Gender , Address : Address , MeterNO: MeterNO , email : email , Name: Name, FatherName: FatherName , id: id},
              success  : function(response){
                            // now update user record in table 
                             $('#'+id).children('td[data-target=NIC]').text(NIC);
                             $('#'+id).children('td[data-target=Gender]').text(Gender);
							 $('#'+id).children('td[data-target=MeterNO]').text( MeterNO);
                             $('#'+id).children('td[data-target=Email]').text(email);
                             $('#'+id).children('td[data-target=Name]').text(Name);
                             $('#'+id).children('td[data-target= FatherName]').text( FatherName);
							 $('#'+id).children('td[data-target=Address]').text(Address);
							 $('#myModal').modal('toggle'); 


                         }
          });
       });
	   
	
	
	
	
	$(document).on('click','a[data-role=Delete]',function(){
            var id  = $(this).data('id');
	       alert(id+ "  : You are sure to delete this record");
	  
         $.ajax({
              url      : 'Delete.php',
              method   : 'post', 
              data     : {id: id},
              success  : function(response){
                           $("#kkk").html(response);
							

                         }
               });
	
       });	  

});   