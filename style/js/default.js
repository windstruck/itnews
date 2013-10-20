/* -----------------------------------------------
FileName:default.js
UpdatedBy:2007/11/29
----------------------------------------------- */

/**********************************************************
* styleswitch
*/

function setActiveStyleSheet(title) {
	var i, a, main;
	for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
		if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
			a.disabled = true;
			if(a.getAttribute("title") == title) a.disabled = false;
		}
	}
}

function getActiveStyleSheet() {
	var i, a;
	for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
		if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
	}
	return null;
}

function getPreferredStyleSheet() {
	var i, a;
	for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
		if(a.getAttribute("rel").indexOf("style") != -1
			 && a.getAttribute("rel").indexOf("alt") == -1
			 && a.getAttribute("title")
			 ) return a.getAttribute("title");
	}
	return null;
}

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

window.onload = function(e) {
	var cookie = readCookie("style");
	var title = cookie ? cookie : getPreferredStyleSheet();
	setActiveStyleSheet(title);
}

window.onunload = function(e) {
	var title = getActiveStyleSheet();
	createCookie("style", title, 365);
}

var cookie = readCookie("style");
var title = cookie ? cookie : getPreferredStyleSheet();
setActiveStyleSheet(title);



/**********************************************************
* rollover
*/

function UaRollover(){
}
UaRollover.prototype = {
	initialize:function(clses){
		var len = clses.length;
		this.storedImg = new Array();
		var elems = new Array();
	
		for(var k=0; k<len; k++){
			elems = elems.concat(this.getElementsByClassName("img", clses[k]));
			elems = elems.concat(this.getElementsByClassName("input", clses[k]));
		}

		len = elems.length;
		for(var i=0; i<len; i++){

			var elem = elems[i];
			var imgSrc = elem.src;

			if(imgSrc.indexOf("_cur.")>-1){
				continue;
			}
			var ovrStr = this.imgOvrReplace(imgSrc, true)
			this.storedImg[imgSrc] = new Image();
			this.storedImg[imgSrc].src = ovrStr;

			elem.ins = this;
			elem.onmouseover = this.mouseOverEvent;
			elem.onmouseout = this.mouseOutEvent;

		}
	},
	getElementsByClassName:function(pTagName, pClassName){
		var res = new Array();
		var tags = document.getElementsByTagName(pTagName);
		var len = tags.length;
		for(var i=0; i<len; i++){
			var classes = tags[i].className;
			if(classes.indexOf(pClassName)>-1){
				res[res.length] = tags[i];
			}
		}
		return res;
	},
	mouseOverEvent:function (){
		this.src = this.ins.imgOvrReplace(this.src, true);
	},
	mouseOutEvent:function(){
		this.src = this.ins.imgOvrReplace(this.src, false);
	},
	imgOvrReplace:function(pSrc, pIsOvr){
		var srcStr = pSrc;
		if(pIsOvr){
			if(srcStr.indexOf("_ovr")>-1){
				return srcStr;
			}
			srcStr = this.strReplace(srcStr, ".gif", "_ovr.gif");
			srcStr = this.strReplace(srcStr, ".jpg", "_ovr.jpg");
			srcStr = this.strReplace(srcStr, ".png", "_ovr.png");
		}else{
			srcStr = this.strReplace(srcStr, "_ovr.gif", ".gif");
			srcStr = this.strReplace(srcStr, "_ovr.jpg", ".jpg");
			srcStr = this.strReplace(srcStr, "_ovr.png", ".png");
		}
		return srcStr;
	},
	strReplace:function (pStr, pKey, pAlt){
		return pStr.split(pKey).join(pAlt);
	}
}



/**********************************************************
* 
*/
var uaRollover = new UaRollover();


function uaRO(){
	uaRollover.initialize(arguments);
}



/**********************************************************
* pagetop
*/

