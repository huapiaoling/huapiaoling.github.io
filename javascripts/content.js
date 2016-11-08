//javascript document
function getPos(obj){
	var l=0;
	var t=0;

	while(obj){
		l+=obj.offsetLeft;
		t+=obj.offsetTop;

		obj=obj.offsetParent;
	}
	return {"left":l,"top":t};
}
addEvent(window,'load',function(){
	var oC=document.documentElement.clientHeight;
	(function(){
		var oHead=document.getElementById('header');
		var oT=oHead.offsetTop;

		var oF1=document.querySelector('.f1_box');
		var oF1h=getPos(oF1).top;
		var oS2=document.querySelector('.s2_box');
		var oS2h=getPos(oS2).top;

		window.onscroll=function(){
			/*var oS=document.documentElement.scrollTop||document.body.scrollTop;*/
			var oS = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
			if(oS>oT){
				oHead.style.position='fixed';
				oHead.className='bg';
			}else{
				oHead.style.position='absolute';
				oHead.className='';
			}

			if(oS+oC>(oF1h+180)){
				oF1.style.marginLeft='0';
				oF1.classList.add('animated');
				oF1.classList.add('bounceInLeft');
			}
			if(oS+oC>(oS2h+180)){
				oS2.style.marginLeft='0';
				oS2.classList.add('animated');
				oS2.classList.add('bounceInRight');
			}
		};
	})();
	window.onresize=function(){
		var oHide=document.getElementById('first_hide');
		oHide.style.width=document.documentElement.clientWidth+'px';
		oHide.style.height=document.documentElement.clientHeight+'px';
	};
});

function addEvent(obj,sEv,fn){
	if(obj.addEventListener){
		obj.addEventListener(sEv,fn,false);
	}else{
		obj.attachEvent('on'+sev,fn);
	}
}
