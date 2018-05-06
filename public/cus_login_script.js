// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			
			password: {
			required: true,
			},
			email: {
            required: true,
            email: true
            }
           
	   },
       messages:
	   {
            password:{
                      required: "Please provide a password",
                      
                     },
            email: { 
                required: "Please enter an Email Address",
                email: "Please enter a valid Email Address"
            }
			
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#register-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'ajax-cuslogin.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Processing...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry incorrect Email or Password!</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login To Account');
										
									});
																				
								}
								else if(data=="register")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Logging Into Account...');
                                    //<?php $itm_id = $_GET['itm_id']; ?>
                                   // window.location = 'index.php';
                                    window.location.reload(true);
									//setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("chat.php"); }); ',1000);
									
								}
								else{
                                    
                                    alert('Error');
										
									//$("#error").fadeIn(1000, function(){
											//window.location.reload(true);
						//$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									//$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									//});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});