var __scroll = {sp:6, fps:16, timer:0};
function setScrollSp(sp) {
	if(typeof sp == "number") {
		this.__scroll.sp = sp;
	}
}
function setScrollFps(fps) {
	if(typeof fps == "number") {
		this.__scroll.fps = fps;
	}
}
function scrollToTop() {
	pageScroll(0, 0);
}
function getScrollLeft() {
	if(navigator.userAgent.indexOf("MSIE") != -1) {
		return (document.compatMode=="CSS1Compat")?document.documentElement.scrollLeft:document.body.scrollLeft;
	} else {
 	 return (window.pageXOffset) ? window.pageXOffset : 0;
 }
}
function getScrollTop() {
	if(navigator.userAgent.indexOf("MSIE") != -1) {
		return (document.compatMode=="CSS1Compat")?document.documentElement.scrollTop:document.body.scrollTop;
	} else {
 	 return (window.pageYOffset) ? window.pageYOffset : 0;
 }
}
function pageScroll(toX, toY, cuX, cuY) {
	clearTimeout(this.__scroll.timer);
	toX = (!toX || toX < 0) ? 0 : toX;
	toY = (!toY || toY < 0) ? 0 : toY;
	cuX = (!cuX) ? 0 + getScrollLeft() : cuX;
	cuY = (!cuY) ? 0 + getScrollTop() : cuY;
	cuX += (toX - getScrollLeft()) / this.__scroll.sp; 
	cuY += (toY - getScrollTop()) / this.__scroll.sp; 
	if(cuX < 0) { cuX = 0; }
	if(cuY < 0) {	cuY = 0;	}
	window.scrollTo(Math.floor(cuX), Math.floor(cuY));
	if(Math.floor(cuX) != toX || Math.floor(cuY) != toY) {
		this.__scroll.timer = setTimeout("pageScroll("+toX+","+toY+"," +cuX+","+cuY+")",this.__scroll.sp);
	}
}



/**********************************************************
* SCROLL_PAGE_LINK
*/

ScrollClass.prototype.speed = 12;
ScrollClass.prototype.timer = 0;
ScrollClass.prototype.direction = new Object();
ScrollClass.prototype.offset = new Object();

ScrollClass.prototype.isCompatMode = document.compatMode == "CSS1Compat";
ScrollClass.prototype.major = parseInt(navigator.appVersion);
ScrollClass.prototype.minor = parseFloat(navigator.appVersion);
ScrollClass.prototype.isIE = navigator.userAgent.indexOf("MSIE") != -1;
ScrollClass.prototype.isOpera = window.opera;
ScrollClass.prototype.isMozilla = navigator.userAgent.indexOf("Gecko") != -1;
ScrollClass.prototype.isSafari = navigator.userAgent.indexOf('Safari') != -1;
ScrollClass.prototype.isNN	= navigator.userAgent.indexOf("Netscape") != -1;
ScrollClass.prototype.isMac = navigator.userAgent.indexOf("Mac") != -1;

