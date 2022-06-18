


function list(){
    console.log("a")
    document.getElementById("list").style.backgroundColor = "black";
}

/*function live(){
    console.log("live");
    var live = document.getElementById("live");
    live.className = "fa fa-thumbs-up";
    
}*/

function deving(){
    console.log("TEST");
}






























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