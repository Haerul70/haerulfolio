 function confirmLogout(event) {
        event.preventDefault(); // Menghentikan default action dari event

        Swal.fire({
            icon: 'warning',
            title: 'Anda Akan Keluar!',
            text: 'Apakah Anda yakin ingin keluar dari sistem ?',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal',
            customClass: {
                    title: 'text-danger', // Menambahkan class CSS untuk warna hitam
                    content: 'text-dark', // Untuk teks konten
                }
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit(); // Mengirimkan form logout
            }
        });
    }