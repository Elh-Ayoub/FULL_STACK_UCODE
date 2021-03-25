function checkDivision(beginRange = 1, endRange = 100){
	// var tmp;
	for (var i = beginRange; i <= endRange; i++) {
		var tmp = "";
		if(i % 2 === 0){
			tmp = "is even";	
		}
		if(i % 3 === 0){
			if(tmp === ""){
				tmp = "is a multiple of 3";
			}else{
				tmp += ", is a multiple of 3";
			}
		}
		if(i % 10 === 0){
			if(tmp === ""){
				tmp = "is a multiple of 10";
			}else{
				tmp += ", is a multiple of 10";
			}
		}
		if(tmp === ""){
			tmp = "-";
		}
		console.log(String(i + " " +tmp));
	}
}
beginRange = prompt("Enter number for beginning range: ");
endRange = prompt("Enter number for ending range: ");
if(beginRange === "" || endRange === ""){
	if(beginRange === "" && endRange !== ""){
		checkDivision(1, +endRange);
	}
	if(beginRange !=="" && endRange === ""){
		checkDivision(+beginRange, 100);
	}
	if(beginRange === "" && endRange === ""){
		checkDivision();
	}
}else{
	checkDivision(+beginRange, +endRange);
}
