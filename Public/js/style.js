$(function(){
	//根据f+数字的class来设置字体大小
	for(var i=10;i<=50;i++){
		$('.f'+i).css('font-size',i+'px');
	}
	//line-height自适应
	for(var i=0;i<$('.lineH').length;i++){
		$('.lineH')?$('.lineH:eq('+i+')').css('line-height',$('.lineH:eq('+i+')').height()+'px'):'';
	}
	
})
