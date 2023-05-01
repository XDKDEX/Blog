"use strict";

function scrollRsate(a) {
    let doc;
    if (a == "document") {
        doc = document.documentElement;
    } else {
        doc = document.getElementsByClassName(a)[0];
    }
    return [(doc.scrollTop / (doc.scrollHeight - doc.clientHeight) * 100), (doc.scrollLeft / (doc.scrollWidth - doc.clientLeft) * 100)];
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







function query(data, mumber) {
    let a;
    if (data == 'document') {
        a = document.body;
    } else {
        if (mumber == undefined) {
            a = document.querySelectorAll(data);
        } else {
            a = document.querySelectorAll(data)[mumber];
        }
    }
    if (a.length == 1) {
        docEvent(a[0], 'reg');
        return a[0];
    }
    docEvent(a, 'reg');
    return a;
};

function docEvent(a, mode) {
    if (mode == 'reg') {
        /* JS */

        a.click = function (b) { a.addEventListener('click', b); };
        a.dblclick = function (b) { a.addEventListener('dblclick', b); };
        a.scroll = function (b) { if (a.nodeName == 'BODY') { window.addEventListener('scroll', b); } else { a.addEventListener('scroll', b); }; };

        a.parent = a;

        /*a.interval = (b,c) =>{setInterval(b,c);} */
        a.ready = function (b) { if (a.nodeName == 'BODY') { window.addEventListener('load', b); } else { a.addEventListener("load", b); }; };
        a.load = function (b) { let r = ajaxSetting.Request(); r.open("GET", b, false); r.send(); r.onreadystatechange = function (t, e) { t.innerHTML = e; }(a, r.response); };

        /* CSS */

        a.hide = function () { a.style.display = 'none'; };
        a.show = function () { a.style.display = ''; };

    } else if (mode == 'del') {
        let object = Object.keys(a);
        for (let count = 0; object.length != count; count++) {
            delete a[object[count]];
        }
        return true;
    }
    setTimeout(() => {
        docEvent(a, 'del');
    }, 1);


};

var test = (aaa) => {
    console.log(!this.aaa);
};
console.log("\n %c RainDropJS dev  %c https://github.com/XDKDEX/RainDrops \n", "color: #fadfa3; background: #030307; padding:5px 0;", "background: #fadfa3; padding:5px 0;")