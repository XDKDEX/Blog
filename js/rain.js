"use strict";

function scrollRsate(a) {
    if(a.nodeName == "BODY"){
        return [(document.documentElement.scrollTop / (a.scrollHeight - a.clientHeight) * 100), (document.documentElement.scrollLeft / (a.scrollWidth - a.clientLeft) * 100)];
    }else{
        return [(a.scrollTop / (a.scrollHeight - a.clientHeight) * 100), (a.scrollLeft / (a.scrollWidth - a.clientLeft) * 100)];
    }
};

var ajaxSetting = {
    "Request": () => {
        return new XMLHttpRequest();
    }, "Zip": false
};
/* setup */
// ajaxSetting.Request();
ajaxSetting.Zip = true;
function ajax(data) {
    var xmlhttp = ajaxSetting.Request();
    xmlhttp.open("GET", data.url, false);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function (func, response) {
        func = func.replaceAll(/&response/g, response);
        return Function(func)();
    }(data.success, xmlhttp.response);
};





const docu = {
    "cookie": (a, ...z) => {
        // let r = document.cookie.split(';');
        let r = Object.keys(a)
        for (let count = 0; r.length != count; count++) {
            document.cookie = r[count] + '=' + a[r[count]]
        }
    }
}
















function query(data) {
    let a;
    a = document.querySelectorAll(data);

    for(let count=0;a.length!=count;count++){
        queryEvent(a[count]);
    }

    return a[0]||a[1],a;
};


function queryEvent(a) {
        /* JS */
        a.click = function (b) { a.addEventListener('click', b); };
        a.dblclick = function (b) { a.addEventListener('dblclick', b); };
        a.scroll = function (b) { if (a.nodeName == 'BODY') { window.addEventListener('scroll', b); } else { a.addEventListener('scroll', b); }; };
        /*a.interval = (b,c) =>{setInterval(b,c);} */
        a.ready = function (b) { if (a.nodeName == 'BODY') { window.addEventListener('load', b); } else { a.addEventListener("load", b); }; };
        a.load = function (b) {let r = ajaxSetting.Request();r.open("GET", b, false);r.send();r.onreadystatechange = function (t, e){t.innerHTML = e;}(a, r.response);};
        /* CSS */
        a.hide = function () { a.style.display = 'none'; };
        a.show = function () { a.style.display = ''; };
};




// function queryApp(){

// }


console.log("\n %c RainDropJS dev  %c https://github.com/XDKDEX/RainDrops \n", "color: #fadfa3; background: #030307; padding:5px 0;", "background: #fadfa3; padding:5px 0;")