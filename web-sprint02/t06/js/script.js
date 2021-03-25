var firstName = prompt("Input first name: ");
var lastName = prompt("Input last name: ");
while(!firstName.match('^[a-zA-Z]+') || !lastName.match('^[a-zA-Z]+')){
    alert("Wrong input!");
    console.log("Wrong input");
    firstName = prompt("Input first name: ");
    lastName = prompt("Input last name: ");
}
if(firstName.match('^[a-z]') || lastName.match('^[a-z]')){
    firstName = firstName.charAt(0).toUpperCase() + firstName.slice(1);
    lastName = lastName.charAt(0).toUpperCase() + lastName.slice(1);
}
if(firstName.match('^[A-Z]+[a-z-A-Z]') || lastName.match('^[A-Z]+[a-z-A-Z]')){
    firstName = firstName.charAt(0) + firstName.slice(1).toLowerCase();
    lastName = lastName.charAt(0) + lastName.slice(1).toLowerCase();
}
alert("Hello " + firstName + " " + lastName);
console.log("Hello " + firstName + " " + lastName);