setInterval("Clock()",1000);
var t = new Date().getTime();
t= parseInt((t-1656578606053)/1000);
var seconds = t;
function Clock(){ 
    if(seconds/60===1){
        console.log(seconds);
    }minutes= parseInt(seconds/60);
    if(parseInt(minutes/60)===1){
        minutes = seconds%60;
    }hours= parseInt(minutes/60);
    if(parseInt(hours/24)===1){
        day = hours%24;
    }day= parseInt(hours/24);
    document.getElementById("Clock").innerHTML='已在服务器上运行'+day+'天'+hours%24+'小时'+minutes%60+'分'+seconds%60+'秒';
    seconds++;
}