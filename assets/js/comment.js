$(function() {
 $("#send").click(function(){
    var user_id = $("#name").val();
    var message = $("#message").val();				
      $.ajax({
        type: "POST",
        url: "send_comment.php",
        data: {"user_id": user_id, "message": message},
        cache: false,	
          success: function(data) {
          if(data.status == 'success'){
              $("#error").text("Ваше повідомлення відправлено").show().delay(2500).fadeOut(1000);
              $("#name").val("");
              $("#message").val("");
              $("#commentBlock").append("<div class='comment'>Ім'я: <strong>"+user_id+"</strong><br>"+message+"</div>");
          }else if(data.status == 'error'){
              $("#error").text("Повідомлення не відправлено Помилка БД").show().delay(1500).fadeOut(1000);
          } else {
              $("#error").text("Неможна відправляти порожні повідомлення").show().delay(1500).fadeOut(800);
          }
        }
      });
    return false;
  });
});