$(function(){
	for(var i=10;i<=50;i++){
		$('.f'+i).css('font-size',i+'px');
	}
	for(var i=0;i<$('.lineH').length;i++){
		$('.lineH')?$('.lineH:eq('+i+')').css('line-height',$('.lineH:eq('+i+')').height()+'px'):'';
	}
	
})
