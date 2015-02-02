var guys = document.getElementsByClassName("guys");
var bg = document.getElementsByClassName("bg-wrapper")[0];
var bg_inner = bg.getElementsByTagName("img")[0];


var sizingEvent = function(){
   // サイズを調整するイベント 
   bg.style.width = window.innerWidth + "px";
   bg.style.height = window.innerHeight + "px";
};

var last_changed_val = 0;
var flag_img_loaded = 0;

// triggle 
var triggle_to_show = true;

// BEGIN TO CODE FROM HERE
var section = [
	document.querySelector("section#a"),
	document.querySelector("section#b"),
	document.querySelector("section#c"),
	document.querySelector("section#d"),
	document.querySelector("section.aboutus"),
];
var fixedBox = document.getElementsByClassName("fixed-box");
	

var triggle_flag = false;
var fadeInAndOutPeriod = 500;
var bg_dimension = {
	top: 0,
	width:0,
	left: 0,
};

var human_animation_show = "flipInX";
var human_animation_hide = "flipOutX";
var text_animation_show = "fadeIn";
var text_animation_hide = "fadeOut";
var when_section1_event = function(_top){
	console.log("section 1");
	bg.style.top = (window.innerWidth + _top)+"px";
	// if(_top > -50){
	// 	if(!triggle_flag){
	// 		triggle_flag = true;
	// 		// execute when entered section (ONE TIME ONLY)
	// 		var _o = guys[0].style.opacity;
	// 		if(!isNaN(_o) && _o > 0.0){
	// 			fadeOut(guys[0],fadeInAndOutPeriod);
	// 		}
	// 	}
	// }else{
	// 	triggle_flag = false;
	// }
	bg_inner.style.width = window.innerWidth + "px";

	addClass(guys[0],human_animation_hide);
	addClass(guys[1],human_animation_hide);
	addClass(guys[2],human_animation_hide);

	addClass(fixedBox[0], text_animation_hide);
	addClass(fixedBox[1], text_animation_hide);
	addClass(fixedBox[2], text_animation_hide);
};
var when_section2_event = function(_top){
	bg.style.top = "0";
	bg_dimension.left = 0;
	bg_dimension.top = 0.4*(_top);
	bg_dimension.width = window.innerWidth +( 1.8*(-_top));

	if(bg_dimension.top >= -155.0){
		bg_inner.style.top = bg_dimension.top + "px";	
	}
	if(bg_dimension.width < 1700){
		bg_inner.style.width = bg_dimension.width + "px";		
	}
	if(bg_dimension.top <= -155.0 && bg_dimension.width >= 1700){
		
		addClass(guys[0],human_animation_show);
		addClass(guys[2],human_animation_hide);
		addClass(guys[1],human_animation_hide);

		removeClass(guys[2],human_animation_show);
		removeClass(guys[1],human_animation_show);
		removeClass(guys[0],human_animation_hide);
		

		
		addClass(fixedBox[0], text_animation_show);
		addClass(fixedBox[1], text_animation_hide);
		addClass(fixedBox[2], text_animation_hide);

		removeClass(fixedBox[0], text_animation_hide);
		removeClass(fixedBox[1], text_animation_show);
		removeClass(fixedBox[2], text_animation_show);

	}else{
		
		addClass(guys[0],human_animation_hide);
		addClass(guys[1],human_animation_hide);
		addClass(guys[2],human_animation_hide);

		removeClass(guys[0],human_animation_show);
		removeClass(guys[1],human_animation_show);
		removeClass(guys[2],human_animation_show);
		

		addClass(fixedBox[0], text_animation_hide);
		addClass(fixedBox[1], text_animation_hide);
		addClass(fixedBox[2], text_animation_hide);
		removeClass(fixedBox[0], text_animation_show);
		removeClass(fixedBox[1], text_animation_show);
		removeClass(fixedBox[2], text_animation_show);
	}
	
	
	
	console.log("section 2 "+_top);
	
};
var when_section3_event = function(_top){
	console.log("section 3 "+_top);
	bg_dimension.left = _top;
	bg_dimension.width = 1700.0;
	bg_dimension.top = -155.0;
	if(bg_dimension.left >= -380){
		// 不飽和
		bg_inner.style.left = bg_dimension.left + "px";	
		
		
		removeClass(guys[0],human_animation_show);
		removeClass(guys[1],human_animation_show);
		removeClass(guys[2],human_animation_show);
		

		addClass(guys[0],human_animation_hide);
		addClass(guys[1],human_animation_hide);
		addClass(guys[2],human_animation_hide);

		addClass(fixedBox[0], text_animation_hide);
		addClass(fixedBox[1], text_animation_hide);
		addClass(fixedBox[2], text_animation_hide);
		removeClass(fixedBox[0], text_animation_show);
		removeClass(fixedBox[1], text_animation_show);
		removeClass(fixedBox[2], text_animation_show);
	}

	if(bg_dimension.left < -380){
		// 飽和
		bg_inner.style.left = "-380px";

		
		addClass(guys[0],human_animation_hide);
		addClass(guys[1],human_animation_show);
		addClass(guys[2],human_animation_hide);

		removeClass(guys[0],human_animation_show);
		removeClass(guys[1],human_animation_hide);
		removeClass(guys[2],human_animation_show);
		

		addClass(fixedBox[0], text_animation_hide);
		addClass(fixedBox[1], text_animation_show);
		addClass(fixedBox[2], text_animation_hide);
		removeClass(fixedBox[0], text_animation_show);
		removeClass(fixedBox[1], text_animation_hide);
		removeClass(fixedBox[2], text_animation_show);
	}

	bg_inner.style.top = bg_dimension.top + "px";	
	bg_inner.style.width = bg_dimension.width + "px";		
	
	// showAndHideAnimation(_top);
};
var when_section4_event = function(_top){
	console.log("section 4 "+_top);
	bg_dimension.left = -380 + (1.4*_top);
	bg_dimension.width = 1700;
	bg_dimension.top = -155.0 - (0.2*_top);
	if(bg_dimension.left > -740.0 && bg_dimension.top < -87.0){
		// 不飽和
		bg_inner.style.left = bg_dimension.left + "px";	
		bg_inner.style.top = bg_dimension.top + "px";	
		bg_inner.style.width = bg_dimension.width + "px";	
		
		

		
		addClass(guys[0],human_animation_hide);
		addClass(guys[1],human_animation_hide);
		addClass(guys[2],human_animation_hide);	

		removeClass(guys[0],human_animation_show);
		removeClass(guys[1],human_animation_show);
		removeClass(guys[2],human_animation_show);
			

		addClass(fixedBox[0], text_animation_hide);
		addClass(fixedBox[1], text_animation_hide);
		addClass(fixedBox[2], text_animation_hide);
		removeClass(fixedBox[0], text_animation_show);
		removeClass(fixedBox[1], text_animation_show);
		removeClass(fixedBox[2], text_animation_show);
	}else{
		// 飽和
		bg_inner.style.left 	= "-740px";
		bg_inner.style.top 	  	= "-87px";
		bg_inner.style.width  	= "1700px";

		
		

		removeClass(guys[0],human_animation_show);
		removeClass(guys[1],human_animation_show);
		removeClass(guys[2],human_animation_hide);

		addClass(guys[0],human_animation_hide);
		addClass(guys[1],human_animation_hide);
		addClass(guys[2],human_animation_show);

		addClass(fixedBox[0], text_animation_hide);
		addClass(fixedBox[1], text_animation_hide);
		addClass(fixedBox[2], text_animation_show);
		removeClass(fixedBox[0], text_animation_show);
		removeClass(fixedBox[1], text_animation_show);
		removeClass(fixedBox[2], text_animation_hide);
	}
	

};
var when_section5_event = function(_top){
	bg.style.top = _top+"px";
}
var addClass = function(ele, _class){
	if(ele.className.indexOf(_class) < 0){
		ele.className += " "+_class;
	}
};
var removeClass = function(ele, _class){
	if(ele.className.indexOf(_class) >= 0){
		ele.className = ele.className.replace(' '+_class,'').replace(_class,'');
	}
};
var fadeInOutIntervalId;
var fadeIn = function(ele, period, cb){
	clearInterval(fadeInOutIntervalId);
	var tmp_opacity = ele.style.opacity;
	if(isNaN(tmp_opacity) || typeof tmp_opacity === 'string'){
		tmp_opacity = 0.0;
	}
	fadeInOutIntervalId = setInterval(function(){
		if(tmp_opacity < 1){
			
			ele.style.opacity = tmp_opacity;
			tmp_opacity += 0.1;
		}else{
			clearInterval(fadeInOutIntervalId);
			if(typeof cb === 'function'){
				cb();
			}
		}
	},period/10);
}
var fadeOut = function(ele, period, cb){
	clearInterval(fadeInOutIntervalId);
	var tmp_opacity = ele.style.opacity;
	console.log("fadeOut "+tmp_opacity);
	if(isNaN(tmp_opacity) || typeof tmp_opacity === 'string'){
		tmp_opacity = 1.0;
	}
	fadeInOutIntervalId = setInterval(function(){
		if(tmp_opacity > 0.0){
			tmp_opacity -= 0.1;
			ele.style.opacity = tmp_opacity;
		}else{
			clearInterval(fadeInOutIntervalId);
			if(typeof cb === 'function'){
				cb();
			}
		}
	},period/10);	
}

