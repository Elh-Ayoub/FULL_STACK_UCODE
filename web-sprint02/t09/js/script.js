function getFormattedDate(dateObject){
    let day = dateObject.getDate();
    let month = dateObject.getMonth()+1;
    let hours = dateObject.getHours();
    let minutes = dateObject.getMinutes();
    let year = dateObject.getFullYear();
    if (hours < 10) {
        hours = '0' + dateObject.getHours()
    }
    if (minutes < 10) {
        minutes = '0' + dateObject.getMinutes()
    }
    let week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
    let res = day + "." +month + "." + year + " "+hours + ":" + minutes + " " + week[dateObject.getDay()];
    return res;
}
