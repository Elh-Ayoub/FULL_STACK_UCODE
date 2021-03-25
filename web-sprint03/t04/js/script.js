houseMixin = HouseBuilder.prototype = {
    wordReplace: function(str1, str2) {
        this.description = this.description.replace(str1, str2);
    },
    wordDelete: function(str) {
        let ind_left = this.description.indexOf(str);
        let ind_right = this.description.indexOf(str) + str.length;
        var res = this.description.slice(0, ind_left)+ this.description.slice(ind_right);
        this.description = res;
    },
    wordInsertAfter: function(str1, str2) {
        let index = this.description.indexOf(str1) + str1.length;
        var res = this.description.slice(0, index) + " " + str2 + this.description.slice(index);
        this.description = res;
    },
    wordEncrypt() {
        let dict1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        let dict2 = 'NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm';
        let ind = x => dict1.indexOf(x);
        let out = x => ind(x) > -1 ? dict2[ind(x)] : x;
        this.description = this.description.split('').map(out).join('');
    },
    wordDecrypt() {
        let dict1 = 'NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm';
        let dict2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        let ind = x => dict1.indexOf(x);
        let out = x => ind(x) > -1 ? dict2[ind(x)] : x;
        this.description = this.description.split('').map(out).join('');
    }
}

// const house = new HouseBuilder('88 Crescent Avenue','Spacious town house with wood flooring, 2-car garage, and a back patio.','J. Smith',110,5);
// console.log(house._averageBuildSpeed);// 0.5
// console.log(house.getDaysToBuild());// 220
// Object.assign(house, houseMixin);
// console.log(house.address);// '88 Crescent Avenue'
// console.log(house.description);// 'Spacious town house with wood flooring, 2-car garage, and a back patio.'
// house.wordReplace("wood", "tile");
// console.log(house.description);
// house.wordInsertAfter("with", "marble");
// console.log(house.description);
// house.wordDelete("town ");
// console.log(house.description);
// house.wordEncrypt();
// console.log(house.description);
// house.wordDecrypt();
// console.log(house.description);