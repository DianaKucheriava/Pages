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
            <h3><a href="logout.php"> Вихід </a></h3>
            <h3>Ваші коментарі </h3>
            <div id="commentBlock">
              <?php include("includes/comment.php"); ?>
            </div>
            <form action="" method="post" name="form">
              <table>
                <tr>
                  <td><h3><?php echo $_SESSION['login']; ?></h3><br /><input name="name" type="hidden" id="name" disabled="true" value='<?php echo $_SESSION['user_id']; ?>'><input name="nameuser" type="hidden" id="nameuser" disabled="true" value='<?php echo $_SESSION['login']; ?>'> </td>
                </tr>
                <tr>
                  <td><label>Залиште коментар:</label><span id="error"> </span><br /><textarea name="message" rows="5" cols="50" id="message"></textarea></td>
                </tr>
                <tr>
                  <td><input name="js" type="hidden" value="no" id="js"><input name="button" type="submit" value="Коментувати" id="send"></td> 
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