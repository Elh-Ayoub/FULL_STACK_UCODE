//////////////////// --WeakSet--  //////////////////////
function forGuestlIST(){
    var guestList = new WeakSet();
    let arr = [
     guest1 ={
        name:'Liam'
    },
     guest2 = {
        name: 'James'
    },
     guest3 = {
        name: 'Lucas'
    },
     guest4 = {
        name: 'Ayoub'
    },
     guest5 = {
        name: 'Sophia'
    },
     guest6 = {
        name: 'Emma'
    },
     guest7 = {
     name: 'Olivia'
    
    }];
   guestList.add(guest1);
   guestList.add(guest2);
   guestList.add(guest3);
   guestList.add(guest4);
   guestList.add(guest5);
   guestList.add(guest6);
   guestList.add(guest7);

    var choise = prompt("To check your name in guest list type 1.\nTo check who are invited type 2.\nTo check how many people arre inveted type 3.\nTo remove some one from the list type 4.");
    var b = false;
    if(choise === "1"){
        var username = prompt("Enter your name: ");
        for(let i =0; i< arr.length; i++){
            if(arr[i].name === username && guestList.has(arr[i])){
                alert("Your name is in the list\nYou're invited!");
                b = true;
            }

        }
        if(!b){
            alert(username + " is not in the list.");
        }
    }
    if(choise === "2" || choise ==="3"){
        alert("Sorry you can't see who, or how many people are invited");   
    }
    if(choise === "4"){
        var user_to_delete = prompt("Enter name to remove: ");
        b = false;
        for(let i =0; i< arr.length; i++){
            if(arr[i].name === user_to_delete && guestList.has(arr[i])){
                guestList.delete(arr[i]);
                alert( user_to_delete + " removed successfully!");
            }
        }
        if(!b){
            alert(user_to_delete + " is not in the list.");
        }
    }
}
/////////////////// --Map-- ///////////////////////
    let menu = new Map();
    menu.set("Butter Chiken Rice", 336);
    menu.set("Chicken Briyani", 364);
    menu.set("Antipasto Salad", 200);
    menu.set("Beef Burger", 180);
    menu.set("Beef Meal Steak", 250);
    menu.set("Plain Rice", 150);
    menu.set("Chicken Grilled", 210);
/////////////////// --Set--  ///////////////////////
    let bankVault = new Set();
    const client1 = {
        name: 'Liam',
        gender: 'Male',
        age: 23,
        cridential: 4521367895102345
    }
    const client2 = {
        name: 'James',
        gender: 'Male',
        age: 50,
        cridential: 8501236547892012,
    }
    const client3 = {
        name:'Sophia',
        gender: 'Female',
        age: 25,
        cridential: 5201236974580001
    }
    const client4 = {
        name: 'Ayoub',
        gender: 'Male',
        age: 22,
        cridential: 5478410321054789
    }
    const client5 = {
        name: 'Olivia',
        gender: 'Female',
        age: 18,
        cridential: 5448012369874520
    }
    bankVault.add(client1);
    bankVault.add(client2);
    bankVault.add(client3);
    bankVault.add(client4);
    bankVault.add(client5);
/////////////////// --WeakMap-- ///////////////////////
function forWeakMap(){
    let coinCollection = new WeakMap();
    const coin1 = {
        cost: 8,
        yearOfRelease: 1880
    }
    const coin2 = {
        cost: 20,
        yearOfRelease: 1750
    }
    const coin3 = {
        cost: 15,
        yearOfRelease: 1920
    }
    const coin4 = {
        cost: 5,
        yearOfRelease: 1630
    }
    const coin5 = {
        cost: 26,
        yearOfRelease: 1850
    }
    coinCollection.set(coin1, "Penny");
    coinCollection.set(coin2, "Sovereign");
    coinCollection.set(coin3, "Guinea");
    coinCollection.set(coin4, "Ryal");
    coinCollection.set(coin5, "Unite");
    alert( coinCollection.get(coin1) + " Coin" + " :\n" + " -Cost: " +coin1.cost + "\n -Year of release: " + coin1.yearOfRelease + "\n" + 
          coinCollection.get(coin2) + " Coin" + " :\n" + " -Cost: " +coin2.cost + "\n -Year of release: " + coin2.yearOfRelease + "\n" +
          coinCollection.get(coin3) + " Coin" + " :\n" + " -Cost: " +coin3.cost + "\n -Year of release: " + coin3.yearOfRelease + "\n" +
          coinCollection.get(coin4) + " Coin" + " :\n" + " -Cost: " +coin4.cost + "\n -Year of release: " + coin4.yearOfRelease + "\n" +
          coinCollection.get(coin5) + " Coin" + " :\n" + " -Cost: " +coin5.cost + "\n -Year of release: " + coin5.yearOfRelease + "\n" );
}
//////////////////////////////////////////

function forMenu(menu){
    var dish = prompt("Type dish name: \nTo see all dishes type 'all'");
    dish = dish.trim();
    if(dish === "all"){
        let items = "";
        for(const m of menu){
            items +=  m + "  MAD\n"//itmes.concat(m + " MAD\n");
        }
        alert(items);
    }else if(menu.has(dish)){
        alert(dish + ", " + menu.get(dish) + " MAD");
    }
}

function forSet(bankVault){
    var cr = prompt("Type your credential number: ");
    for(const c of bankVault){
        if(c.cridential === +cr){
            alert("Client:\nname: " + c.name + "\nGender: "+ c.gender + "\nAge: " + c.age);
        }
    }
}

var firstP = prompt("To check the Guests list type 1.\nTo check the menu type 2.\nTo check bank account type 3.\nTo see a coin collection type 4.");
if(firstP === "1"){
    forGuestlIST();
}
if(firstP === "2"){
   forMenu(menu);
}
if(firstP === "3"){
    forSet(bankVault);
}
if(firstP === "4"){
    forWeakMap();
}
