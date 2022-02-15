import Quill from 'Quill';

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

const plainTextarea = document.querySelectorAll('.wysiwyg')
plainTextarea.forEach(textarea => {
    const hiddenInput = textarea.nextElementSibling
    const editor = new Quill(`#${textarea.id}`, {
        height: '300px',
        modules: {
          toolbar: [
            [{ header: [1, 2, false] }],
            ['bold', 'italic', 'underline'],
            ['image']
          ]
        },
        placeholder: textarea.dataset.placeholder,
        theme: 'snow'  // or 'bubble'
    });

    editor.root.style.height = textarea.dataset.height

    editor.on('text-change', function (eventName, ...args) {
        const getValue = editor.root.innerHTML
        hiddenInput.value = getValue

        if (getValue == '<p><br></p>') {
            hiddenInput.value = null
        }

        console.log(getValue)
    })
})
