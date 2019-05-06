<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nuces Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Footer-with-button-logo.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/user.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/home_css.css">

    <link rel="stylesheet" href="cssfiles/Footer-with-button-logo.css">
	<link rel="stylesheet" href="home_css.css">
    <link rel="stylesheet" href="cssfiles/profile.css">
    <link rel="stylesheet" href="cssfiles/jobs.css">
    <link href="cssfiles/login_css.css" rel="stylesheet" type="text/css">
	 <script type="text/javascript" src="home.js"></script>
  
    <style>
       
	
        </style>

  
  
  
  </head>


<body  class=" ">

<div class="container-fluid ">
	<div class="row ">
			<div class="col-md-6 title h-100"> 
                <div class="row ">
                    <div class="col-md-11 myc2 ">
                        <div class="text-md-right mycomp text-uppercase">
                            <h1 class="mycomp">Health<br> Recommendation<br> System</h1>
                        </div>
                        <div class="text-md-right ">by<h4>INS</h4></div>

                        
                    </div>
                    
                   
                   
                </div>
               
			</div>
                
            <div class="col-md-1 vline">  <div class="" id="verticalLine" class="">
                        
                </div></div>


			<div class="col-md-5 ml-0 pl-0  myc12 h-100">
                <div class="mt-4 outerdiv pt-4">
                  
                    <div class="mr-4 mt-4 outerdiv pt-4 col-md-8">
                        <div class="ml-0 pl-0 choices text-md-center">
                            <a class="mybutton btn text-uppercase btn-lg my-4 ml-4 p-4 mr-0 pr-0" id="btnlogin" href="<?php echo base_url() . "user/login"; ?>" role="button">Login</a>
                            <div class="" id="verticalLine2" ></div>
                            <a class=" mybutton btn text-uppercase btn-lg p-4  ml-0" id="btnsignup" href="<?php echo base_url() . "user/signup"; ?>" role="button">Signup</a>
                         </div>
                         <div id="signup" class="my-4 ">
                                  <form action="<?php echo base_url() . "User/signUp2"; ?>" method="POST">
                                      <div class="form-group">
                                      
                                          <input required type="text" placeholder="username" class="form-control" name="username">
                                        </div>
                                      <div class="form-group">
                                      
                                        <input required  type="email" placeholder="email" class="form-control" name="email">
                                      </div>
                                      <div class="form-group">
                                        <input required  type="password" placeholder="password" class="form-control" name="password">
                                      </div>

                                      <div class="form-group">
                                          <input required  type="password" placeholder="confirm password" class="form-control" name="pwd">
                                        </div>

                                      
                                      <div class="text-center  mt-3 pt-3">
                                      <button type="submit" class="btn submitbtn mx-auto btn-lg">Submit</button>
                                    </div>
                                    </form>
                           </div>





                           <div id="login" class="my-4 ">
                              <form  action="<?php echo base_url() . "User/login2"; ?>" method="POST">
                                  
                                <div class="form-group">
                                    <input required  type="text" placeholder="username" class="form-control" name="username">
                                  </div>
                                  <div class="form-group">
                                    <input required  type="password" placeholder="password" class="form-control" name="password">
                                  </div>
                                  <div class="form-group form-check white">
                                      <label class="form-check-label">
                                        <input class="form-check-input white" type="checkbox"> Remember me
                                      </label>
                                    </div>

                                  <div class="text-center mt-3 pt-3">
                                  <button type="submit" class="btn submitbtn mx-auto btn-lg">Sign In</button>
                                </div>
                                </form>
                       </div>


                    </div>
                </div>




			</div>
				
				</div>
				

</div>

  

 
</body>




</html>



 <script>
 
 $(document).ready(function(){
  $("#signup").hide();

/* 
  $("#btnlogin").click(function(){


    $("#signup").hide();
    $("#login").show();
   
  });

  $("#btnsignup").click(function(){
  

    $("#login").hide();
    $("#signup").show();
   
  }); */

  jQuery(document).ready(function() {
      var url = window.location.href.toString();
      var splitted_url = url.split("/");
      var id = splitted_url[splitted_url.length - 1];
      if(id == "login") {
        jQuery('#login').css("display", "block");
        jQuery('#signup').css("display", "none");
      }
      else if (id == "signup") {
        jQuery('#signup').css("display", "block");
        jQuery('#login').css("display", "none");
      } 
      
  });
});
</script> 