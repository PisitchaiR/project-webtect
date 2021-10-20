function sivamtime() {
    now = new Date();
    d = now.getDay();
    datee = now.getDate()
    m = now.getMonth();
    y = now.getFullYear() + 543;
    hour = now.getHours();
    min = now.getMinutes();
    sec = now.getSeconds();

    if (min <= 9) { min = "0" + min; }
    if (sec <= 9) { sec = "0" + sec; }
    if (hour > 12) { hour = hour - 12; add = "pm"; }
    else { hour = hour; add = "am"; }
    if (hour == 12) { add = "pm"; }

    time = hour + ":" + min + ":" + sec + " " + add;;

    if (document.getElementById) { date.innerHTML = time; }
    else if (document.layers) {
        document.layers.date.document.write(time);
        document.layers.date.document.close();
    }

    setTimeout("sivamtime()", 1000);
}
window.onload = sivamtime;