<?php include("testreg.php"); ?>
<?php  include("includes/header.php"); ?>
    <section>
        <div class="container">
            <div class="row text-center header">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
					<form method="POST" action="">
                 		 <h3>Вхід</h3>
						    <p>
							    <label> Ваш логін: <br> </label>
							    <input name = "login" type = "text" size = "15" maxlength = "15">
						    </p>
							<p>
								<label> Ваш пароль: <br> </label>
								<input name = "password" type = "password" size = "15" maxlength = "15">
							</p>
						    <p>
								<input id="buttEnter" type = "submit" name = "submit" value = "Увійти"><br />
								<a href="reg.php" id="a1"> Зареєструватися ? </a>
							</p>
				    </form>
			    </div>
			</div>
		</div>
	</section>
<?php include("includes/footer.php"); ?>