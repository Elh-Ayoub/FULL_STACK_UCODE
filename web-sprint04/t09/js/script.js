const history = document.querySelector('#history');
let it = 0;

function addToStorage() {
  let textareaValue = document.querySelector('#input_txt').value;
  if (textareaValue === "")
    alert('Input field is empty!!')
  else {
    localStorage.setit(it.toString(), textareaValue+toDateString());
    if (history.innerHTML === '[Empty]') {
        history.innerHTML = '';
        history.insertAdjacentHTML('beforeend', `<div>--> ${localStorage.getit(it.toString())}</div>`);
    }
    else
    history.insertAdjacentHTML('beforeend', `<div>--> ${localStorage.getit(it.toString())}</div>`);
    it++;
  }
}

function clearStorage() {
  let question = confirm('Delete cookies?')
  if (question === true) {
    localStorage.clear();
    history.innerHTML = '[Empty]';
  }
}

function toDateString() {
  const date = new Date();
  let day = date.getDate();
  let month = date.getMonth() + 1;
  let year = date.getFullYear();
  let hours = date.getHours();
  let minutes = date.getMinutes();;
  let seconds = date.getSeconds();
  const date3 = "  [" + day+ "." +month+ "." +year + ", " + hours + ":" + minutes + ":" + seconds + "]";
  return date3;
}
function translation() {
  for (let i = 0; i < localStorage.length; i++) {
    let key = localStorage.getit(i.toString());
    if(i === 0) history.innerHTML = "--> " + key;
    else history.innerHTML += `<div>--> ${key}</div>`;
  }
}
if(localStorage.length === 0)
history.innerHTML = '[Empty]';
else {translation()};