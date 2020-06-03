$(function(){
    function getresult(){
      $.get("./result.txt",function(res,status){
		var item=res.split('\n');
		// console.log(item);
		$('.result-list-item').html("");
		for(var i=0;i<item.length-1;i++){
			var num=(res.split(item[i])).length-1;
			// console.log(num);
			var gongji=item[i].split(' => ');
			console.log(gongji.length);
			PushResultDom(num,gongji[0],gongji[1].substr(0,5),gongji[1].substr(6,20),2);
		}
      });
	}
	getresult();
	function PushResultDom(lunci,gongji,beigongji,time,defen){
		$('.result-list-item').append("<li><ul><li>"+lunci+"</li><li>"+gongji+"</li><li>"+beigongji+"</li><li>"+time+"</li><li>"+defen+"</li></ul></li>");
	}
	PushResultDom();
});
