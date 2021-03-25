function addWords(obj, wrds){
    let arr = obj['words'];
    arr = arr + ' ' + wrds;
    arr = arr.split(' ');
    let tmp = [];
    for (let i = 0; i < arr.length; i++) {
        let element = arr[i];
        if (!~tmp.indexOf(element)) {
            tmp.push(element);
        }
    }
    let res = [];
    for (let i in tmp) {
        if (tmp[i] != "") {
            res.push(tmp[i]);
        }
    }
    obj['words'] = res.join(' ');
}
function removeWords(obj, wrds){
    let arr = obj['words'];
    arr = arr.split(' ');
    let arr_del = wrds.split(' ');
    let tmp_res = [];
    for (let i in arr_del) {
        if (arr_del[i] != "") {
            tmp_res.push(arr_del[i]);
        }
    }
    for (let i = 0; i < tmp_res.length; i++) {
        let el = tmp_res[i];
        let ind = arr.indexOf(el);
        if (-1 < ind){
            arr.splice(ind, 1);
        }
    }
    obj['words'] = arr.join(' ');
}
function changeWords(obj, oldWrds, newWrds){
    let arr = obj['words'];
    arr = arr.split(' ');
    let arr_del = oldWrds.split(' ');
    let tmp_arr= newWrds.split(' ');
    let tmp_res = [];
    for (let i in arr_del) {
        if (arr_del[i] != "") {
            tmp_res.push(arr_del[i]);
        }
    }
    for (let i = 0; i < tmp_res.length; i++) {
        let element = tmp_res[i];
        let ind = arr.indexOf(element);
        if (-1 < ind) {
            arr.splice(ind, 1);
        }
    }
    for (let i = 0; i < tmp_arr.length; i++) {
        let element2 = tmp_arr[i];
        arr.push(element2);
    }
    obj['words'] = arr.join(' ');
}
