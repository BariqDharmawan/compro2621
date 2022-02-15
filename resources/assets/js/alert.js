import Swal from 'sweetalert2'

const btnRemoves = document.querySelectorAll('.btn-remove')
btnRemoves.forEach(btnRemove => {
    const titlePopup = btnRemove.dataset.titlePopup

    btnRemove.closest('form').addEventListener('submit', function (bariq) {
        bariq.preventDefault()

        Swal.fire({
            title: titlePopup,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire('Terhapus!', 'Fitur telah berhasil dihapus', 'success')
              this.submit()
            }
        })
    })
})
