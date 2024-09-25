// Fungsi untuk menampilkan preloader di halaman publik
function showLoader() {
    $('.loader-bg').fadeIn();
}

// Fungsi untuk menyembunyikan preloader di halaman publik
function hideLoader() {
    $('.loader-bg').fadeOut();
}

// Tampilkan preloader di halaman publik saat event load dimulai
showLoader();

// Gunakan event load untuk menyembunyikan preloader di halaman publik setelah selesai loading
window.addEventListener('load', function() {
    hideLoader();
});
