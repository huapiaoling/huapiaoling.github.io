//javascript document

function jsonp(options){
	options=options||{};
	if(!options.url){return;}
	options.data=options.data||{};
	options.cbName=options.cbName||'cb';
	options.timeout=options.timeout||10000;

	var fnName='jsonp_'+Math.random();
	fnName=fnName.replace('.','');
	var timer=null;

	window[fnName]=function(json){
		clearTimeout(timer);
		options.success&&options.success(json);
		document.head.removeChild(oS);
	};
	options.data[options.cbName]=fnName;
	clearTimeout(timer);
	timer=setTimeout(function(){
		options.error&&options.error();
		window[fnName]=null;
	},options.timeout);

	var arr=[];

	for(var name in options.data){
		arr.push(name+'='+options.data[name]);
	}
	var oS=document.createElement('script');
	oS.src=options.url+'?'+arr.join('&');
	document.head.appendChild(oS);
};