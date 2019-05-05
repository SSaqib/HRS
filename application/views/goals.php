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
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/logo.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"  crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet'>
    <link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Allerta+Stencil">


<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/user.css">
    
  
    <style>
       
	
        </style>

  
  
  
  </head>


<body  class=" ">
    <nav class="navbar navbar-expand-sm mynav ">
        <!-- <img src="newlogo3.jpeg" alt="Logo" style="width:130px;height:100%; "> -->
        <h1 class="px-1">HRS</h1>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          
         
               <i class="fas fa-bars" style="font-size: 30px;color: white;border:2px solid white;padding:5px;border-radius:13px; "></i>
             
         </button>
    
    
         <div class="collapse navbar-collapse" id="collapsibleNavbar"> 
     <ul class="navbar-nav ml-auto" >
       <li class="nav-item">
         <a class="nav-link active px-2" href="#"><i class="fas fa-home  mx-1"></i>Home</a>
       </li>
       <!-- <li class="nav-item">
         <a class="nav-link px-2" href="#">About</a>
       </li>
       <li class="nav-item ">
         <a class="nav-link px-2" href="#">Help</a>
       </li> -->
       <li class="nav-item">
        <a class="nav-link active px-2" href="#"><i class="fa fa-bell  mx-1" aria-hidden="true"></i>Reminders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active px-2" href="#"><i class="fas fa-bullseye  mx-1"></i>Goals</a>
      </li>
    
       <li class="nav-item">
           <a href="#" class="nav-link px-2" onclick="loginbutton()"> <i class="fa fa-user  mx-1" aria-hidden="true"></i>Profile</a>
         </li>

         <li class="nav-item">
           
                <a href="#" class="nav-link px-2" onclick="createaccountbutton()"> <i class="fa fa-comments-o   mx-1" aria-hidden="true"></i>Feedback</a>
              </li>

              <li class="nav-item">
           
                <a href="#" class="nav-link px-2" onclick="createaccountbutton()"><i class="far fa-question-circle  mx-1"></i>Help</a>
              </li>    

    
         <li class="nav-item">
           
             <a href="#" class="nav-link px-2" onclick="createaccountbutton()"> <i class="fas fa-sign-in-alt mx-1"></i>Log out</a>
           </li>
     
     </ul>
         </div>
    
    </nav>
    


    <section class="section">
        <p class="marquee text-styling">
        “Eat and drink and do not commit excesses; indeed He does not love those who are excessive” (Al-Quran 7:31).&emsp;&emsp;&emsp;&emsp;&emsp;
        “Don’t indulge in over-eating because it would quench the light of faith within your hearts” (Hadith).&emsp;&emsp;&emsp;&emsp;&emsp;
        “Your body has a right over you” (Hadith).&emsp;&emsp;&emsp;&emsp;&emsp;
        “A stronger believer is better than a weak believer” (Hadith).&emsp;&emsp;&emsp;&emsp;&emsp;
        "Everything good that happens to you (O Man) is from God, everything bad that happens to you is from your own actions". (Quran 4:79).&emsp;&emsp;&emsp;&emsp;&emsp;
        "O mankind: Eat of what is lawful and good on earth" (Quran 2: 168).&emsp;&emsp;&emsp;&emsp;&emsp;
        "Eat of the good things we have provided for your sustenance, but commit no excess therein, lest my wrath should justly descend on you, and those on whom descends my wrath do perish indeed" (Quran 20:81).&emsp;&emsp;&emsp;&emsp;&emsp;
        "And from the fruits of date palm and grapes you get wholesome drink and nutrition: Behold in this is a sign for those who are wise" (Quran 16:67).&emsp;&emsp;&emsp;&emsp;&emsp;
        “Whenever a Muslim is afflicted by harm from sickness or other matters, God will expiate his sins, like leaves drop from a tree.” (Hadith).&emsp;&emsp;&emsp;&emsp;&emsp;
        
        “Let food be thy medicine and medicine be thy food.” ― Hippocrates.&emsp;&emsp;&emsp;&emsp;&emsp;
        “A fit, healthy body—that is the best fashion statement” ― Jess C Scott.&emsp;&emsp;&emsp;&emsp;&emsp;
        “Healthy citizens are the greatest asset any country can have.” ― Winston S. Churchill.&emsp;&emsp;&emsp;&emsp;&emsp;
        “When health is absent, wisdom cannot reveal itself, art cannot manifest, strength cannot fight, wealth becomes useless, and intelligence cannot be applied.” ― Herophilus.&emsp;&emsp;&emsp;&emsp;&emsp;
        “Health is the greatest possession. Contentment is the greatest treasure. Confidence is the greatest friend.” ― Lao Tzu.&emsp;&emsp;&emsp;&emsp;&emsp;
        "Before healing others, heal yourself." - Gambian.&emsp;&emsp;&emsp;&emsp;&emsp;
        "Eat to live, not live to eat. " - Socrates.&emsp;&emsp;&emsp;&emsp;&emsp;
        "To enjoy the glow of good health, you must exercise." - Gene Tunney.&emsp;&emsp;&emsp;&emsp;&emsp;
        "Happiness is nothing more than good health and a bad memory." - Albert Schweitzer.&emsp;&emsp;&emsp;&emsp;&emsp;
        "The greatest wealth is health." - Virgil.&emsp;&emsp;&emsp;&emsp;&emsp;
        </p>

        
    </section>
    
    
    <div class="row">
    <div class="col-md-2"></div>
  
    <div class="col-md-8 my-4">
                <div class="container"><a class="btn btn-primary m-2">Show Goals</a>    
        <a href="<?php echo base_url() . "User/create_goal"; ?>"  class="btn btn-success m-2">Add goals</a></div>
        <div class="text-center"><h1>Your Goals</h1></div>
            <div class="inner_profile container m-4" id="goal_appender">
               
                 
            
             </div>
                
                  </div>
			  
			  
          
        </div>


        



    </div>


    <div class="col-md-2"></div>

  </div>
</body>




</html>



 <script>
 
 $(document).ready(function(){
  
  
  $.ajax({
          url:'<?php echo base_url() . "User/getGoals"; ?>',
          method: 'POST',
          data: {},
          success: function(response){
            console.log("hello");
              //alert('You have successfully send the friend request');
              //alert(response);
              //$("#friendsappender").empty();  //clearing previous results
              var allGoals = JSON.parse(response);
              loadGoals(allGoals);
            
              
 } }); 




  /*$(".deleteGoal").click(function() {
 
        var goal_id= jQuery(this).attr('id');
        var sub=$("#subject"+goal_id).text()
       // console.log(fr_id);
         $.ajax({
          url:'<?php echo base_url() . "User/deleteGoal"; ?>',
          method: 'post',
          data: {reminder_id: reminder_id,subject:sub},
          success: function(response){
              alert('You Reminder has been deleted successfully');
           
              $("#myreminder"+reminder_id).hide(2000);
 } });   
           
});*/
  



function loadGoals(allGoals) {


allGoals.forEach(function(reminder){
      postHtml = ' <div id="myreminder'+goal.username+'" class="container" >\
                  <br/>\
                  <hr/>\
                    <p id="subject">Subject: &emsp;&emsp; <span class="mysub">'+goal.subject+'</span></p>\
                \
                    <p>Time:  &emsp;&emsp; <span class="mysub">'+goal.description+'</span></p>\
                          <div class="text-right"><a id="'+goal.completed+'" class="btn btn-danger deletereminder">Delete reminder</a></div>\
                  </div>\
                        '
      $("#goal_appender").append(postHtml);
});

}





  });
</script> 