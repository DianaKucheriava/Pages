$(function(){ 
    			var id_country=$(".country").val();
    		   			$.ajax({
						type: "POST",
						url:"region.php",
						data: {id_country:id_country},
						success: function(data){
							$(".region").html(data);
						}
					});
    			$(".country").change(function(){
					var id_country=$(".country").val();
					if (id_country==0) {
					}
					$.ajax({
						type: "POST",
						url:"region.php",
						data: {id_country:id_country},
						success: function(data){
							$(".region").html(data);
						}
					});
    			});
    		});