var scroll = new ScrollClass();
function ScrollClass() {}
ScrollClass.prototype.setScrollSpeed = function(num) {
	if(typeof num == "number") {
		this.speed = num;
	}
}
ScrollClass.prototype.getScrollSpeed = function() {
	return this.speed;
}
ScrollClass.prototype.getMaxScroll = function() {
	var pos = new Object();
	if(this.isNN) {
		pos.x = this.major <= 5 ? document.documentElement.offsetWidth - window.innerWidth + 16 : document.documentElement.offsetWidth - window.innerWidth + 17;
		pos.y = this.major <= 5 ? document.documentElement.offsetHeight - window.innerHeight + 16 : document.documentElement.offsetHeight - window.innerHeight + 17;
	} else {
		if(this.isMac) {
			if(this.isIE) {
				pos.x = document.body.offsetWidth- document.body.clientWidth + 1;
				pos.y = document.body.offsetHeight - document.body.clientHeight + 1;
			} else {
				pos.x = document.documentElement.offsetWidth - window.innerWidth;
				pos.y = document.documentElement.offsetHeight - window.innerHeight;
			}
		} else {
			pos.x = this.isCompatMode ? document.documentElement.scrollWidth - document.documentElement.clientWidth : document.body.scrollWidth - document.body.clientWidth;
			pos.y = this.isCompatMode ? document.documentElement.scrollHeight - document.documentElement.clientHeight : document.body.scrollHeight - document.body.clientHeight;
		}
	}
	if(pos.x < 0) { pos.x = 0; }
	if(pos.y < 0) { pos.y = 0; }
	return {x:pos.x, y:pos.y };
}
ScrollClass.prototype.getScrollLeft = function() {
	if(this.isIE) {
		return this.isCompatMode ? document.documentElement.scrollLeft : document.body.scrollLeft;
	} else {
		return window.pageXOffset ? window.pageXOffset : 0;
	}
}
ScrollClass.prototype.getScrollTop = function() {
	if(this.isIE) {
		return this.isCompatMode ? document.documentElement.scrollTop : document.body.scrollTop;
	} else {
		return window.pageYOffset ? window.pageYOffset : 0;
	}
}
ScrollClass.prototype.scrollTo = function() {
	clearTimeout(this.timer);
	this.offset.x = null;
	this.offset.y = null;
	var toX = this.parse("x", this.findAnchor(arguments[0]) ? this.getAnchorPos(arguments[0]).x : arguments[0]);
	var toY = this.parse("y", this.findAnchor(arguments[1]) ? this.getAnchorPos(arguments[1]).y : arguments[1]);

	this.direction.is_x = toX - this.getScrollLeft() >= 0 ? true : false;
	this.direction.is_y = toY - this.getScrollTop() >= 0 ? true : false;
	if(this.isOpera) {
		window.scrollTo(toX, toY);
	} else {
		if(this.isMozilla) {
			//toY = toY - 16 > 0 ? toY - 16 : toY;
		}
		this.pageScroll(toX, toY);
	}
}
ScrollClass.prototype.findAnchor = function(id) {
	return (document.getElementsByName(id)[0] || document.anchors[id]);
}
ScrollClass.prototype.getAnchorPos = function(id) {
	if(document.getElementsByName(id)[0]) {
		var element = document.getElementsByName(id)[0];
		var obj = new Object();
		do {
			obj.x = (!obj.x) ? element.offsetLeft : obj.x + element.offsetLeft;
			obj.y = (!obj.y) ? element.offsetTop : obj.y + element.offsetTop;
		} while((element = element.offsetParent) != null);
		return {x:obj.x < 0 ? 0 : obj.x, y:obj.y };
	} else if(document.layers) {
		var element = document.anchors[id];
		return {x:element.x, y:element.y };
	} else {
		return {x:0, y:0};
	}
}
ScrollClass.prototype.parse = function(direction, value) {
	var maxScroll = this.getMaxScroll();
	var range = {min_x:0, max_x:maxScroll.x, min_y:0, max_y:maxScroll.y };
	switch(direction) {
		case "x":
			if(typeof value == "boolean") {
				return value ? 0 : this.getScrollLeft();
			} else if(typeof value == "number") {
				if(!this.isOpera) {
					if(value < 0) {
						return 0;
					} else if(value > range.max_x) {
						return range.max_x;
					}
				}
				return value;
			} else if(typeof value == "string") {
				switch(value) {
					case "left": return 0;
					case "center": return Math.floor(range.max_x / 2);
					case "right": return range.max_x;
					default: this.getScrollLeft();
				}
			}
			return this.getScrollLeft();
			break;
		case "y":
			if(typeof value == "boolean") {
				return value ? 0 : this.getScrollTop();
			} else if(typeof value == "number") {
				if(value < 0) {
					return 0;
				} else if(value > range.max_y) {
					return range.max_y;
				}
				return value;
			} else if(typeof value == "string") {
				switch(value) {
					case "top": return 0;
					case "middle": return Math.floor(range.max_y / 2);
					case "bottom": return range.max_y;
					default: this.getScrollTop();
				}
			}
			return this.getScrollTop();
			break;
	}
}
ScrollClass.prototype.pageScroll = function(toX, toY) {
	clearTimeout(this.timer);
	var dX = this.direction.is_x;
	var dY = this.direction.is_y;
	var scX = this.getScrollLeft();
	var scY = this.getScrollTop();
	var cuX = dX ? Math.ceil((toX - scX) / this.speed) : Math.floor((toX - scX) / this.speed);
	var cuY = dY ? Math.ceil((toY - scY) / this.speed) : Math.floor((toY - scY) / this.speed);
	if(((dX && scX + cuX < toX -1) || (!dX && scX + cuX > toX + 1)) || ((dY && scY + cuY < toY - 1) || (!dY && scY + cuY > toY +1))) {
		if(this.offset.x != null && this.offset.y != null) {
			if(this.offset.x == scX && this.offset.y == scY) {
				return;
			} else if((dX && this.offset.x > scX) || (!dX && this.offset.x < scX)) {
				return;
			} else if((dY && this.offset.y > scY) || (!dY && this.offset.y < scY)) {
				return;
			}
		}
		window.scrollTo(scX + cuX, scY + cuY);
		this.timer = setTimeout("ScrollClass.prototype.pageScroll("+toX+","+toY+")",this.speed);
		this.offset.x = scX;
		this.offset.y = scY;
	} else {
		clearTimeout(this.timer);
		window.scrollTo(toX, toY);
		return false;
	}
}



