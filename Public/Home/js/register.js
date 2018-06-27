//获取html 中ID元素
function byId(id) {
    return document.getElementById(id);
}
var xq=byId('xq');
var bj=byId('bj');
var mmqd=byId('mmqd');
var ti=byId('ti');
var suc=byId('suc');
var inps=xq.getElementsByTagName('input');
var spans=xq.getElementsByTagName('span');
var is=mmqd.getElementsByTagName('i');
var cont=document.getElementsByClassName('cont')[0];
var cont1=document.getElementsByClassName('cont1')[0];
var st=suc.getElementsByTagName('span')[0];
//实现表单的验证

/*
 *1. 用户名称的表单验证
 * 
 */
var arr=[];
var str;
var obj={};
var uname,uname1;
function yhnc(){
	fn1(0);
	bj.innerHTML='请输入用户昵称';
}
function yhnc1(){
	uname=inps[0].value;
	var reg=/^([A-z]|_)\w{5,11}$/; //英文或下划线开头，内容可以是英文、数字、下划线，6-12位之间
	if(reg.test(uname)){
		bj.innerHTML='用户名验证通过';
		bj.style.color='green';
		fn2(0,0,0);
	}else if(uname.length<6){
		bj.innerHTML='用户名至少6位';
		bj.style.color='red';
		fn3(0,0,0);
	}else{
		bj.innerHTML='用户名是字母数字下划线';
		bj.style.color='red';
		fn3(0,0,0);
	}
	
}
inps[0].onfocus=yhnc;
inps[0].onblur=yhnc1;
/*
 *2. 登录密码的表单验证
 *
 */
var pass;
function yhmm(){
	fn1(1);
	bj.innerHTML='请输入密码';
}
function yhmm1(){
	pass=inps[1].value;
	var reg=/(\d[A-z]|[A-z]\d)/; //登陆密码，内容必须同时含有数字和英文
	if(reg.test(pass)){
		bj.innerHTML='密码验证通过';
		bj.style.color='green';
		fn2(1,1,1);
	}else if(pass.length<6){
		bj.innerHTML='密码6-12位之间';
		bj.style.color='red';
		fn3(1,1,1);
	}else{
		bj.innerHTML='必须同时包含字母和数字';
		bj.style.color='red';
		fn3(1,1,1);
	}
}

/*
 *3. 重复密码的验证
 *
 */
function cfmm(){
	fn1(2);
	bj.innerHTML='请输入密码';
}
function cfmm1(){
	var str1=inps[1].value;
	var str2=inps[2].value;
	if(str2!=''){
		if(str1 == str2){
			bj.innerHTML='两次密码一致';
			bj.style.color='green';
			fn2(2,2,2);
		}else{
			bj.innerHTML='两次密码不一致';
			bj.style.color='red';
			fn3(2,2,2);
		}
	}else{
		bj.innerHTML='密码不能为空';
		bj.style.color='red';
		fn3(2,3,2);
	}
}
inps[2].onfocus=cfmm;
inps[2].onblur=cfmm1;
/*
 *4. 电子邮件的正则表单验证
 *
 */
function dzyj(){
	fn1(3);
	bj.innerHTML='请输入QQ邮箱';
}
function dzyj1(){
	str=inps[3].value;
	var reg=/^[a-zA-Z0-9]+@([a-zA-Z0-9]+\.)+(com|cn|net)$/; //匹配电子邮件的正则
	if(reg.test(str)){
		bj.innerHTML='邮箱验证通过';
		bj.style.color='green';
		fn2(3,3,3);
	}else{
		bj.innerHTML='邮箱格式不正确';
		bj.style.color='red';
		fn3(3,3,3);
	}
}
inps[3].onfocus=dzyj;
inps[3].onblur=dzyj1;
/*
 *5. 手机号码的表单验证
 *
 */
function sjhm(){
	fn1(4);
	bj.innerHTML='请输入手机号码';
}
function sjhm1(){
	str=inps[4].value;
	var reg=/^1[35](\d){9}$/; //匹配手机号码的正则
	if(reg.test(str)){
		bj.innerHTML='手机号验证通过';
		bj.style.color='green';
		fn2(4,4,4);
	}else{
		bj.innerHTML='手机号格式不正确';
		bj.style.color='red';
		fn3(4,4,4);
	}
}
inps[4].onfocus=sjhm;
inps[4].onblur=sjhm1;

//提交验证
function tjyz(){
	//点击的时候全部失去焦点判断
yhnc1();yhmm1();cfmm1();dzyj1();sjhm1();
	var l=arr.length;
	if(l!=5){
		bj.style.border='1px solid red';
		bj.innerHTML='有未输入项';
		bj.style.color='red';
	}else{
			var a=arr.indexOf(0);
			if(a!=-1){

				bj.innerText='验证不通过';
				bj.style.color='red';
			}else{

				bj.innerText='格式正确';
				bj.style.color='blue';
				obj.user=inps[0].value;
				obj.pass=inps[2].value;
				setCookie('obj',obj);
				suc.style.display='block';
				suc.style.left=(cont.offsetWidth-suc.offsetWidth)/2+'px';
				suc.style.top=(cont.offsetHeight-suc.offsetHeight)/2+'px';
				cont1.style.display='none';
				var time=parseInt(st.innerHTML);
				var timer=setInterval(function(){
					time--;
					st.innerHTML=time;
					if(time==0){
						clearInterval(timer);
						window.location.href = "login.html";
					}
				},1000)

		}		
	}
}
ti.onclick=tjyz;

//获取焦点函数
function fn1(a){
	bj.style.color='red';
	inps[a].style.background='';
	spans[a].innerHTML='';
}
//失去焦点函数if
function fn2(a,b,c){
	inps[a].style.backgroundColor='#00AAEE';
	spans[b].innerHTML='√'.fontcolor('green');
	arr[c]=1;
}
//失去焦点函数else
function fn3(a,b,c){
	inps[a].style.background='red';
	spans[b].innerHTML='x'.fontcolor('red');
	arr[c]=0;
}
