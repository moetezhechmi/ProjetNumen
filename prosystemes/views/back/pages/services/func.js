$(document).ready(function(){
$('#search').keyup(function(){
	var search=$(this).val();
	if(search!=="")
	{
		$.post("post.php",{search:search},function(data){
			$('#a').html(data);
		});
	}
});
});