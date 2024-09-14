 function confirmLogout(event) {
        event.preventDefault(); // Menghentikan default action dari event

        Swal.fire({
            title: 'Anda Akan Keluar!',
            text: 'Apakah Anda yakin ingin keluar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit(); // Mengirimkan form logout
            }
        });
    }