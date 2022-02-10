const fileInput = document.getElementById('upload');
if (fileInput) {
    fileInput.addEventListener('change', function () {
        const filename = fileInput.files[0].name;
        const labelInput = this.previousElementSibling

        if (this.value) {
            labelInput.textContent = filename
        }
        else {
            labelInput.textContent = this.dataset.text
        }
    })
}
