








function RI(RI){
    console.log("阅读的是:"+RI);
}


















function list(){
    var W = document.body.clientWidth;
    if(W<768){
        document.getElementById('sidebar').style.width = '30%';
        document.getElementById('sidebar').style.animationName = 'PEsidebar';
    }else{
        document.getElementById('sidebar').style.width = '25em';
        document.getElementById('sidebar').style.animationName = 'PCsidebar';
    }
    console.log("sidebar")
    document.getElementById('sidebar-mask').style.width = '100%';
    document.getElementById('sidebar-mask').style.animationName = 'sidebar-mask';
    
}

function mask(){
    
    var W = document.body.clientWidth;
    if(W<768){
        document.getElementById('sidebar').style.animationName = 'PEsidebarClose';
    }else{
        document.getElementById('sidebar').style.animationName = 'PCsidebarClose';
    }
        document.getElementById('sidebar').style.width = '0%';

    document.getElementById('sidebar-mask').style.animationName = 'sidebar-maskC';
    document.getElementById('sidebar-mask').style.width = '0%';
}


function deving(){
    console.log("TEST");
}



function Read(S){
    var httpRequest = new XMLHttpRequest();//第一步：创建需要的对象
    httpRequest.open('POST', '../container/action.php', true); //第二步：打开连接
    httpRequest.setRequestHeader("Content-type","application/json");//设置请求头 注：post方式必须设置请求头（在建立连接后设置请求头）
    httpRequest.send("Read "+S);//发送请求 将情头体写在send中
}



function Live(S){
    var httpRequest = new XMLHttpRequest();//第一步：创建需要的对象
    httpRequest.open('POST', '../container/action.php', true); //第二步：打开连接
    httpRequest.setRequestHeader("Content-type","application/json");//设置请求头 注：post方式必须设置请求头（在建立连接后设置请求头）
    httpRequest.send("Live "+S);//发送请求 将情头体写在send中
}
/*
常用事件：
    鼠标:
     onclick(单击) 
     ondblclick(双击) 
     oncontextmenu(右击)
     onmouseover 
     onmouseout
    光标:
     onfocus  
     onblur
    键盘:
     onkeyup  
     onkeydown     
    body
     加载事件:onload
     卸载事件:onunload
     SELECT:onchange
*/

function SendComments(){
    //var pattern = /[~!@#$%^&*()_+A-Za-z0-9_\-\u4e00-\u9fa5]+/;
    //var str = document.getElementById('Comments-Send-User-Get').value;
    //console.log(pattern.test(str));
    //检测textarea区域
    if(document.getElementById('Comments-Send-Text-Get').value == ''){
        console.log("A")
    }else{
        console.log(document.getElementById('Comments-Send-Text-Get').value);
    }
    //var Name = document.getElementById('Comments-Sendarea-User-Get').value;   
    //var Text = $('#Comments-Send-Text').val();
}
function SendComments_emoji(ID){
    
    
    document.getElementById('Comments-Send-Text-Get').value = document.getElementById('Comments-Send-Text-Get').value + "";


}

























/*
function UserAgent(){
var Agent = navigator.userAgent;
var ResultWindows = Agent.indexOf("Windows");
var ResultAndroid = Agent.indexOf("Android");
var ResultiOS = Agent.indexOf("ISO");
if (ResultWindows!=-1){//PC
    document.write("Winodws");
}if (ResultAndroid!=-1){
    document.write("Android");
}if (ResultiOS!=-1){
    document.write("IOS");
}}
*/