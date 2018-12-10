	<script>
 $(function(){
		var id_region= $('select[name="region"]').val();
					$.ajax({
						type: "POST",
						url:"city.php",
						data: {id_region:id_region},
						success: function(data){
						$(".city").html(data);}
					});
			$('select[name="region"]').change(function(){
			var id_region=$('select[name="region"]').val();
			if (id_region==0) {
			 }
					$.ajax({
							type: "POST",
							url:"city.php",
							data: {id_region:id_region},
							success: function(data){
							$(".city").html(data);}
					});
		});
	 });
</script>
	<?php
include("bd.php");
if (isset($_POST['id_country']) && !empty($_POST['id_country'])){
	$id_country = ($_POST['id_country']);
	$result=$link->query("SELECT * FROM region WHERE id_country=$id_country");
	echo "<select class='region' name='region'>";
	while ($row=$result->fetch_array(MYSQLI_BOTH)){
echo "<option value='{$row['id_region']}'>".$row['region']."</option>";
			}
			echo "</select>";
}
else {
echo "<select name='region' disabled><option value='0'>-------Оберіть область-------</option></select>";
}
?>