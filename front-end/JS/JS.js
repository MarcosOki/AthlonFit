const observerRight = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('slideRight');
        }
    });
}, { threshold: 0.5 });
const observerLeft = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('slideLeft');
        }
    });
}, { threshold: 0.5 });
observerLeft.observe(document.querySelector('#ceo'));
observerRight.observe(document.querySelector('#coo'));
observerLeft.observe(document.querySelector('#cto'));


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
