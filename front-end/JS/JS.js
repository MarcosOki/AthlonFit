document.addEventListener("DOMContentLoaded", function () {
    let counter = document.getElementById("counter");
    let start = 0;
    let end = 1233;
    let duration = 2000;
    let intervalTime = duration / end;

    let interval = setInterval(function () {
        start++;
        counter.textContent = start;
        if (start >= end) clearInterval(interval);
    }, intervalTime);
});