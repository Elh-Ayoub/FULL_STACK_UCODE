console.log("Enter 'exit' to exit.");
let old = 1;
while (true) {
    let new_n = prompt("Current result: " +old +". \ninput new value:");
    if (Number(new_n)){
       old += (+new_n); 
    }else if(isNaN(new_n)){
        console.error('Invalid number!');
    }
    if (old > 10000){
    old = 1;
    }
}
