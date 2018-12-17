$(function() {
  $("#send").click(function(){
    var user_id = $("#nameuser").val();
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
          }else{
            $("#error").text(data.message).show().delay(1500).fadeOut(800);
          }
        }
      });
    return false;
  });
});
