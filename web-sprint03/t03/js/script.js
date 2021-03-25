class Human{
    constructor(firstName, lastName, gender, age, calories){
        this.firstName = firstName;
        this.lastName = lastName;
        this.gender = gender;
        this.age = age;
        this.calories = calories;
    }
    sleepFor(){
        document.getElementById("image").src="assets/images/sleep.gif";
        var sec = prompt("Sleep for how many seconds?");
        document.getElementById("paragraph").innerHTML = "I'm sleeping";
        setTimeout(function(){
            document.getElementById("paragraph").innerHTML = "I'm awake now";
            document.getElementById("image").src="assets/images/human.png";
        }, 1000*sec);
    }
    feed(){
        if(this.calories < 500){
            document.getElementById("image").src="assets/images/eat.gif";
            document.getElementById("paragraph").innerHTML = "Nom nom nom..";
            setTimeout(function(){
                document.getElementById("paragraph").innerHTML = "";
                document.getElementById("image").src="assets/images/human.png";
            }, 10000);
            this.calories += 200;
            document.getElementById("paragraph").innerHTML = "Nom nom nom..";
            setTimeout(() => {
            document.getElementById("cal").innerHTML = this.calories;
            if(this.calories < 500)
            document.getElementById("paragraph").innerHTML = "I'm still hungry";
            }, 10000);
        }else{
            document.getElementById("paragraph").innerHTML = "I'm not hungry.";
            setTimeout(function(){
                document.getElementById("paragraph").innerHTML = "";
            }, 5000);
        }
            // }else{
            //     setTimeout(function(){
            //     document.getElementById("feed").innerHTML = "I'm still hungry";
            //     }, 5000);
            // }
    } 

}
class Superhero extends Human{
    fly(){
        document.getElementById("image").src="assets/images/fly.gif";
        document.getElementById("paragraph").innerHTML = "I'm flying!";
        setTimeout(function(){
            document.getElementById("paragraph").innerHTML = "";
            document.getElementById("image").src="assets/images/human.png";
        }, 5000);
    }
    fightWithEvil(){
        ////
        document.getElementById("image").src="assets/images/fight.gif";
        ////
        document.getElementById("paragraph").innerHTML = "Khhhh-chh... Bang-g-g-g... Evil is defeated!";
        setTimeout(function(){
            document.getElementById("paragraph").innerHTML = "";
            document.getElementById("image").src="assets/images/human.png";
        }, 10000);
    }
}
let human = new Human();
human.calories = 0;
document.getElementById("cal").innerHTML = human.calories;
setInterval(function(){
    if(human.calories===0){
        document.getElementById("paragraph").innerHTML = "I'm hungry";
    }
}, 5000);

setInterval(function(){
    if(human.calories > 0){
        human.calories -=  200;
        document.getElementById("cal").innerHTML = human.calories; 
    }
}, 60000);
let superhero = new Superhero();


