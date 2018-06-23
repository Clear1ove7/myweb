(function($,doc){
	
	var _this = this,
		indexNum = 0,/*记录显示div的序数*/
		itemLen = $('.items').length - 1,/*计算.items个数*/
		scrollTimes = 500;/*默认滑动时间*/
		/*根据.items个分配高度比*/
		$('.main').css('height',$('.items').length*100+'%');
		$('.items').css('height',100/$('.items').length+'%');
	////若是移动端则执行鼠标滚动事件
	doc.scroll = function(){
		$(document).off().on("mousewheel DOMMouseScroll", function (e) {
			//判断滚动方向
			var delta = (e.originalEvent.wheelDelta&&(e.originalEvent.wheelDelta>0?1:-1))||(e.originalEvent.detail && (e.originalEvent.detail>0?-1:1));      
			
			//将判断的结果传给wheel()方法
			doc.wheel(delta);
			
			//解绑滚动事件，防止连续滚动切换
			$(document).off();
			
			//重新执行scroll()方法，解除解绑滚动
			setTimeout(function(){ doc.scroll() },scrollTimes);
		});
	}
	
	doc.wheel = function(e){
		//根据方向对indexNum进行加减，并做边界处理
		indexNum = e>0?(indexNum<=0?0:indexNum-1):(indexNum>=itemLen?itemLen:indexNum+1);
		$('.main').css('top',"-"+indexNum*100+'%');
		$('.taps').removeClass('active');
		$('.taps:eq('+indexNum+')').addClass('active');
	}
	//点击切换items
	doc.tapFun = function(){
		$('.rigTap .taps').off().on('click',function(){
			//如果点击当前节点，则不再进行
			if($(this).hasClass('active'))
				return;
			$('.taps').removeClass('active');
			$(this).addClass('active');
			$('.main').css('top',"-"+$(this).attr('data-num')*100+'%');
		})
	}
	
	//若是移动端则执行手指滑动事件
	doc.touchFun = function(){
        var startX, startY, moveEndX, moveEndY, X, Y, delta;
        $("body").on("touchstart", function(e) {
            e.preventDefault();
            startX = e.originalEvent.changedTouches[0].pageX, startY = e.originalEvent.changedTouches[0].pageY;
        });
        $(document).off().on("touchmove", function(e) {
            e.preventDefault();
        	moveEndX = e.originalEvent.changedTouches[0].pageX;
        	moveEndY = e.originalEvent.changedTouches[0].pageY;
        	X = moveEndX - startX;
        	Y = moveEndY - startY;
            if (Math.abs(Y) > Math.abs(X) && Y > 0) 
            	delta = true;
            else if (Math.abs(Y) > Math.abs(X) && Y < 0) 
                delta = false;
            
			//将判断的结果传给wheel()方法
			setTimeout(function(){ doc.wheel(delta) },300);
			
			//解绑滚动事件，防止连续滚动切换
			$(document).off();
			
			//重新执行scroll()方法，解除解绑滚动
			setTimeout(function(){ doc.touchFun() },scrollTimes+300);
        });
	}
}($, window.index = {}));
