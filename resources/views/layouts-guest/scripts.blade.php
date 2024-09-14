<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/guest/lib/typed/typed.min.js') }}"></script>
<script src="{{ asset('assets/guest/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/guest/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/guest/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/guest/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/guest/lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- SwitcAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('assets/guest/mail/jqBootstrapValidation.min.js') }}"></script>
<script src="{{ asset('assets/guest/mail/contact.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/guest/js/main.js') }}"></script>

<!-- Cek jika ada error -->
@if ($errors->any())
    <script>
        swal({
            title: "Terjadi Kesalahan!",
            text: "{{ $errors->first() }}",
            icon: "error",
            button: "OK",
        });
    </script>
@endif

@if (session('success'))
    <script>
        swal({
            title: "Berhasil!",
            text: "{{ session('success') }}",
            icon: "success",
            button: "OK",
        });
    </script>
@endif
