function qs(selector) {
    return document.querySelector(selector);
}

function qsa(selector) {
    return document.querySelectorAll(selector);
}

document.addEventListener('DOMContentLoaded', function() {
    const uploadImage = qs('.form__upload-image input');

    if (uploadImage) {
        uploadImage.addEventListener('change', function(e) {
            const url = URL.createObjectURL(this.files[0]);
            const img = this.closest('.form__upload-image').querySelector('.form__uploaded-img');
            img.src = url;
            // img.classList.remove('hidden');
        });
    }

});