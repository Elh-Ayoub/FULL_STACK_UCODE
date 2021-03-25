let images = ["batman.png", "hulk.png", "iron-man.png", "spider-man.png"];
let path = "assets/images/";
function slidLeft(){
    var curentImage;
    for(let i = images.length - 1; i >= 0; i--){
        if(document.getElementById("image").src.includes(images[i])){
            curentImage = images[i];
            if(curentImage === images[0]){
                document.getElementById("image").src = path + images[images.length - 1];
                break;
            }else{
                document.getElementById("image").src = path + images[i-1];
                break;
            }
        }
    }
}
function slidRight(){
    var curentImage;
    for(let i = 0; i < images.length; i++){
        if(document.getElementById("image").src.includes(images[i])){
            curentImage = images[i];
            if(curentImage === images[images.length - 1]){
                document.getElementById("image").src = path + images[0];
                break;
            }else{
                document.getElementById("image").src = path + images[i+1];
                break;
            }
        }
    }
}
function autoSlid(images){
    var inter = setInterval(function(){
        var curentImage;
        for(let i = 0; i < images.length; i++){
        if(document.getElementById("image").src.includes(images[i])){
            curentImage = images[i];
                if(curentImage === images[images.length - 1]){
                    document.getElementById("image").src = path + images[0];
                    break;
                }else{
                    document.getElementById("image").src = path + images[i+1];
                    break;
                }
            }
        }
    }, 3000);
}
autoSlid(images);