<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<!--Datatables-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.semanticui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>
<!--End Datatables -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- SwitcAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<!-- Text Edior -->
{{-- <script src="https://cdn.tiny.cloud/1/6mm7k4gydbgnvdtih39rsumjrw34oc1i0y23ec07bgtt226f/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- plugins:js -->
<script src="{{ asset('assets/admin/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('assets/admin/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets/admin/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/admin/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/admin/js/misc.js') }}"></script>
<script src="{{ asset('assets/admin/js/settings.js') }}"></script>
<script src="{{ asset('assets/admin/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/admin/js/datatables.js') }}"></script>
<!-- End custom js for this page -->

<script>
    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Terjadi Kesalahan!',
            text: '{{ addslashes($errors->first()) }}',
            confirmButtonText: 'OK',
            customClass: {
                title: 'text-danger', // Menambahkan class CSS untuk warna hitam
                content: 'text-dark', // Untuk teks konten
            }
        });
    @endif

    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ addslashes(session('success')) }}',
            confirmButtonText: 'OK',
            customClass: {
                title: 'text-success', // Menambahkan class CSS untuk warna hitam
                content: 'text-dark', // Untuk teks konten
            }
        });
    @endif
</script>


<script src="{{ asset('assets/admin/js/logout-confirmation.js') }}"></script>
{{-- <script src="{{ asset('assets/admin/js/chart-tracker.js') }}"></script> --}}
<script src="{{ asset('assets/admin/js/loader.js') }}"></script>
{{-- <script src="{{ asset('assets/admin/js/text-editor.js') }}"></script> --}}
<!-- Initialize the editor. -->
