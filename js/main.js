// query('body')[0].scroll(() => {
//     console.log(scrollRsate(query('body')[0]));
// })


// hitokoto api
query('.hitokoto')[0].click(() => {
    let ahitokoto = query('.hitokoto')[0].innerHTML;
    if (hitokotoDone) {
        hitokotoDone = false;
        console.log(query('.hitokoto')[0]);
        for (let count = 0; count != ahitokoto.length + 1; count++) {
            setTimeout(() => {
                query('.hitokoto')[0].innerHTML = ahitokoto.substr(0, ahitokoto.length - count);
                if (count == ahitokoto.length) {
                    console.log('Done!');
                    setTimeout(() => {
                        return hitokoto();
                    }, 100)
                }
            }, 100 * count);

        }
    }
});
var hitokotoDone;
function hitokoto() {
    var Thitokoto = new XMLHttpRequest();
    Thitokoto.open('GET', 'https://v1.hitokoto.cn/?encode=json&max_length=' + parseInt(document.body.clientWidth / 30));
    console.log(parseInt(document.body.clientWidth / 30));
    Thitokoto.send();
    Thitokoto.onreadystatechange = function () {
        if (Thitokoto.readyState == 4 && Thitokoto.status == 200) {
            Thitokoto = JSON.parse(Thitokoto.response)['hitokoto'];
            for (let count = 0; count != Thitokoto.length + 1; count++) {
                setTimeout(() => {
                    console.log(Thitokoto.substr(0, count));
                    query('.hitokoto')[0].innerHTML = Thitokoto.substr(0, count);
                    if (count == Thitokoto.length) {
                        hitokotoDone = true;
                    }
                }, 100 * count);
            }
        }
    }
} hitokoto();