// PARENT WINDOW +++++++++++++++++++++++++++++++++++++//
winNameAr=new Array();
function pwinChange(val){
	if((navigator.userAgent.indexOf("Mac") > -1)){
		if(winNameAr.length <= 0 && window.opener){
			if(window.opener.top.frames.length > 0){ winNameAr=new Array(window.opener.top); window.opener.top.location.href = val; window.opener.focus();}
			else{window.opener.location.href = val; window.opener.focus();}
		}else{
			uaName = navigator.appName.toUpperCase();
			if(uaName.indexOf("NETSCAPE") > -1){
				var winname=winNameAr[0];
				if(winNameAr.length > 0 && winname && !winname.closed){winname.location.href = val; winname.focus();}
				else{w=window.open(val,"main");w.focus(); winNameAr=new Array(w);}
			}else{
				if(typeof winNameAr[0] == 'object' && typeof winNameAr[0].document == 'object'){
					var winname=winNameAr[0];
					if(winNameAr.length > 0 && winname.window){ winname.location.href = val; winname.focus();}
					else{w=window.open(val,"main");w.focus(); winNameAr=new Array(w);}
				}else{w=window.open(val,"main");w.focus(); winNameAr=new Array(w);}
			}
		}
	}else{
		if(winNameAr.length <= 0 && window.opener && !window.opener.closed){
			if(window.opener.top.frames.length > 0){ winNameAr=new Array(window.opener.top); window.opener.top.location.href = val; window.opener.focus();}
			else{parent.opener.location.href = val; parent.opener.focus();}
		}else{
			var winname=winNameAr[0];
			if(winNameAr.length > 0 && winname && !winname.closed){winname.location.href = val; winname.focus();}
			else{w=window.open(val,"main");w.focus(); winNameAr=new Array(w);}
		}
	}
}



// SUBWINDOW(TerminologiesSubWin) +++++++++++++++++++++++++++++++++++++++++++++//
function PrintWindow(html) {
SubWindow=window.open(html,"print01","width=653,height=920,scrollbars=yes,menubar=no,toolbar=no,resize=yes");
	SubWindow.focus();
} 

function SlideShowWindow(html) {
SubWindow=window.open(html,"map01","width=660,height=680,scrollbars=yes,menubar=no,toolbar=no,resize=yes");
	SubWindow.focus();
} 

function DictionaryWindow(html) {
SubWindow=window.open(html,"word01","width=640,height=550,scrollbars=yes,menubar=no,toolbar=no,resize=yes");
	SubWindow.focus();
} 

// ページ遷移設定開始
// フレームの場合は、表示先のフレーム名を設定してください。
// top を指定すると、フレームの分割を廃止して画面全体で表示します。
// blank を指定すると、新規ウィンドウで表示します。
function PageJump(url, target){
	if(url != "" ){
		if(target == 'top'){
			top.location.href = url;
		}
		else if(target == 'blank' || target == '_blank'){
			window.open(url, 'window_name');
		}
		else if(target != ""){
			eval('parent.' + target + '.location.href = url');
		}
		else{
			location.href = url;
		}
	}
}



// DISPLAY on off +++++++++++++++++++++++++++++++++++++++++++++//
this.ADD_BLOGSET_AREA_ID = "calculation-area";

function setCalculationArea(){
	if(document.getElementById(this.ADD_BLOGSET_AREA_ID).style.display == "block"){
		document.getElementById(this.ADD_BLOGSET_AREA_ID).style.display = "none";
		document.getElementById("price-btn-on").style.display = "none";
		document.getElementById("price-btn-off").style.display = "inline";
	}else{
		document.getElementById(this.ADD_BLOGSET_AREA_ID).style.display = "block";
		document.getElementById("price-btn-on").style.display = "inline";
		document.getElementById("price-btn-off").style.display = "none";
	}
}


// js include +++++++++++++++++++++++++++++++++++++++++++++//
this.JS_DIRECTRY = "/common/scripts/"; //javascript files path
function uaImport(){
	var len = arguments.length;
	for(var i=0; i<len; i++){
		document.writeln('<script language="JavaScript" type="text/javascript" src="'+this.JS_DIRECTRY+arguments[i]+'.js"></script>');
	}
}

// +++++++++++++++++++++++++++++++++++++++++++++//
String.prototype.strReplace = function(key, alt){
	return this.split(key).join(alt);
}
String.prototype.stripHTML = function(){
	return this.strReplace(/<\/?[^>]+>/gi, '');
}
