// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#register-forms").validate({
      rules:
	  {
			name: {
		    required: true,
			minlength: 3
			},
			password: {
			required: true,
			minlength: 6,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			email: {
            required: true,
            email: true
            },
            phone: {
            required: true,
            minlength: 11,
			maxlength: 11
            },
            biz_cate: {
                required: true,
                
            },
          
          biz_offer: {
                required: true,
                
            },
          
          gender: {
              required: true,
              
          },
          
           biz_stage: {
              required: true,
              
          },
          
          biz_addr: {
              required: true,
              minlength: 4
          },
          biz_det:{
              required: true,
              minlength: 4
          }
          
          
	   },
       messages:
	   {
            name: "Please enter Your Full Name",
            password:{
                      required: "Please provide a password",
                      minlength: "Password must be at least have 6 characters"
                     },
            email: { 
                required: "Please Anter An Email Address",
                email: "Please enter a valid Email Address"
            },
			cpassword:{
						required: "Please Retype Your Password",
						equalTo: "Password doesn't match !"
					  },
           
           phone:{
						required: "Please Enter Your Phone Number",
						minlength: "Phone Number must be at least 11 characters",
						maxlength: "Phone Number must be at least 11 characters",
						
					  },
           
           gender: {
           required: "Please Select Your Gender", 
       },
        biz_addr:{
            required: "Please Enter Your  Address",
            minlength: "Your Address is too short"
                },
           biz_det:{
               required: "Please Fill in this space",
               minlength: "Information is too short"
           }
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#register-forms").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'ajax-cusreg.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submits").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Processing...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submits").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submits").html('<img src="btn-ajax-loader.gif" /> &nbsp; Creating Acount Account...');
                                     alert('Registeration Successful....');
                                     window.location.reload(true);
                                   // window.location = 'success1.php';
									//setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success1.php"); }); ',2000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
                                        
                                        alert('Registeration Successful....');
                                         window.location.reload(true);
								        //window.location = 'success1.php';
						//$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									//$("#btn-submits").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Accountsss');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});