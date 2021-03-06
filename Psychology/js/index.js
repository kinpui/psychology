// JavaScript Document
//首页js文件
/*=++++++++++++++++++++++++++++++++++++=*/
/*心理专题字样*/
function font(){
	var colorArray = ["rgb(254,67,101)","rgb(252,157,154)","rgb(249,150,173)","rgb(200,200,169)"];
	var fontArray = ["心","理","问","答"];
	var element = document.getElementsByClassName("xlztText");
	for(var i = 0,l=element.length;i<l;i++){
				element[i].style.background = colorArray[i];
				element[i].getElementsByTagName("font")[0].innerHTML = fontArray[i];
	}
}
function animate(o,start,alter,dur,fx) {
/*
 * 功能说明：
 * 设置动画
 * o:要设置动画的对象
 * start:开始的对象
 * alter:总的对象
 * dur:动画持续多长时间
 * fx:动画类型
 */

 var curTime=0;
 var t=setInterval(function () {
  if (curTime>=dur) clearInterval(t);
  for (var i in start) {
   o.style[i]=fx(start[i],alter[i],curTime,dur)+"px";
  }
  curTime+=40;
 },40);
 return function () {
  clearInterval(t);
 };
}
var Tween = {
/*
 * 功能说明：
 * 加速运动
 * curTime:当前时间,即动画已经进行了多长时间,开始时间为0
 * start:开始值
 * alter:总的变化量
 * dur:动画持续多长时间
 */
 Linear:function (start,alter,curTime,dur) {return start+curTime/dur*alter;},//最简单的线性变化,即匀速运动
 Quad:{//二次方缓动
  easeIn:function (start,alter,curTime,dur) {
   return start+Math.pow(curTime/dur,2)*alter;
  },
  easeOut:function (start,alter,curTime,dur) {
   var progress =curTime/dur;
   return start-(Math.pow(progress,2)-2*progress)*alter;
  },
  easeInOut:function (start,alter,curTime,dur) {
   var progress =curTime/dur*2;
   return (progress<1?Math.pow(progress,2):-((--progress)*(progress-2) - 1))*alter/2+start;
  }
 },
};
function Player(btns, scrollContent, imgHeight, timeout, hoverClass) {
/*
 * btns:按钮，类型是数组
 * scrollContent:摇滚动的块，一个DOM对象，这里是ol
 * imgHeight:每一张图片的高度，当然，如果想改成左右滚动，这里传入每一张图片的宽，唯一需要注意的是每一张图片宽高必须相同，图片数量可调整
 * timeout:切换速度快慢，默认为1.5ms
 * hoverClass:每一个按钮激活时的类名
*/
//alert(cssName);
 hoverClass = hoverClass || 'active';	//默认聚焦样式为active
 timeout = timeout || 1500;
 this.btns = btns;		//传值
 this.scrollContent = scrollContent;
 this.hoverClass = hoverClass;
 this.timeout = timeout;	
 this.imgHeight = imgHeight;
 var _this = this;
 for(var i=0; i<btns.length; i++) {
  this.btns[i].index = i;
  btns[i].onmouseover = function() {
   _this.stop();
   _this.invoke(this.index);
  }
  btns[i].onmouseout = function() {
   _this.start();
  }
 }
 this.invoke(0);
}
//原型方法
Player.prototype = {
 constructor : Player,
 //开始动画
 start : function() {
  var _this = this;
  this.stop();	//开始前调用停止
  this.intervalId = setInterval(function() {
   _this.next();
  }, this.timeout);	//运行周期调用timeout
 },
 //停止动画
 stop: function() {	
  clearInterval(this.intervalId);
 },
 //调用到鼠标移动的元素
 invoke: function(n) {		//传入指针
  this.pointer = n;	
  if(this.pointer >= this.btns.length) {	//指针不能大于所有按钮总数
   this.pointer = 0;
  }
  this.clearHover();	//将按钮清除
  this.btns[this.pointer].className = this.hoverClass;
  //alert( this.btns[this.pointer].className);
  //this.scrollContent.style.top = parseInt(-this.imgHeight * this.pointer) + 'px';
  var startVal = parseInt(this.scrollContent.style.top) || 0;
  var alterVal = (parseInt(-startVal - this.imgHeight * this.pointer));
  this.animateIterval && this.animateIterval();//修正快速切换时闪动
  this.animateIterval=animate(this.scrollContent, {top : startVal},{top : alterVal}, 1500, Tween.Quad.easeOut);
  	/*向animate传参{
			this.scrollContent::运动的元素
		}
	*/	
  //这里默认设置每张图滚动的总时间是1.5s
 },
 //下一张图片。指针加1
 next: function() {
  this.invoke(this.pointer + 1);	//在原来的指针数上加1
 },
 //清楚鼠标移动样式
 clearHover: function() {
  for(var i=0; i<this.btns.length; i++) {
   this.btns[i].className = '';
  };
 }
}
var imgRunColor = [
	"#C69",
	"#F99",
	"#C9C",
	"#C6C",
	"#F6C"
];
function changeColor(){
	var elements = document.getElementsByClassName("picBoxRt")[0].getElementsByTagName("p");
	for(var i = 0,emLength = elements.length;i<emLength;i++){
			elements[i].style.background = imgRunColor[i];
	}
}


/*
 *运行图片中文字的样式
 * */
function runText(e){
	e.style.display = "block";
	e.style.marginLeft += 20;
}

function runTextDisplay(){
	alert('sss')
}
