<!DOCTYPE HTML>
<html lang="en">
<!--

 +-+-+-+-+-+-+ +-+-+-+-+-+-+
 |F|r|i|e|n|d| |O|n|l|i|n|e|
 +-+-+-+-+-+-+ +-+-+-+-+-+-+
 
--> 
<head>
<title><?php echo $title; ?></title>
<meta charset="utf-8">
        <meta property="og:title" content="<?php echo $title; ?>"/>
        <meta property="og:url" content="http://apps.facebook.com/friend-online" />
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="https://kue.github.io/FriendOnline/users_image.png"/>
        <meta property="og:site_name" content="Friend Online"/>
        <meta property="og:description" content="ดูเเละตรวจสอบเพื่อนที่ online&offline facebook chat®"/>
<link rel="stylesheet" href="<?php echo $path; ?>/../css.css">
<link rel="icon" href="https://googledrive.com/host/0B9YslyGnSwPPQi0zdXJkaUxJYXM">
<script type="text/javascript">
function init() {  
    if (arguments.callee.done) return;
    arguments.callee.done = true;
};
if (document.addEventListener) {
    document.addEventListener("DOMContentLoaded", init, false);
}
/*@cc_on @*/
/*@if (@_win32)
document.write("<script id=\"__ie_onload\" defer=\"defer\" src=\"javascript:void(0)\"><\/script>");
var script = document.getElementById("__ie_onload");
script.onreadystatechange = function() {
    if (this.readyState == "complete") {
    init();
    }
};
/*@end @*/
if (/WebKit/i.test(navigator.userAgent)) {
    var _timer = setInterval(function() {
    if (/loaded|complete/.test(document.readyState)) {
        clearInterval(_timer);
        init();
    }
    }, 10);
}
window.onload = init;

function RClick(e){
	var e;
   if(event.button==2) {
      document.oncontextmenu =function() {
	  return false;
	  }
  }
}
document.oncontextmenu=new Function("return false;");
</script>
</head>
<body>
<center>
<div id="loading" style="background:#fff;width:100%;height:100%;position: fixed;top:0;left: 0;z-index:99999;margin: 0 auto;opacity:0.9">
<span style="font-weight:bold;position: absolute;top:250px; left:338px;"></span>
</div>
</center>
<script>
window.onload = function () {
document.getElementById('loading').style.display = "none";}
</script>