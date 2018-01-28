$(document).ready(function(){
    $(function(){
        $.ajax({
              url       : 'script/view_records.php',
              data      : {},
              type      : 'POST',
              success   : function(data){
                  $("#show_results").html(data).hide().fadeIn(1000);
              }
        });
    });
});


