const button = document.getElementById('frm-adCn');
const buttonP = button.querySelector('p');
const formContent = document.getElementById('frm-shCn');
const clsContent = document.getElementById('frm-clsCn');

button.addEventListener('click', () => {
    formContent.classList.toggle('hidden');
    button.parentElement.classList.add('hidden');
    // button.querySelector('i').classList.toggle('bi-plus-circle');
    // button.querySelector('i').classList.toggle('bi-x-circle');
    // if (buttonP.innerHTML === "Close") {
    //     buttonP.innerHTML = "Tambah";
    // } else {
    //     buttonP.innerHTML = "Close";
    // }
});
clsContent.addEventListener('click', () => {
    formContent.classList.add('hidden');
    button.parentElement.classList.remove('hidden');
    // button.querySelector('i').classList.toggle('bi-plus-circle');
    // button.querySelector('i').classList.toggle('bi-x-circle');
    // if (buttonP.innerHTML === "Close") {
    //     buttonP.innerHTML = "Tambah";
    // } else {
    //     buttonP.innerHTML = "Close";
    // }
    // button.querySelector('i').classList.remove('bi-plus-circle');
    // button.querySelector('i').classList.add('bi-x-circle');
});

function autoSize(textarea) {
    textarea.style.height = 'auto';
    textarea.style.height = textarea.scrollHeight + 'px';
    if (parseInt(textarea.style.height) >= 24 * 16) { // Ubah 18rem menjadi px
        textarea.classList.remove('overflow-hidden');
    } else {
        textarea.classList.add('overflow-hidden');
    }
}