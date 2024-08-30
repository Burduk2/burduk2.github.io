// my own little util
class Random {
    static float = (x, y) => Math.random() * (y - x) + x;
    static int = (x, y) => Math.round(this.float(x, y));
    static shuffle = arr => arr.toSorted(_ => this.float(-.5, .5));
    static choice = arr => arr[this.int(0, arr.length - 1)];
    static str = (len, ch) => Array.from({ length: len }, _ => this.choice(ch)).join('');
}

function launchGus() {
    const imgElm = document.createElement('img');
    imgElm.classList.add('launched-gus');
    imgElm.src = '../static/img/gus-to-launch.png';
    imgElm.style.width = Random.int(100, 400) + 'px';
    document.body.appendChild(imgElm);

    const startPos = Random.choice(['25%', '50%', '75%']);
    const endPos = Random.choice(['25%', '50%', '75%']);
    const animationDuration = Random.int(1000, 2000);

    imgElm.animate([
        { top: startPos, left: 0, rotate: 0 },
        { top: endPos, left: '150%', rotate: 360 * Random.int(1, 4) + 'deg' }
    ], { duration: animationDuration, easing: 'ease-in-out', fill: 'both' });

    setTimeout(() => { document.body.removeChild(imgElm) }, animationDuration);
}


const form = document.querySelector('#form');
form.onsubmit = e => {
    e.preventDefault();
    launchGus();
    form.reset();
}