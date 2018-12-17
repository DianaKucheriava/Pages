$(function() {
  $("#send").click(function(){
    var message = $("#message").val();  
      $.ajax({
        type: "POST",
        url: "send_comment.php",
        data: {"message": message},
        cache: false, 
        dataType:"json",
        success: function(data) {
          if(data.success== true){
            document.location.reload(true);
          }else if(data.success == false){
            $("#error").text(data.message).show().delay(1500).fadeOut(1000);
          }
        }
      });
    return false;
  });
});
