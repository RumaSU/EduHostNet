const btnDelAcc = document.getElementById('btnShdelAcc');
const btnDelAccMobile = document.getElementById('btnShdelAcc-mobile');
const clsDelAcc = document.getElementById('clsPopFormDel');
const frmDelAcc = document.getElementById('popFormDelAcc');
const ovFrnDelAcc = document.getElementById('ovSHFrm');
let shSFrm = "shFormDel";
let hdSFrm = "hideFormDel";

btnDelAcc.addEventListener('click', () => {
    frmDelAcc.classList.toggle(shSFrm);
    frmDelAcc.classList.toggle(hdSFrm);
    ovFrnDelAcc.classList.toggle('hidden');
    document.body.classList.toggle('overflow-hidden');
});
btnDelAccMobile.addEventListener('click', () => {
    frmDelAcc.classList.toggle(shSFrm);
    frmDelAcc.classList.toggle(hdSFrm);
    ovFrnDelAcc.classList.toggle('hidden');
    document.body.classList.toggle('overflow-hidden');
});
clsDelAcc.addEventListener('click', () => {
    frmDelAcc.classList.toggle(shSFrm);
    frmDelAcc.classList.toggle(hdSFrm);
    ovFrnDelAcc.classList.toggle('hidden');
    document.body.classList.toggle('overflow-hidden');
});
