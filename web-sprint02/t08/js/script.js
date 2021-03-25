function checkBrackets(str){
    let arr = [];
    if (str == null || typeof(str) != "string") {
        return -1;
    }else{
        for (let i = 0; i <= str.length; i++){
            if (str.charAt(i) === '('){
                arr.push('(');
            }
            else if (str.charAt(i) === ')') {
                arr.push(')');
            }  
        }
        arr = arr.join("");
        for (let i = 0; i <= str.length; i++) {
            arr = arr.replace(/\(\)/, "");
        }
        return arr.length;
    }
}
