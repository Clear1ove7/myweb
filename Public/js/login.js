(function(document,_js){
	_js.init=function(){
		
	}
	_js.login=function(){
		$('.btnLogins').off().on('click',function(){
			var urls = $('form').attr('data-url');
			var datas = {};
			datas.name = $('input[name=name]').val().trim();
			if(datas.name.length<1){
				return;
			}
			datas.password = $('input[name=password]').val().trim();
			$.post(urls,datas,function(e){
				window.location.href=e.url;
			})
			
		})
		$(document).keypress(function (e) {
	        if (e.keyCode == 13)
	        	$('.btnLogins').trigger('click');
	    })
	}
	_js.register=function(){
		$('.btnRegisters').off().on('click',function(){
			var urls = $('form').attr('data-url');
			var datas = {};
			datas.name = $('input[name=name]').val().trim();
			if(datas.name.length<1){
				return;
			}
			datas.password = $('input[name=password]').val().trim();
			$.post(urls,datas,function(e){
				console.log(JSON.stringify(e));
			})
			
		})
		$(document).keypress(function (e) {
	        if (e.keyCode == 13)
	        	$('.btnLogins').trigger('click');
	    })
	}
}(document,window.login={}))
