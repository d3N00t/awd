$(function(){
    $("#postflag").click(function(){
      $.get("http://10.7.8.24:8080/flag_file.php?token="+$('#token').val()+"&flag="+$('#flag').val(),function(res,status){
		  // console.log(res);
		  $('#tips').html(res);
		  $('#tips').show(res);
      });
	});
	function getTeamNum(){
	  $.get("./score.txt",function(res,status){
		var item=res.split('|');
		$('#token').html("");
		for(var i=0;i<item.length;i++){
			$('#token').append('<option value=team'+(i+1)+'>team'+(i+1)+'</option>')
		}
	  });
	}
	getTeamNum();
});