var fadeOutAndIn = function(ele, period ,cb ){
	clearInterval(fadeInOutIntervalId);
	fadeInOutIntervalId = setInterval(function(){
		if(ele.style.opacity <= 0){
			clearInterval(fadeInOutIntervalId);
			if(typeof cb === 'function'){
				cb("fadeOutFinish");
			}
			// fadeOut
			fadeInOutIntervalId = setInterval(function(){
				if(ele.style.opacity >= 1.0){
					if(typeof cb === 'function'){
						cb("fadeInFinish");
					}
				}else{
					ele.style.opacity += 0.1;
				}	
			},period);
			
		}else{
			// fadeOut
			ele.style.opacity -= 0.1;
		}
	},period);
}
var trigger_when_bottom = 0;


var interval_event = function(){
	// 周期的に発生するイベント
	if(triggle_to_show){
		var section1_bottom = section[0].getBoundingClientRect().bottom;
		if(last_changed_val!=section1_bottom){
			last_changed_val=section1_bottom;

			if(section1_bottom < trigger_when_bottom){
				section2_bottom = section[1].getBoundingClientRect().bottom;
				if(section2_bottom < trigger_when_bottom){
					section3_bottom = section[2].getBoundingClientRect().bottom;
					if(section3_bottom < trigger_when_bottom){
						section4_bottom = section[3].getBoundingClientRect().bottom;
						if(section4_bottom < trigger_when_bottom){
							// section 5
							when_section5_event(section[4].getBoundingClientRect().top);
						}else{
							// section 4
							when_section4_event(section[3].getBoundingClientRect().top);
						}
					}else{
						// section 3
						when_section3_event(section[2].getBoundingClientRect().top);
					}
				}else{
					// section 2
					when_section2_event(section[1].getBoundingClientRect().top);
				}
			}else{
				// section 1
				when_section1_event(section[0].getBoundingClientRect().top);
			}
		}
	}
};

setInterval(interval_event,1000 / 15);

sizingEvent();
var timeout_id;
window.onresize = function(){
    clearTimeout(timeout_id);
    timeout_id = setTimeout(function(){
        sizingEvent();
    }, 700);
}
