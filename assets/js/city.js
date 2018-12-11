 $(function(){
	var id_region= $('select[name="region"]').val();
		$.ajax({
			type: "POST",
			url:"city.php",
			data: {id_region:id_region},
			dataType: "JSON",
			success: function(data){
				$(".city").html();
			}
		});
			$('select[name="region"]').change(function(){
				var id_region=$('select[name="region"]').val();
				if (id_region==0) {}
					$.ajax({
						type: "POST",
						url:"city.php",
						data: {id_region:id_region},
						dataType: "JSON",
						success: function(data){
								var SelectHTML= "<select class='city' name='city'>";
								var close = "</select>";
									for (var i = 0; i<data.length; i++) {
										SelectHTML	+= '<option value='+data[i].id_city+'>'+data[i].city+'</option'+close;
									}
									$(".city").html(SelectHTML);
						}
					});
			});
});