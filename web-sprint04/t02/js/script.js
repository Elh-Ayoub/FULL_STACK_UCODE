function tableCreate(names, strength, age) {
    let data = [names, strength, age];
    let head = ["Name", "Strength", "Age"];
    var body = document.getElementsByTagName('body')[0];
    var tbl = document.createElement('table');
    var thd = document.createElement('thead');
    var tr = document.createElement('tr');
    for (let i = 0; i < head.length; i++) {
        var td = document.createElement('td');
        td.appendChild(document.createTextNode(head[i]));
        td.className = head[i];
        td.onclick = function() { sortTable(head[i]); };
        tr.appendChild(td);
    }
    thd.appendChild(tr);
    var tbdy = document.createElement('tbody');
    for (var i = 0, k = 0; i < names.length; i++) {
        var tr = document.createElement('tr');
        for (var j = 0; j < head.length; j++) {
            var td = document.createElement('td');
            td.appendChild(document.createTextNode(data[j][i]));
            td.id = "cell" + k;
            k++;
            tr.appendChild(td);
        }
        tbdy.appendChild(tr);
    }
  tbl.appendChild(thd);
  tbl.appendChild(tbdy);
  body.appendChild(tbl);
}

function sortTable(sortBy){
    let data = [names, strength, age];
    var index1, index2, index3;
    if(sortBy === "Name"){
        index1 = 0; index2 = 1; index3 = 2;
        if(document.getElementById("notification").innerHTML !== "Sorting by Name, order: ASC"){
            document.getElementById("notification").innerHTML = "Sorting by Name, order: ASC";
            sortASC(data,index1, index2, index3);
        }else{
            document.getElementById("notification").innerHTML = "Sorting by Name, order: DESC";
            sortDESC(data,index1, index2, index3);
        }
        
    }
    if(sortBy === "Strength"){
        index1 = 1; index2 = 0; index3 = 2;
        if(document.getElementById("notification").innerHTML !== "Sorting by Strength, order: ASC"){
            document.getElementById("notification").innerHTML = "Sorting by Strength, order: ASC";
            sortASC(data,index1, index2, index3);
        }else{
            document.getElementById("notification").innerHTML = "Sorting by Strength, order: DESC";
            sortDESC(data,index1, index2, index3);
        }
    }
    if(sortBy === "Age"){
        index1 = 2; index2 = 1; index3 = 0;
        if(document.getElementById("notification").innerHTML !== "Sorting by Age, order: ASC"){
            document.getElementById("notification").innerHTML = "Sorting by Age, order: ASC";
            sortASC(data,index1, index2, index3);
        }else{
            document.getElementById("notification").innerHTML = "Sorting by Age, order: DESC";
            sortDESC(data,index1, index2, index3);
        }
    }
    for (var i = 0, k = 0; i < names.length; i++) {
        var tr = document.getElementsByTagName('tr');
        for (var j = 0; j < data.length; j++) {
            document.getElementById('cell' + k).innerHTML = data[j][i];
            k++;
        }
    }
}  
function sortASC(data,index1, index2, index3){
    var swapp;
    var n = data[index1].length-1;
    do {
    swapp = false;
    for (var i=0; i < n; i++)
    {
        if (data[index1][i] > data[index1][i+1])
        {
           var temp = data[index1][i];
           data[index1][i] = data[index1][i+1];
           data[index1][i+1] = temp;
           ////
           temp = data[index2][i];
           data[index2][i] = data[index2][i+1];
           data[index2][i+1] = temp;
           ////
           temp = data[index3][i];
           data[index3][i] = data[index3][i+1];
           data[index3][i+1] = temp;
           swapp = true;
        }
    }
    n--;
    }while (swapp);
    return data;
}
function sortDESC(data,index1, index2, index3){
    var swapp;
    var n = data[index1].length-1;
    do {
    swapp = false;
    for (var i=0; i < n; i++)
    {
        if (data[index1][i] < data[index1][i+1])
        {
           var temp = data[index1][i];
           data[index1][i] = data[index1][i+1];
           data[index1][i+1] = temp;
           ////
           temp = data[index2][i];
           data[index2][i] = data[index2][i+1];
           data[index2][i+1] = temp;
           ////
           temp = data[index3][i];
           data[index3][i] = data[index3][i+1];
           data[index3][i+1] = temp;
           swapp = true;
        }
    }
    n--;
    }while (swapp);
    return data;
}
////////////////////////// --main-- /////////////////////////
let names = ["Black Panther", "Captain America", "Captain Marvel", "Hulk", "Iron Man", "Spider-Man", "Thanos", "Thor", "Yon-Rogg"];
let strength = [66, 79, 97, 80, 88, 78, 99, 95, 73];
let age = [53, 137, 26, 49, 48, 16, 1000, 1000, 52];
let data = [names, strength, age];
tableCreate(names, strength, age);
