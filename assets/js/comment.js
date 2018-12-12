$(function() {
 $("#send").click(function(){
    var name = $("#name").val();
    var message = $("#message").val();				
      $.ajax({
        type: "POST",
        url: "send_comment.php",
        data: {"name": name, "message": message},
        cache: false,						
        success: function(response){
          var messageResp = new Array('Ваше повідомлення відправлено','Повідомлення не відправлено Помилка БД','Неможна відправляти порожні повідомлення');
          var resultStat = messageResp[Number(response)];
          if(response == 0){
            $("#name").val("");
            $("#message").val("");
            $("#commentBlock").append("<div class='comment'>Ім'я: <strong>"+name+"</strong><br>"+message+"</div>");
          }
            $("#error").text(resultStat).show().delay(1500).fadeOut(800);
        }
      });
      return false;
  });
});