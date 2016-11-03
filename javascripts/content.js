//javascript document
addEvent(window,'load',function(){
	(function(){
		var oHead=document.getElementById('header');
		var oA1=document.querySelector('#header .a1');
		var oT=oHead.offsetTop;

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
