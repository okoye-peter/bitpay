let hrs = document.getElementById('hrs');
let mins = document.getElementById('mins');
let secs = document.getElementById('secs');
let status = document.getElementById('status').value;

if ((+hrs.textContent > 0 || +mins.textContent > 0 || +secs.textContent > 0) && status == 'approve') {
    var interval = setInterval(countDown, 1000);
}


function countDown() {
    let hrs = document.getElementById('hrs');
    let mins = document.getElementById('mins');
    let secs = document.getElementById('secs');
    if (+secs.textContent == 00) {
        if (+mins.textContent == 00) {
            mins.innerHTML = 59;
            if (+hrs.textContent >= 00 && +hrs.textContent < 10) {
                hrs.innerHTML = "0" + (+hrs.textContent - 1);
            } else {
                hrs.innerHTML = +hrs.textContent - 1;
            }
        } else {
            if (+mins.textContent >= 00 && +mins.textContent < 10) {
                mins.innerHTML = "0" + (+mins.textContent - 1);
            } else {
                mins.innerHTML = +mins.textContent - 1;
            }
        }
        secs.innerHTML = 59;
    }

    secs.innerHTML = +secs.textContent - 1;
    if (+secs.textContent >= 00 && +secs.textContent < 10) {
        secs.innerHTML = "0" + secs.textContent;
    }

    if (+hrs.textContent == 0 && +mins.textContent == 0 && +secs.textContent == 0) {
        clearInterval(interval);
    }
}