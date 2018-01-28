$(document).ready(function(){
    $("#frm_pdo").submit(function(){

     $("#fmsg").html("").hide().fadeIn(1000);
     $("#lmsg").html("").hide().fadeIn(1000);
     $("#amsg").html("").hide().fadeIn(1000);
     $("#emsg").html("").hide().fadeIn(1000);

       if($("#fname").val()==""){
           $("#fmsg").html("<img src='images/error.png' alt='error' />").hide().fadeIn(1000);
           $("#fname").focus();
       }
       else
       if($("#lname").val()==""){
            $("#lmsg").html("<img src='images/error.png' alt='error' />").hide().fadeIn(1000);
           $("#lname").focus();
       }
       else
       if($("#age").val()==""){
            $("#amsg").html("<img src='images/error.png' alt='error' />").hide().fadeIn(1000);
           $("#age").focus();
       }
       else
       if($("#email").val()==""){
            $("#emsg").html("<img src='images/error.png' alt='error' />").hide().fadeIn(1000);
           $("#email").focus();
       }
       else{
           $.post("script/add.php", {id:$("#id").val(), fname:$("#fname").val(), lname:$("#lname").val(), age:$("#age").val(), email:$("#email").val()}, function(data){
               alert(data);
               window.location="index.php";
           });
       }
        return false;
    });
});