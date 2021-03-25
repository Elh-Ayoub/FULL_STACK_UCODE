var animalName, gender, age, hero;
	var reg = new RegExp('^[a-zA-Z]+$');
	var reg2 = new RegExp('^$');
	var reg3 = new RegExp('[0-9]+');
animalName = prompt("What animal is the superhero most similar to?");
if(animalName.length <= 20 && reg.test(animalName)){
	gender = prompt("Is the superhero male or female? Leave blank if unknown or other.");
	if(gender === "male" || gender === "female" || reg2.test(gender)){
		age = prompt("How old is the superhero?");
		if(age.length <= 5 && reg3.test(age)){
			if(gender ==="male" && age < 18){
				alert("The superhero name is " + animalName + "-boy");
			}
			if(gender ==="male" && age >= 18){
				alert("The superhero name is " + animalName + "-man");
			}
			if(gender ==="female" && age<18){
				alert("The superhero name is " + animalName + "-girl");
			}
			if(gender ==="female" && age>=18){
				alert("The superhero name is " + animalName + "-woman");
			}
			if(gender ==="" && age < 18){
				alert("The superhero name is " + animalName + "-kid");
			}
			if(gender ==="" && age>=18){
				alert("The superhero name is " + animalName + "-hero");
			}
		}else{
			alert("Input must be less than 5 and only digits");
		}
	}else{
		alert("Input must male or femal blank if unknown or other.");
	}
}
else{
	alert("Input must be less than 20 and only letters");
}
