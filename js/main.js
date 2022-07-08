








function RI(RI){
    document.cookie="ReadItem="+RI;
    console.log("阅读的是:"+RI);
    const json = fetch("../container/1.json")
    //.then(response => {
    //   return response.json();
    //})
    //.then(jsondata => console.log(jsondata));
    const json_data = JSON.parse(json);
    console.log(json_data);
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
    document.getElementById('sidebar-mask').style.display = 'unset';
    document.getElementById('sidebar-mask').style.animationName = 'sidebar-mask';
    var right = document.getElementById("sidebar").getBoundingClientRect().right;
    console.log(right);
    //document.getElementById('sidebar').style.display = 'unset';
    
}

function mask(){
    if(W<768){
        document.getElementById('sidebar').style.width = '30%';
        document.getElementById('sidebar').style.animationName = 'PEsidebar';
    }else{
        document.getElementById('sidebar').style.width = '25em';
        document.getElementById('sidebar').style.animationName = 'PCsidebar';
    }
    document.getElementById('sidebar').style.animationName = 'sidebarClose';
    document.getElementById('sidebar').style.width = '0%';
    document.getElementById('sidebar-mask').style.display = 'none';
}


function deving(){
    console.log("TEST");
}

function A(){
    console.log("AAA");
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