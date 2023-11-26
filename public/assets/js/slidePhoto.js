const imagesSC1 = document.querySelectorAll('.thLiImgSC-1 .images-container img');
const imagesSC2 = document.querySelectorAll('.thLiImgSC-2 .images-container img');
const contentSC1 = document.querySelectorAll('.descLiImgSC-1 .liContentFromImage div');
let currentIndexSC1 = 0;
let currentIndexSC2 = 0;

const updateContent = () => {
    contentSC1.forEach((element, index) => {
        if (index === currentIndexSC1) {
            element.classList.remove('hidden');
        } else {
            element.classList.add('hidden');
        }
    });
};

document.getElementById('icLeChvSC-1').addEventListener('click', () => {
    iconClickLeftSection1();
    updateContent();
});

document.getElementById('icRiChvSC-1').addEventListener('click', () => {
    iconClickRightSection1();
    updateContent();
});

document.getElementById('icLeChvSC-2').addEventListener('click', () => {
    iconClickLeftSection2();
});

document.getElementById('icRiChvSC-2').addEventListener('click', () => {
    iconClickRightSection2();
});

function iconClickLeftSection1() {
    imagesSC1[currentIndexSC1].classList.remove('visible', 'opacity-100');
    imagesSC1[currentIndexSC1].classList.add('invisible', 'opacity-0');
    currentIndexSC1 = (currentIndexSC1 === 0) ? imagesSC1.length - 1 : currentIndexSC1 - 1;
    imagesSC1[currentIndexSC1].classList.remove('invisible', 'opacity-0');
    imagesSC1[currentIndexSC1].classList.add('visible', 'opacity-100');
}
function iconClickRightSection1() {
    imagesSC1[currentIndexSC1].classList.remove('visible', 'opacity-100');
    imagesSC1[currentIndexSC1].classList.add('invisible', 'opacity-0');
    currentIndexSC1 = (currentIndexSC1 === imagesSC1.length - 1) ? 0 : currentIndexSC1 + 1;
    imagesSC1[currentIndexSC1].classList.remove('invisible', 'opacity-0');
    imagesSC1[currentIndexSC1].classList.add('visible', 'opacity-100');
}

function iconClickLeftSection2() {
    imagesSC2[currentIndexSC2].classList.remove('visible', 'opacity-100');
    imagesSC2[currentIndexSC2].classList.add('invisible', 'opacity-0');
    currentIndexSC2 = (currentIndexSC2 === 0) ? imagesSC2.length - 1 : currentIndexSC2 - 1;
    imagesSC2[currentIndexSC2].classList.remove('invisible', 'opacity-0');
    imagesSC2[currentIndexSC2].classList.add('visible', 'opacity-100');
}
function iconClickRightSection2() {
    imagesSC2[currentIndexSC2].classList.remove('visible', 'opacity-100');
    imagesSC2[currentIndexSC2].classList.add('invisible', 'opacity-0');
    currentIndexSC2 = (currentIndexSC2 === imagesSC2.length - 1) ? 0 : currentIndexSC2 + 1;
    imagesSC2[currentIndexSC2].classList.remove('invisible', 'opacity-0');
    imagesSC2[currentIndexSC2].classList.add('visible', 'opacity-100');
}

updateContent();