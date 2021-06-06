$(document).ready(function(){

	product();

	function product(){
		$.ajax({
			url:"action111.php",
			method:"post" ,
			data: {getproduct:1},
			success : function(data){
			$("#get_product").html(data);
			}
		})
		
	}
	
})

	