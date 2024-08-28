const lang = document.documentElement.lang;
let docContent = {
    en: {
        subSlogans: [
            "Build trust with your customer", "Introduce yourself to the world", "Globalize your business",
            "Leave a lasting impression", "Impreent your image in people’s minds"
        ]
    }
};
docContent = docContent[lang];


document.querySelector('nav a[href="#faq"]').onclick = () => {
    setTimeout(() => { openFAQ(1) }, 900);
    setTimeout(animateServicesQA, 1300);
    function animateServicesQA() {
        document.querySelector('.s-faq .faq.services').animate(
            [
                { backgroundColor: '#00ca6590' },
                { backgroundColor: '#0000' },
            ],
            {
                duration: 1000, 
                easing: 'ease-in-out', 
                fill: 'both'
            }
        )
    }
}


function appendTextUntilFull() {
    const marquee = docContent.subSlogans;
    ['ms1', 'ms2', 'ms3'].forEach(id => {
        const container = document.querySelector(`.marquee-string.${id}`);
    
        let i = id === 'ms1' ? 0 : id === 'ms2' ? 2 : id === 'ms3' ? 4 : 0;
        do {
            const div = document.createElement('div');
            div.innerHTML = marquee[i];
            container.appendChild(div);
            container.innerHTML += '·';
            i = (i + 1) % marquee.length;  
        } while (container.offsetWidth < window.innerWidth + 500);
    });
}
appendTextUntilFull();
window.addEventListener('resize', appendTextUntilFull);


document.addEventListener('scrollend', () => {
    document.querySelectorAll('.s-hero .marquee-string').forEach(string => {
        let offset = window.getComputedStyle(string).translate;
        offset = offset === 'none' ? '0px' : offset;
        parsedOffset = parseFloat(offset.slice(0, offset.length - 2));

        let direction;
        if (parsedOffset === 0) {
            direction = Math.random() > .5 ? '-3em' : '3em';
        } else {
            direction = '0';
        }
        string.animate(
            [
                { translate: `${offset} 0` },
                { translate: `${direction} 0` }
            ],
            {
                duration: 300, 
                easing: 'ease-out', 
                fill: 'both'
            }
        );
    });
});


const sSteps = document.querySelector('.s-steps');
sSteps.querySelectorAll('.step').forEach(box => {
    box.onclick = e => {
        const targetFlameId = Math.random() > .5 ? 'left' : 'right';
        const targetFlame = sSteps.querySelector(`.bg-img.${targetFlameId}`);
        const rect = targetFlame.getBoundingClientRect();
        const posX = targetFlameId === 'left' ? 0 : window.innerWidth;
        const posY = rect.top + (rect.height / 2);
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        const middleX = (posX + mouseX) / 2;
        const middleY =  (posY + mouseY) / 2;

        sendParticle(20);

        function sendParticle(i) {
            const offsetAmt = Math.random() * 200;
            const yOffset = Math.random() * (offsetAmt - offsetAmt * -1) + offsetAmt * -1;
            const particle = document.createElement('div');
            const particleWidth = Math.random() * (10 - 5) + 5 + 'px';
            const particleOpacity = Math.random() * 5 + 5;
    
            particle.style.width = particleWidth;
            particle.style.opacity = particleOpacity;
            particle.style.top = posY + 'px';
            particle.style.left = posX + 'px';
            particle.classList.add('particle');

            sSteps.appendChild(particle);

            particle.animate(
                [
                    { opacity: 1, top: posY + 'px', left: posX + 'px' },
                    { opacity: 1, top: middleY + yOffset + 'px', left: middleX + 'px' },
                    { opacity: 0, display: 'none', top: mouseY + 'px', left: mouseX + 'px' }
                ],
                {
                    duration: 300, 
                    easing: 'ease-out', 
                    fill: 'both'
                }
            );
            targetFlame.animate(
                [
                    { opacity: 1 },
                    { opacity: .7 },
                    { opacity: 1 } 
                ],
                {
                    duration: 500, 
                    easing: 'ease-out', 
                    fill: 'both'
                }
            )
            
            if (i < 0) return;
            setTimeout(() => {
                sendParticle(i - 1);
            }, Math.random() * (50 - 10) + 10);
        }
        
        // setTimeout(() => {
        //     sSteps.querySelectorAll('.particle').forEach(particle => {
        //         sSteps.removeChild(particle);
        //     });
        // }, 300);
    }
});


function typeInSwapSpans(i=0, j=0) {
    const span = document.querySelector('.s-contact .section-subheading span');

    if (i >= docContent.subSlogans.length) i = 0;

    if (j >= docContent.subSlogans[i].length) {
        setTimeout(() => {
            span.textContent = '';
            typeInSwapSpans(i + 1, 0);
        }, 3000);
        return;
    }
    span.textContent += docContent.subSlogans[i][j];

    setTimeout(() => { typeInSwapSpans(i, j + 1) }, 100);
}
typeInSwapSpans();


const contactOptions = document.querySelectorAll('.s-contact form .contacts-select .option');
contactOptions.forEach(option => {
    option.querySelector('label').onmouseover = () => {
        option.style.opacity = .85;
    }
    option.querySelector('label').onmouseleave = () => {
        if (!option.classList.contains('disabled')) return;
        option.style.opacity = .5;
    }
    option.onclick = () => {
        if (!option.classList.contains('disabled')) return;

        contactOptions.forEach(option => {
            option.style.opacity = .5;
            option.classList.add('disabled');
            option.querySelector('input').value = '';
            option.querySelector('input').blur();
            option.querySelector('input').disabled = true;
        });

        option.style.opacity = 1;
        option.classList.remove('disabled');
        option.querySelector('input').removeAttribute('disabled');
        option.querySelector('input').focus();
    }
});


// window.onresize = () => { setAQDefaultHeight() }
const FAQs = document.querySelector('.s-faq').querySelectorAll('.faq');
function setFAQDefaults() {
    FAQs.forEach((faq, i) => {
        faq.dataset.height1 = window.getComputedStyle(faq).height;
        faq.dataset.height2 = window.getComputedStyle(faq.querySelector('.q')).height;
        faq.style.height = window.getComputedStyle(faq.querySelector('.q')).height;
        faq.dataset.faqid = i;
    });

}
setFAQDefaults();

FAQs.forEach(faq => {
    faq.onclick = () => {
        if (faq.classList.contains('open')) openFAQ(-1);
        else openFAQ(faq.dataset.faqid);
    }
});

function openFAQ(id) {
    FAQs.forEach(faq => {
        if (!faq.classList.contains('open')) return;
        faq.classList.remove('open');
        faq.querySelector('span').textContent = '+';
        faq.animate(
            [
                { height: faq.dataset.height1 },
                { height: faq.dataset.height2 }
            ],
            {
                duration: 200, 
                easing: 'ease-out', 
                fill: 'both'
            }
        );
    });

    FAQs[id].classList.add('open');
    FAQs[id].querySelector('span').textContent = '-';
    FAQs[id].animate(
        [
            { height: FAQs[id].dataset.height2 },
            { height: FAQs[id].dataset.height1 }
        ],
        {
            duration: 100, 
            easing: 'ease-out', 
            fill: 'both'
        }
    );
}