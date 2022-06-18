setInterval("Clock()",1000);
var t = new Date().getTime();
t= parseInt((t-1654945734530)/1000);
var seconds = t;
var minutes = seconds/60;
var hours = minutes/60;
var day = hours/24;
function Clock(){
    if(seconds>59){
        minutes = minutes+seconds/60;
        seconds = seconds%60;
    }seconds++;
    if(minutes>60){
        hours = hours+minutes/60;
        minutes = minutes%60;
    }if(hours>24){
        day = day+hours/24;
        hours = hours%24;
    }
    document.getElementById("Clock").innerHTML=+parseInt(day)+'天'+parseInt(hours)+'小时'+parseInt(minutes)+'分'+parseInt(seconds)+'秒';
}