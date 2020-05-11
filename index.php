
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en"><head><!-- --------Icon Web--------- -->
<link href="https://c.top4top.io/p_1590uukh50.gif" rel="icon" type="image/icon">
<link href="http://fonts.googleapis.com/css?family=Averia+Sans+Libre" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css"><link href="http://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Pirata+One" rel="stylesheet" type="text/css">
<meta name="Description" content="HACKED by Sadhappy">

<style>body{background-image:url("https://c.top4top.io/p_1590uukh50.gif");no-repeat;fixed;
-moz-background-size: cover;
-webkit-background-size: cover;
-o-background-size: cover;
background-height:100%;
background-position:center center;
background-size:cover;text-align:left;font-family: ', cursive;} hr{border: 1px solid #1C1C1C;}</style>
<style type="text/css">body,td,th { color: #FFFFFF; } body {cursor:url(http://4.bp.blogspot.com/-hAF7tPUnmEE/TwGR3lRH0EI/AAAAAAAAAs8/6pki22hc3NE/s1600/ass.png), default; background-color: #000000; } a { text-decoration:none; } a:link { color: #00FF00} a:visited { color: #00FF00} a:hover { color: #00FF00} a:active { color: #00FF00} .style2 {Helvetica, sans-serif; font-weight: bold; font-size: 15px; } .style3 {Helvetica, sans-serif; font-weight: bold; } .style4 {color: #FFFF00} .style5 {color: #FF0000} .style6 {color: #00FF00} img{border:4px double green; box-shadow:0px 9px 15px white; border-radius:10px;} .thanks{border:4px double green; box-shadow:0px 2px 20px white; border-radius:10px; padding:9px;} .a{text-shadow:0px 1px 10px lime;}</style>
<style type="text/css">body, a, a:link{cursor:url(http://4.bp.blogspot.com/-hAF7tPUnmEE/TwGR3lRH0EI/AAAAAAAAAs8/6pki22hc3NE/s1600/ass.png), default;} a:hover {cursor:url(http://3.bp.blogspot.com/-bRikgqeZx0Q/TwGR4MUEC7I/AAAAAAAAAtA/isJmS0r35Qw/s1600/pointer.png),wait;}</style>

<meta charset="utf-8">

<title>Sadhappy was here</title><style type="text/css">
h1 {color: #333;font-size: 100px;margin: 1px auto;text-align:center;text-transform:uppercase; font-family:Orbitron;}
.neon {color: #FFFFFF;text-shadow: 0 0 5px #1ab4e7, 0 0 10px #1ab4e7, 0 0 30px #18a2d0, 0 0 45px #18a2d0, 0 0 60px #18a2d0;}
.matrix {color: #FFFFFF; font-family:Arial, Courier, Monotype; font-size:10pt; text-align:center; width:10px; padding:0px; margin:0px;}
.jokitz1{
	text-align : center;
	}
.jokitz2{
	text-align : center;
	font-family : Courier;
	}
	<style>
		 body {
         background: black;
		 }
         #embed { 
         text-align:left;
		 opacity:0; 
		 } 
		 img {
		 opacity:1;-webkit-transition:all 250ms ease;-moz-transition:all 250ms ease;-o-transition:all 250ms ease;transition:all 250ms ease;
		 margin-top:-10px;
		 }
		 img:hover{	
		 opacity:0.75
		 }
		 #tolol {
		 font-family: 'Courier';
		 position:absolute;
		 left:0;
		 right:0;
		 top:30%;
		 color:white;
		 }
		 hr {
		 width:350px;
		 }
		 a {
		 text-decoration: none;
		 }
	  </style>
	  	<script type="text/javascript">
(function(){
  var global = this;
  var globalName = 'starField';
  var numberOfStars = 100;

  /* total depth of space ;)*/
  var depthDimentsion = 2000;

  /* % of space between browser and viewer.*/
  var viewingDepth = 0.0001;

  /* % of space moved in one step.*/
  var forwardVelocity = 0.3;
  var d = depthDimentsion*(viewingDepth/100);
  var planeDepth = depthDimentsion - d;
  var fv = planeDepth*(forwardVelocity/100);
  var zMultiplier = (depthDimentsion)/d;
  var starObjs, starHTML;
  var posMod, sy, sx, windowCenterY, windowCenterX;
  var scaleXAdjust, scaleYAdjust;
  if((document.layers)&&(this.Layer)){
    starHTML = [
    '<layer id="stars','',
    '" left="0" top="0" width="1" height="1"',
    ' bgColor="#FFFFFF"></layer>'];
  }else{
    starHTML = [
    '<div id="stars','',
    '" style="position:absolute;width:1px;overflow:',
    'hidden;height:1px;background-color:#FFF;',
    'font-size:1px"></div>'];
  }
  function compatModeTest(obj){
    if((document.compatMode)&&
       (document.compatMode.indexOf('CSS') != -1)&&
       (document.documentElement)){
      return document.documentElement;
    }else if(document.body){
      return document.body;
    }else{
      return obj;
    }
  }
  function getWindowState(){
    var global = this;
    var readScroll = {scrollLeft:NaN,scrollTop:NaN};
    var readSizeC = {clientWidth:NaN,clientHeight:NaN};
    var readSizeI = {innerWidth:NaN,innerHeight:NaN};
    var readScrollX = 'scrollLeft';
    var readScrollY = 'scrollTop';
    function getWidthI(){return readSizeI.innerWidth;}
    function getWidthC(){return readSizeC.clientWidth|0;}
    function getHeightI(){return readSizeI.innerHeight;}
    function getHeightC(){return readSizeC.clientHeight|0;}
    function getHeightSmart(){
        return retSmaller(getHeightI(), getHeightC());
    }
    function getWidthSmart(){
        return retSmaller(getWidthI(), getWidthC());
    }
    function setInnerWH(){
      theOne.getWidth = getWidthI;
      theOne.getHeight = getHeightI;
    }
    function retSmaller(inr, other){
      if(other > inr){
        setInnerWH();
        return inr;
      }else{
        return other;
      }
    }
    var theOne = {
      getScrollX:function(){return readScroll[readScrollX]|0;},
      getScrollY:function(){return readScroll[readScrollY]|0;},
      getWidth:getWidthC,
      getHeight:getHeightC
    };
    function main(){return theOne;}
    function rankObj(testObj){
      var dv,dhN;
      if(testObj&&(typeof testObj.clientWidth == 'number')&&
         (typeof testObj.clientHeight == 'number')){
        if(((dv = global.innerHeight - testObj.clientHeight) >= 0)&&
           ((dh = global.innerWidth - testObj.clientWidth) >= 0)){
          if(dh == dv){
            return 0;
          }else if((dh&&!dv)||(dv&&!dh)){
            return (dh+dv);
          }
        }
      }
      return NaN;
    }
    if((typeof global.innerHeight == 'number')&&
       (typeof global.innerWidth == 'number')){
      readSizeI = global;
      var bodyRank = rankObj(document.body);
      var rankDocEl = rankObj(document.documentElement);
      var selEl = null;
      if(!isNaN(bodyRank)){
        if(!isNaN(rankDocEl)){
          if(bodyRank < rankDocEl){
            selEl = document.body;
          }else if(bodyRank > rankDocEl){
            selEl = document.documentElement;
          }else{
            selEl = compatModeTest(document.body);
          }
        }else{
          selEl = document.body;
        }
      }else if(!isNaN(rankDocEl)){
        selEl = document.documentElement;
      }
      if(selEl){
        readSizeC = selEl
        theOne.getWidth = getWidthSmart;
        theOne.getHeight = getHeightSmart;
      }else{
        setInnerWH();
      }
    }else{
      readSizeC = compatModeTest(readSizeC);
    }
    if((typeof global.pageYOffset == 'number')&&
       (typeof global.pageXOffset == 'number')){
      readScroll = global;
      readScrollY = 'pageYOffset';
      readScrollX = 'pageXOffset';
    }else{
      readScroll = compatModeTest(readScroll);
    }
    return (getWindowState = main)();
  }
  var windowState = getWindowState();
  function readWindow(){
    scaleYAdjust = (((windowCenterY =
            (windowState.getHeight() >>1)) - 16)*
                         zMultiplier);
    scaleXAdjust = (((windowCenterX =
            (windowState.getWidth() >> 1)) - 16)*
                        zMultiplier);
    sy = windowCenterY + windowState.getScrollY();
    sx = windowCenterX + windowState.getScrollX();
  }
  function getStyleObj(id){
    var obj = null;
    if(document.getElementById){
      obj = document.getElementById(id);
    }else if(document.all){
      obj = document.all[id];
    }else if(document.layers){
      obj = document.layers[id];
    }
    return ((typeof obj != 'undefined')&&
        (typeof obj.style != 'undefined'))?
                    obj.style:obj;
  }
  function starObj(id, parent, prv){
    var next,reset;
    var divClip, div = getStyleObj("stars"+id);
    var y,x,z,v,dx,dy,dm,dm2,px,py,widthPos,temp;
    (reset = function(){
      px = Math.random()<0.5 ? +1 : -1;
      py = Math.random()<0.5 ? +1 : -1;
      y = ((Math.random()*Math.random()*
          scaleYAdjust)+windowCenterY);
      x = ((Math.random()*Math.random()*
          scaleXAdjust)+windowCenterX);
      widthPos = (x + zMultiplier);
      z = 0;
    })();
    z = Math.random()*planeDepth*0.8;
    function step(){
      temp = x * (v = d/(depthDimentsion - z));
      dm = ((dm2 = ((widthPos * v)-temp)|0)>>1);
      dy = (y * v);
      dx = (temp);
    }
    if(div){
      if(!posMod){
        posMod = (typeof div.top == 'string')?'px':0;
      }
      divClip =  ((typeof div.clip != 'undefined')&&
               (typeof div.clip != 'string'))?
                       div.clip:div;
      this.position = function(){
        step();
        if(((z += fv) >= planeDepth)||
           ((dy+dm) > windowCenterY)||
          ((dx+dm) > windowCenterX)){
          reset();
          step();
          dm = 0;
        }
        div.top = ((sy+(py*dy)-dm)|0)+posMod;
        div.left = ((sx+(px*dx)-dm)|0)+posMod;
        divClip.width = (divClip.height = dm2+posMod);
        next.position();
      };
    }else{
      this.position = function(){return;};
    }
    if(++id < numberOfStars){
      next = new starObj(id, parent)
    }else{
      next = parent
    }
  }
  function init(){
    if(!getStyleObj("stars"+(numberOfStars-1))){
      setTimeout(starField, 200);
    }else{
      readWindow();
      starObjs = new starObj(0, init);
      init.act();
    }
  };
  init.position = function(){return;}
  init.act = function(){
    readWindow();
    starObjs.position();
    setTimeout(init.act,50);
  };
  init.act.toString = function(){
    return globalName+'.act()';
  };
  init.toString = function(){
    while(global[globalName])globalName += globalName;
    global[globalName] = this;
    return globalName+'()';
  };
  for(var c = numberOfStars;c--;){
    starHTML[1] = c;
    document.write(starHTML.join(''));
  }
  setTimeout(init, 200);
})();
</script>
	
</style>
<script type="text/javascript">

<!--

//Disable right click script

//visit http://www.rainbow.arch.scriptmania.com/scripts/

var message="Sorry, right-click has been disabled";

///////////////////////////////////

function clickIE() {if (document.all) {(message);return false;}}

function clickNS(e) {if

(document.layers||(document.getElementById&&!document.all)) {

if (e.which==2||e.which==3) {(message);return false;}}}

if (document.layers)

{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}

else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")

// -->

</script><!-- <script language="JavaScript1.2" type="text/javascript">

function ClearError() {return true;}

window.onerror = ClearError;

</script> -->






<script type="text/javascript" language="javascript">



<!--

var rows=1; // must be an odd number

var speed=10; // lower is faster

var reveal=2; // between 0 and 2 only. The higher, the faster the word appears

var effectalign="center" //enter "center" to center it.



/***********************************************

* The Matrix Text Effect- by tidak ada yang tau

* This notice must stay intact for use

* Visit http://www.dynamicdrive.com/ for full source code

***********************************************/



var w3c=document.getElementById && !window.opera;;

var ie45=document.all && !window.opera;

var ma_tab, matemp, ma_bod, ma_row, x, y, columns, ma_txt, ma_cho;

var m_coch=new Array();

var m_copo=new Array();

window.onload=function() {

	if (!w3c && !ie45) return

  var matrix=(w3c)?document.getElementById("matrix"):document.all["matrix"];

  ma_txt=(w3c)?matrix.firstChild.nodeValue:matrix.innerHTML;

  ma_txt=" "+ma_txt+" ";

  columns=ma_txt.length;

  if (w3c) {

    while (matrix.childNodes.length) matrix.removeChild(matrix.childNodes[0]);

    ma_tab=document.createElement("table");

    ma_tab.setAttribute("border", 0);

    ma_tab.setAttribute("align", effectalign);

    ma_tab.style.backgroundColor="#000000";

    ma_bod=document.createElement("tbody");

    for (x=0; x<rows; x++) {

      ma_row=document.createElement("tr");

      for (y=0; y<columns; y++) {

        matemp=document.createElement("td");

        matemp.setAttribute("id", "Mx"+x+"y"+y);

        matemp.className="matrix";

        matemp.appendChild(document.createTextNode(String.fromCharCode(160)));

        ma_row.appendChild(matemp);

      }

      ma_bod.appendChild(ma_row);

    }

    ma_tab.appendChild(ma_bod);

    matrix.appendChild(ma_tab);

  } else {

    ma_tab='<ta'+'ble align="'+effectalign+'" border="0" style="background-color:#000000">';

    for (var x=0; x<rows; x++) {

      ma_tab+='<t'+'r>';

      for (var y=0; y<columns; y++) {

        ma_tab+='<t'+'d class="matrix" id="Mx'+x+'y'+y+'"> </'+'td>';

      }

      ma_tab+='</'+'tr>';

    }

    ma_tab+='</'+'table>';

    matrix.innerHTML=ma_tab;

  }

  ma_cho=ma_txt;

  for (x=0; x<columns; x++) {

    ma_cho+=String.fromCharCode(32+Math.floor(Math.random()*94));

    m_copo[x]=0;

  }

  ma_bod=setInterval("mytricks()", speed);

}



function mytricks() {

  x=0;

  for (y=0; y<columns; y++) {

    x=x+(m_copo[y]==100);

    ma_row=m_copo[y]%100;

    if (ma_row && m_copo[y]<100) {

      if (ma_row<rows+1) {

        if (w3c) {

          matemp=document.getElementById("Mx"+(ma_row-1)+"y"+y);

          matemp.firstChild.nodeValue=m_coch[y];

        }

        else {

          matemp=document.all["Mx"+(ma_row-1)+"y"+y];

          matemp.innerHTML=m_coch[y];

        }

        matemp.style.color="#81F2FF";

        matemp.style.fontWeight="bold";

      }

      if (ma_row>1 && ma_row<rows+2) {

        matemp=(w3c)?document.getElementById("Mx"+(ma_row-2)+"y"+y):document.all["Mx"+(ma_row-2)+"y"+y];

        matemp.style.fontWeight="normal";

        matemp.style.color="#00BBFF";

      }

      if (ma_row>2) {

          matemp=(w3c)?document.getElementById("Mx"+(ma_row-3)+"y"+y):document.all["Mx"+(ma_row-3)+"y"+y];

        matemp.style.color="#20FFDA";

      }

      if (ma_row<Math.floor(rows/2)+1) m_copo[y]++;

      else if (ma_row==Math.floor(rows/2)+1 && m_coch[y]==ma_txt.charAt(y)) zoomer(y);

      else if (ma_row<rows+2) m_copo[y]++;

      else if (m_copo[y]<100) m_copo[y]=0;

    }

    else if (Math.random()>0.9 && m_copo[y]<100) {

      m_coch[y]=ma_cho.charAt(Math.floor(Math.random()*ma_cho.length));

      m_copo[y]++;

    }

  }

  if (x==columns) clearInterval(ma_bod);

}



function zoomer(ycol) {

  var mtmp, mtem, ytmp;

  if (m_copo[ycol]==Math.floor(rows/2)+1) {

    for (ytmp=0; ytmp<rows; ytmp++) {

      if (w3c) {

        mtmp=document.getElementById("Mx"+ytmp+"y"+ycol);

        mtmp.firstChild.nodeValue=m_coch[ycol];

      }

      else {

        mtmp=document.all["Mx"+ytmp+"y"+ycol];

        mtmp.innerHTML=m_coch[ycol];

      }

      mtmp.style.color="#5BEEFF";

      mtmp.style.fontWeight="bold";

    }

    if (Math.random()<reveal) {

      mtmp=ma_cho.indexOf(ma_txt.charAt(ycol));

      ma_cho=ma_cho.substring(0, mtmp)+ma_cho.substring(mtmp+1, ma_cho.length);

    }

    if (Math.random()<reveal-1) ma_cho=ma_cho.substring(0, ma_cho.length-1);

    m_copo[ycol]+=199;

    setTimeout("zoomer("+ycol+")", speed);

  }

  else if (m_copo[ycol]>200) {

    if (w3c) {

      mtmp=document.getElementById("Mx"+(m_copo[ycol]-201)+"y"+ycol);

      mtem=document.getElementById("Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol);

    }

    else {

      mtmp=document.all["Mx"+(m_copo[ycol]-201)+"y"+ycol];

      mtem=document.all["Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol];

    }

    mtmp.style.fontWeight="normal";

    mtem.style.fontWeight="normal";

    setTimeout("zoomer("+ycol+")", speed);

  }

  else if (m_copo[ycol]==200) m_copo[ycol]=100+Math.floor(rows/2);

  if (m_copo[ycol]>100 && m_copo[ycol]<200) {

    if (w3c) {

      mtmp=document.getElementById("Mx"+(m_copo[ycol]-101)+"y"+ycol);

      mtmp.firstChild.nodeValue=String.fromCharCode(160);

      mtem=document.getElementById("Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol);

      mtem.firstChild.nodeValue=String.fromCharCode(160);

    }

    else {

      mtmp=document.all["Mx"+(m_copo[ycol]-101)+"y"+ycol];

      mtmp.innerHTML=String.fromCharCode(160);

      mtem=document.all["Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol];

      mtem.innerHTML=String.fromCharCode(160);

    }

    setTimeout("zoomer("+ycol+")", speed);

  }

  

  //start

var h1 = document.getElementsByTagName("h1")[0],

text = h1.innerText || h1.textContent,

split = [], i, lit = 0, timer = null;

for(i = 0; i < text.length; ++i) {

split.push("<span>" + text[i] + "</span>");

}

h1.innerHTML = split.join("");

split = h1.childNodes;



var flicker = function() {

lit += 0.01;

if(lit >= 1) {

clearInterval(timer);

}

for(i = 0; i < split.length; ++i) {

if(Math.random() < lit) {

split[i].className = "neon";

} else {

split[i].className = "";

}

}

}

setInterval(flicker, 100);



}

//strat sec



// end  -->

</script>
<body>
<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="https://dent-fikri.blogspot.co.id/"});
//]]>
</script>



<meta name="keywords" content="HACKED BY Zico.Lyzkov"><meta name="description" content=":*"><style type="text/css"> <!-- body { background-color: #000; } --> </style><style type="text/css">
body,td,th {
	color: #FFFFFF;
}
body {cursor:url("http://www.fbvideo.16mb.com/files/cur.cur"),default;
	background-color: #000000;
}
a { text-decoration:none; }
a:link { color: #00FF00}
a:visited { color: #00FF00}
a:hover { color: #00FF00}
a:active { color: #00FF00}

.style2 {Helvetica, sans-serif; font-weight: bold; font-size: 15px; }
.style3 {Helvetica, sans-serif; font-weight: bold; }
.style4 {color: #FFFF00}
.style5 {color: #FF0000}
.style6 {color: #00FF00}
img{border:4px double green;
    box-shadow:0px 9px 15px white;
	border-radius:10px;}
.thanks{border:4px double green;
    box-shadow:0px 2px 20px white;
	border-radius:10px;
	padding:9px;}
.a{text-shadow:0px 1px 10px lime;}
</style><style>body{text-align;font-family: , cursive;} hr{border: 1px solid #1C1C1C;}</style><style type="text/css">body,td,th { color: #FFFFFF; } body {cursor:url(http://4.bp.blogspot.com/-hAF7tPUnmEE/TwGR3lRH0EI/AAAAAAAAAs8/6pki22hc3NE/s1600/ass.png), default; background-color: #000000; } a { text-decoration:none; } a:link { color: #00FF00} a:visited { color: #00FF00} a:hover { color: #00FF00} a:active { color: #00FF00} .style2 {Helvetica, sans-serif; font-weight: bold; font-size: 15px; } .style3 {Helvetica, sans-serif; font-weight: bold; } .style4 {color: #FFFF00} .style5 {color: #FF0000} .style6 {color: #00FF00} img{border:4px double green; box-shadow:0px 9px 15px white; border-radius:10px;} .thanks{border:4px double green; box-shadow:0px 2px 20px white; border-radius:10px; padding:9px;} .a{text-shadow:0px 1px 10px lime;}</style>
<link rel="SHORTCUT ICON" href="http://www.extremetech.com/wp-content/uploads/2012/02/vendetta-348x196.jpg"></head>

<script type="text/javascript">
if (typeof document.onselectstart!="undefined") {
document.onselectstart=new Function ("return false");
}
else{
document.onmousedown=new Function ("return false");
document.onmouseup=new Function ("return true");
}
</script >
<script type="text/javascript">function play(){ var audio = document.getElementById("audios"); audio.play();} function showImage(){ document.getElementById('loadingImage').style.visibility="visible"; } </script>

<body style="color: rgb(255, 255, 255); background-color: rgb(0, 0, 0);" bgcolor="Black">


<center>
<br>
<h1>Sadhappy Was Here<br/></h1>

<Font color="AQUA">
<div id="matrix" class="auto-style8"> ======================= </div>

<p align="center">
&nbsp;</p> 














<center>
<center>

<hr>

<center>
</div><center>
 <font color="yellow" face="courier" size="1.5">Halo, halo, halo, betapa rendahnya,Saya merasa bodoh dan menular<br>Oh well, terserahlah,ini adalah Suatu penyangkalan<br>Apakah Anda percaya padaku ketika saya memberi tahu Anda,Anda adalah ratu hatiku<br>Tolong jangan menipu saya ketika saya menyakitimu,Sepertinya tidak seperti itu,Bisakah Anda merasakan desakan cintaku?Can you feel my love buzz?<br>Di bawah sinar matahari aku merasa sebagai satu ,Menikah.<br><em>Aku harap aku sepertimu,Mudah terhibur<br>Semua dalam semua adalah kita semua,Aku harus jadi apa lagi?Apa lagi yang bisa saya katakan? Terkubur yeah yeah yeah<br>Do you love me?Really love me?Do you love me?<br>I'm a loser and I need a little love,Saya tidak seperti mereka Tapi aku bisa berpura-pura<br>Matahari sudah pergi Tapi aku punya cahaya<br>Hari telah selesai Tapi aku bersenang-senang<br>Saya pikir saya bodoh,Atau mungkin hanya bersenang-senang<br>
Malaikat sayap kiri, sayap kanan, sayap patah,Dan nongkrong di awan<br>hewan-hewan yang tlah kutangkap,akankah Semua tlah jadi peliharaanku? Tak masalah tuk...<br>Karena mereka tidak punya perasaan<br>Dan mungkin aku yang harus disalahkan atas semua yang telah kudengar,Tapi aku tidak yakin
</script><br>
<font size="8"> >>>>> </font><button class="btn btn-secondary btn-block bg-transparent mt-3" onclick="play();showImage();"><font color="black"><i class='fa fa-refresh fa-spin'></i>Play Music</font> </button><font size="8"> <<<<< </font>   <br/> <audio id="audios" src="https://a.top4top.io/m_1590u8i260.mp3"></audio>
<div id="aside">
<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>
 <marquee behavior="scroll" scrolldelay=7<scrollamount=7><font color="AQUA">   

  </font>
</marquee>
<div id="aside">
<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>
 <marquee direction="right" behavior="scroll" scrolldelay=7 scrollamount=7><font color="AQUA">  

 </font>
</marquee>
<embed src="http://www.iqpic.com/uploads/files/iqpice990d0afaa.swf" width=0 height=0 autostart=true loop=true scale="noborder" repeat=true></embed>
  <p>&nbsp;</p>
</center>
</marquee>
</body>
<marquee behavior="scroll" direction="left" scrollamount="90" scrolldelay="40" width="100%">
<font color="yellow">___________________________________________________________</font></marquee>
<div style="text-shadow: 0px 0px 10px green;"><span style="color:green;"><marquee scrollamount="5" direction="left" width="50%"><span style="color: red;"> <span style="color:yellow; font-size:24px;">I don't care
I don't care
I don't care
I don't care
I don't care
Care if it's old
I don't mind
I don't mind
I don't mind
I don't mind
I don't mind
Mind, don't have a mind
Get away
Get away
Get away
Get away
Away, away from your home
I'm afraid
I'm afraid
I'm afraid
I'm afraid
I'm afraid
Afraid, afraid of a ghost
Even if you have
Even if you need
I don't mean to stare
We don't have to breed
We could plant a house
We could build a tree
I don't even care
We could have all three
She said
She said
She said
She said
She said
She said
She said
I don't care
I don't care
I don't care
I don't care
I don't care
Care if it's old
I don't mind
I don't mind
I don't mind
I don't mind
I don't mind
Mind, I don't have a mind
Get away
Get away
Get away
Get away
Away, away from your home
I'm afraid
I'm afraid
I'm afraid
I'm afraid
I'm afraid
Afraid, afraid of a ghost
Even if you have
Even if you need
I don't mean to stare
We don't have to breed
We can plant a house
We can build a tree
I don't even care
We could have all three
She said
She said
She said
She said
She said
She said
She said
She said
Even if you have
Even if you need
I don't mean to stare
We don't have to breed
We can plant a house
We can build a tree
I don't even care
We could have all three
She said
She said
She said
She said
She said
She said
She said
She said, good!<span style="color: red;"></b></marquee></font><div><script type="text/rocketscript">/*<![CDATA[*/new TypingText(document.getElementById("message"), 90, function(i){ var ar= new Array("_", " ", "_", " "); return "" +ar[i.length % ar.length]; });//Type out examples:TypingText.runAll();/*]]>*/</script>
<marquee behavior="scroll" direction="right" scrollamount="90" scrolldelay="40" width="100%">
<font color="yellow">___________________________________________________________</font></marquee>
<font color=white>
<br>
</html>
</script>

<html>
</script>