

<html>
<head></head>
<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>	
<script>
$(document).ready(function(){
	$("#buton").on("click", function(){ 
		var gonderilenform = $("#gonderilenform").serialize(); 
		$.ajax({
			url:'islem.php', 
			type:'POST', 
			data:gonderilenform, 
			success:function(e){ 
				$("#veriler").html("").html(e); 
			}
		});
		
	});
});
</script>
<body>
    <form action="islem.php" id="gonderilenform" method="POST"> 
        <textarea name="data" rows="12" cols="35" placeholder="Example; 
		272 x 432
		432 x 232
		532 x 432"></textarea><br> 
        <input type="button" id="buton" value="Calculate">
    </form>
    <div id="veriler"></div>
   
    
</body>
</html>