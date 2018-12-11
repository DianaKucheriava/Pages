$(function(){ 
    var id_country=$(".country").val();
    	$.ajax({
			type: "POST",
			url:"region.php",
			data: {id_country:id_country},
			dataType: "JSON",
			success: function(data){
				$(".region").html();
			}
		});
    		$(".country").change(function(){
				var id_country=$(".country").val();
					if (id_country==0) { }
					$.ajax({
						type: "POST",
						url: "region.php",
						data: {id_country:id_country},
						dataType: "JSON",
						success: function(data){
							var SelectHTML= "<select class='region' name='region'>";
							var close = "</select>";
							for (var i = 0; i<data.length; i++) {
								SelectHTML	+= '<option value='+data[i].id_region+'>'+data[i].region+'</option'+close;
							}
								$(".region").html(SelectHTML);
						}
					});
    		});
});
