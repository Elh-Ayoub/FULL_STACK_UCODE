let input_txt = document.getElementById("input_txt");
let multiline = document.getElementById("multiline");
let output_txt = document.getElementById("output_txt");
let phoneSpan = document.getElementById('phone');
let countSpan = document.getElementById('count');
let replaceSpan = document.getElementById('replace');

let phone = 0;
let count = 0;
let replace = 0;

let checkPhone = () => {
    let wordInput = input_txt.value.trim();
    if (validation(wordInput)) 
        return;
    if (wordInput.match(/^\d{10}$/g))
    output_txt.value = `${wordInput.slice(0,3)}-${wordInput.slice(3,6)}-${wordInput.slice(6,10)}`;
    else output_txt.value = 'Invalid phone number.';

    phoneSpan.innerHTML = ++phone;
    document.cookie = "phone  =  " + phone;
}

let countWords = () => {
    let wordInput = input_txt.value.trim();
    let textInput = multiline.value.trim();
    if (validation(wordInput, textInput)) 
        return;
    if (wordInput.match(/^\w+$/gi))
    output_txt.value = 'Word count: ' + (multiline.value.match(new RegExp(`${wordInput}`, 'g')) || []).length;
    else output_txt.value = 'Invalid input.';

    countSpan.innerHTML = ++count;
    document.cookie = "count = " + count;
}

let replaceWords = () => {
    let wordInput = input_txt.value.trim();
    let textInput = multiline.value.trim();
    if (validation(wordInput, textInput)) 
        return;
    if (wordInput.match(/^\w+$/gi))
    output_txt.value = textInput.replace(/\S+/g, wordInput);
    else output_txt.value = 'Invalid input.';

    replaceSpan.innerHTML = ++replace;;
    document.cookie = "replace = " + replace;
}

let validation = (wordInput, textInput) => {
    if (input_txt.value === '' || wordInput.length === 0) {
        output_txt.value = 'Text input is empty.';
        return true;
    }
    if (textInput !== undefined && (multiline.value === '' || textInput.length === 0)) {
        output_txt.value = 'Text input is empty.';
        return true;
    }
    return false;
}

let setCookies = () => {
    phone = 0, count = 0, replace = 0;
    document.cookie = "phone = 0", document.cookie = "count = 0", document.cookie = "replace = 0";
    input_txt.value = '', text.value = '', output.value = '';
    coutUpdate();
}

let getCookies = () => {
    return document.cookie.split(';').reduce((res, c) => {
        const [key, val] = c.trim().split('=').map(decodeURIComponent);
        try {
            return Object.assign(res, { [key]: JSON.parse(val) });
        } catch (e) {
            return Object.assign(res, { [key]: val });
        }
    }, {});
}

let coutUpdate = () => {
    phoneSpan.innerText = phone;
    countSpan.innerText = count;
    replaceSpan.innerText = replace;
}

let cookies = getCookies();
if (cookies.phone === undefined)
    setCookies();
else {
    phone = cookies.phone;
    count = cookies.count;
    replace = cookies.replace;
    coutUpdate();
}
setInterval(setCookies, 60000);