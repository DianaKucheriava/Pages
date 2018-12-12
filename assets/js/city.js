 $(function(){
	var id_region= $('select[name="region"]').val();
	$.ajax({
		type: "POST",
		url:"city.php",
		data: {id_region:id_region},
		dataType: "JSON",
	});
	$('select[name="region"]').change(function(){
		var id_region=$('select[name="region"]').val();
		$.ajax({
			type: "POST",
			url:"city.php",
			data: {id_region:id_region},
			dataType: "JSON",
			success: function(data){
				var selectHTML= "<select class='city' name='city'>";
				for (var i = 0; i<data.length; i++) {
					selectHTML	+= '<option value='+data[i].id_city+'>'+data[i].city+'</option>';
				}
				selectHTML += "</select>"
				$(".city").html(selectHTML);
			}
		});
	});
});