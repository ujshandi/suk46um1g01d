$(document).ready(function(){
  $(".loginform").hide();
    $(".login").click(function () {
       $(".loginform").slideToggle("slow");
     $(this).toggleClass("arrowup");
    });
   
   if ($("#edit-name-wrapper input[@class='form-text required error']").length > 0 ) {
   	$(".loginform").show();
   	$(".login-error").html('Username or Password is wrong');
   }
  if ($("#edit-name-1-wrapper input[@class='form-text required error']").length > 0 ) {
   	$(".loginform").show();
   	$(".login-error").html('Username or Password is wrong');
   }
 
 
 
  });