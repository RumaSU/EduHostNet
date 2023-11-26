const navWrapMenu = document.getElementById("navMobsWrapper");
const itmNavWrapMobile1 = document.getElementById("itmNavWrapMobile-1");
const itmNavWrapMobile2 = document.getElementById("itmNavWrapMobile-2");
const itmNavWrapMobile3 = document.getElementById("itmNavWrapMobile-3");

function openNavWrapperMobile() {
    navWrapMenu.classList.remove('invisible', 'opacity-0');
    navWrapMenu.style.transition = "all .1s ease-in-out";
    itmNavWrapMobile1.style.left = "0";
    itmNavWrapMobile2.style.left = "0";
    itmNavWrapMobile3.style.left = "0";
}
function closeNavWrapperMobile() {
    navWrapMenu.classList.add('invisible', 'opacity-0');
    navWrapMenu.style.transition = "all .6s ease-in-out";
    itmNavWrapMobile1.style.left = "200%";
    itmNavWrapMobile2.style.left = "200%";
    itmNavWrapMobile3.style.left = "200%";
}