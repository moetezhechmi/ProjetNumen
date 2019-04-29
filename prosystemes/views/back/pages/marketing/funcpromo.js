$(document).ready(function(){
$('#search').keyup(function(){
	var search=$(this).val();
	if(search!=="")
	{
		$.post("postpromo.php",{search:search},function(data){
			$('#a').html(data);
		});
	}
});
});