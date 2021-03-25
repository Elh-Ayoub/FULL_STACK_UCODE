function concat(string1, string2){
    phrases.count = 0;
    function phrases() {
        let tmp_str = prompt("fill string2: ");
        if (tmp_str === null)
            return String[0];
            phrases.count++;
        return String[0].concat(" ", tmp_str);
    }
    if (String.length == 1)
        return phrases;
    if (String.length == 2) {
        return String[0].concat(" ", String[1]);
    }
}
function concat(...String) {
    phrases.count = 0;
    function phrases() {
        let tmp_str = prompt("fill string2: ");
        if (tmp_str === null)
            return String[0];
            phrases.count++;
        return String[0].concat(" ", tmp_str);
    }
    if (String.length == 1)
        return phrases;
    if (String.length == 2) {
        return String[0].concat(" ", String[1]);
    }
}