const btnEdtImage = document.getElementById('icEditImageUser');
const frm_inpEdImg = document.getElementById('imageUser');
const btnSvImg = document.getElementById('saveEditImage');
const btnSvImgMobile = document.getElementById('saveEditImageMobile');
const userImages = document.getElementById('userImage');

btnEdtImage.addEventListener('click', () => {
    frm_inpEdImg.click();
});

frm_inpEdImg.addEventListener('change', () => {
    btnSvImg.classList.remove('hidden');
    btnSvImgMobile.classList.remove('hidden');
    
    let file = frm_inpEdImg.files[0];
    if(file) {
        var img = new Image();
        img.src = URL.createObjectURL(file);
        
        img.onerror = function() {
            alert("Gagal memuat gambar. Pastikan file yang Anda pilih adalah gambar yang valid.");
            preview.src = '';
            frm_inpEdImg.value = '';
        }
        
        img.onload = function() {
            userImages.src = URL.createObjectURL(file);
            frm_inpEdImg.value = img;
            var form = imgInput.closest('form');
            if (form) {
                return validateAndSubmit(form);
            }
        }
        
    }
});

btnSvImg.addEventListener('click', () => {
    saveImage();
})
btnSvImgMobile.addEventListener('click', () => {
    saveImage();
})

function saveImage() {
    const sbImage = document.getElementById('submitImageUser');
    sbImage.click();
}