<?php include("includes/header.php"); ?>
<?php include("testreg.php"); ?>
  <section>
    <div class="container">
      <div class="row animate-in" data-anim-type="fade-in-up">
        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
          <div class="services-wrapper">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
            <h3>Ваші коментарі</h3>
              <div id='comment'>
                <?php include("includes/comment.php"); ?>
              </div>
                <form action="" method="post" name="comment">
                  <h3>Залиште коментар:</h3> 
                    <p>
                     <label>Ім'я: </label><input id="author" type="text" name="name" >
                    </p>
                    <p>
                    <label>Коментар:</label><br /><textarea id="text_comment" name="text_comment" cols="30" rows="50"></textarea>
                    </p>
                    <p>
                      <input type="submit" id="ok" name="ok" value="Залишити коментар" >
                    </p>
                </form>
              </div>
           </div>
         </div>
       </div>
     </div>
  </section>
<?php include("includes/footer.php"); ?>