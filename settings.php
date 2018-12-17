<?php include("includes/header.php"); ?>
<?php include("authorization.php"); ?>
<?php include("includes/save_avatar.php") ?>
<?php include("includes/update_login.php") ?>
<?php include("includes/update_password.php") ?>
<div class="navbar-collapse collapse">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="home.php">Головна</a></li>
    <li><a href="logout.php">Вихід</a></li>
  </ul>
</div>
</div></div>
<section>
  <div class="container">
    <div class="row animate-in" data-anim-type="fade-in-up">
      <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
        <div class="services-wrapper">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
            <form id='error'><?php 
              if (is_array($err) || is_object($error)){
                 foreach ($err as $error){
                   echo $error;
                 }
                  if (is_array($er) || is_object($error)) {
                    foreach ($er as $error) {
                      echo $error;
                    }
                  }
              }?>
            </form>
            <h3>Налаштування </h3>
            <form action="" method="post" name="form" id="form">
              <table id="settingsTable">
                <tr>
                  <td><?php include("includes/avatar.php"); ?><img id="settingsAva" src="<?php echo $ava['img_src'] ?>"></td>
                  <td><label>Змінити фото </label><form name="upload" action="save_avatar.php" method="POST" ENCTYPE="multipart/form-data"><input type="file" name="userfile"><br><input type="submit" name="upload" value="Змінити фото"></form></td>
                </tr>
                <tr>
                  <td></td><td><label>Змінити пароль</label></td>
                </tr>
                <tr>
                  <td><p>Введіть старий пароль:</p><input name="old_password" type="password" size="15" maxlength="15"></td>
                  <td><p>Введіть новий пароль:</p><input name="new_password" type="password" size="15" maxlength="15"></td>
                </tr>
                <tr>
                  <td><input id="update_passw" type = "submit" name = "update_password" value = "Змінити логін"></td>
                </tr>
                <tr>
                  <td></td><td><label>Змінити логін</label></td>
                </tr>
                <tr>
                  <td><p>Введіть пароль:</p><input name="password" type="password" size="15" maxlength="15"></td>
                  <td><p>Введіть новий логін:</p><input name="new_login" type="varchar" size="15" maxlength="15"></td>
                </tr>
                <tr>
                  <td><input id="update_log" type = "submit" name = "update_login" value = "Змінити логін"></td>
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
