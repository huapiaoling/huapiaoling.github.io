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
		var oA1=document.querySelector('#header .a1');
		var oT=oHead.offsetTop;

		var oF1=document.querySelector('.f1_box');
		var oH=getPos(oF1).top;

		window.onscroll=function(){
			/*var oS=document.documentElement.scrollTop||document.body.scrollTop;*/
			var oS = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
			if(oS>oT){
				oHead.style.position='fixed';
				oHead.className='bg';
				oA1.style.color='#fff';
			}else{
				oHead.style.position='absolute';
				oHead.className='';
				oA1.style.color='';
			}

			if(oS+oC>(oH+180)){
				oF1.style.marginLeft='0';
				oF1.classList.add('animated');
				oF1.classList.add('bounceInLeft');
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
