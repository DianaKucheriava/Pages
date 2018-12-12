<?php include("includes/header.php"); ?>
<?php include("authorization.php"); ?>
 <section>
    <div class="container">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="assets/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="assets/js/comment.js"></script>
      <div class="row animate-in" data-anim-type="fade-in-up">
        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
          <div class="services-wrapper">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
            <h3>Ваші коментарі</h3>
            <div id="commentBlock">
                  <?php include("includes/comment.php"); ?>
             </div>
             <form action="sendMessage.php" method="post" name="form">
             <table>
               <tr>
                 <td> <label>Ім'я:</label><br /> <input name="name" type="text" id="name"></td>
               </tr>
               <tr>
                 <td><label>Коментар:</label><br /><textarea name="message" rows="5" cols="50" id="message"></textarea></td>
               </tr>
               <tr>
                 <td><input name="js" type="hidden" value="no" id="js"><input name="button" type="submit" value="Коментувати" id="send"></td> 
               </tr>
               <tr>
                 <td><span id="error"></span></td>
               </tr>
             </table>
             </form>
             </div>
           </div>
         </div>
       </div>
     </div>
  </section>
<?php include("includes/footer.php"); ?>