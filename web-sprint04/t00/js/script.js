function transformation(){
    if(document.getElementById("hero").innerHTML == "Hulk"){
        document.getElementById("hero").innerHTML = "Bruce Banner";
        document.querySelector("#hero").style = "font: 60px 'Bowlby One', cursive; letter-spacing: 2px;";
        document.querySelector("#lab").style = "backgroun-color: #ffb300;";
    }
    else if(document.getElementById("hero").innerHTML == "Bruce Banner"){
        document.getElementById("hero").innerHTML = "Hulk";
        document.querySelector('#hero').style = "font: 130px 'Bowlby One', cursive; letter-spacing: 6px;";
        document.querySelector('#lab').style = "background: #70964b;";
    }
}
