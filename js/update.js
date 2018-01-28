$(document).ready(function(){

  $("#frm_edit").submit(function(e){
      e.preventDefault();
      var fname=$("#fname").val();
      var lname=$("#lname").val();
      var age=$("#studentage").val();
      var email=$("#email").val();
      var id=$("input[type='submit']").attr("id");

      $("#fmsg").html("").hide().fadeTo(200,0.1);
      $("#lmsg").html("").hide().fadeTo(200,0.1);
      $("#amsg").html("").hide().fadeTo(200,0.1);
      $("#emsg").html("").hide().fadeTo(200,0.1);

      if(fname==""){
          $("#msg").fadeTo(200,0.1,function(){
              $("#fmsg").html("<img src='images/error.png' alt='error' />").hide().fadeTo(900,1);
                $("#fname").focus();
          });
      }
      else
      if(lname==""){
          $("#lmsg").html("<img src='images/error.png' alt='error' />").hide().fadeTo(900,1);
          $("#lname").focus();
      }
      else
      if(age==""){
           $("#amsg").html("<img src='images/error.png' alt='error' />").hide().fadeTo(900,1);
          $("#studentage").focus();
      }
      else
      if(email==""){
           $("emsg").html("<img src='images/error.png' alt='error' />").hide().fadeTo(900,1);
          $("#email").focus();
      }
      else{
          $.post("script/edit.php", {id:id,fname:fname,lname:lname,age:age,email:email}, function(data){
                $("#msg").html(data).hide().addClass("msg").fadeTo(900,1).delay(1000);
                var interval = setTimeout(function() {
                    clearTimeout(interval);
                    window.location="index.php";
                }, 3000);
          });
      }
  });


   $("#cancel").click(function(){
       window.location="index.php";
   });


});