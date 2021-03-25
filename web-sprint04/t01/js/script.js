const list_i = document.getElementsByTagName('li');
for (let i = 0; i < list_i.length; i++) {
    var str = list_i[i].getAttribute('data-element');
    let br = document.createElement("br");
    list_i[i].appendChild(br);
    if(!list_i[i].className){
        list_i[i].className = "unknown";
    }
    if(str != null){
        if(str.indexOf("air") != -1){
            var node = document.createElement("div");
            node.classList.add("elem");
            list_i[i].appendChild(node);
            node.classList.add("air");
        }
        if(str.indexOf("water") != -1){
            var node = document.createElement("div");
            node.classList.add("elem");
            list_i[i].appendChild(node);
            node.classList.add("water");
        }
        if(str.indexOf("earth") != -1){
            var node = document.createElement("div");
            node.classList.add("elem");
            list_i[i].appendChild(node);
            node.classList.add("earth");
        }
        if(str.indexOf("fire") != -1){
            var node = document.createElement("div");
            node.classList.add("elem");
            list_i[i].appendChild(node);
            node.classList.add("fire");
        }
    }
    else{
        list_i[i].classList.add("none");
        list_i[i].insertAdjacentHTML('beforeend','<div class="elem"><div class="line"></div></div>');
    }
}