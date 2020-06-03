$(function(){
    function getScore(){
      $.get("./score.txt?"+Math.random(),function(res,status){
		var item=res.split('|');
		$('.score-list-item').html("");
		for(var i=0;i<item.length;i++){
			PushScoreDom(i+1,"team"+(i+1),item[i])
		}
      });
	}
	getScore();
	function PushScoreDom(mingci,tema,score){
		$('.score-list-item').append("<li><ul><li>"+mingci+"</li><li>"+tema+"</li><li>"+score+"</li><li>运行正常</li></ul></li>");
	}
	PushScoreDom();
});
