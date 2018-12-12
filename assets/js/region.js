$(function(){ 
    var id_country=$(".country").val();
    	$.ajax({
			type: "POST",
			url:"region.php",
			data: {id_country:id_country},
			dataType: "json",
			});
    		$(".country").change(function(){
				var id_country=$(".country").val();
					if (id_country==0) { }
					$.ajax({
						type: "POST",
						url: "region.php",
						data: {id_country:id_country},
						dataType: "json",
						success: function(data){
						var selectHTML= "<select class='region' name='region'>";
							for (var i = 0; i<data.length; i++) {
								selectHTML	+= '<option value='+data[i].id_region+'>'+data[i].region+'</option>';
							}
							selectHTML+= "</select>";
								$(".region").html(selectHTML);
						}
					});
    		});
});
