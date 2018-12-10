<?php include("save_user.php"); ?>
<?php include("includes/header.php"); ?>
<?php include ("bd.php"); ?>
    <section>
    	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
           	<script type="text/javascript" src="assets/js/region.js"></script>
           <div class="container">
            <div class="row text-center header">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                    <form method="POST" action="">
                    	<h3>Реєстрація</h3>
	                    	<table id="tbcity">
									<tr>
										 <td><label>Країна</label></td>
										 <td><select class="country" name="country" id="country">
										 	<option value="0">---Оберіть країну---</option>
										 	<?php include("country.php"); ?>									
										 </select></td>
									</tr>
									<tr>
										<td><label>Область</label></td>
										<td><span class="region" name="region" id="region"></span></td>
									</tr>
									<tr>
										<td><label>Країна</label></td>
										<td><span class="city" name="city" id="city"></span></td>
									</tr>
									<tr>
										<td><label>Ваш логін:</label></td>
										<td><input name="login" type="text" size="15" maxlength="15"></td>
									</tr>
									<tr>
										<td><label>Ваш пароль:</label></td>
							    		<td><input name="password" type="password" size="15" maxlength="15"></td>
									</tr>
									<tr>
										<td><input type="submit" name="submit" value="Зареєструватись" id="buttRegest"></td>
									</tr>
							</table>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php include("includes/footer.php"); ?>