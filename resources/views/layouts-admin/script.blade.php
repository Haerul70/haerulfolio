<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>

<script src="https://cdn.datatables.net/2.1.5/js/dataTables.jqueryui.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
</script>


<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/admin/js/argon-dashboard.min.js?v=2.0.4') }}"></script>

<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- SwitcAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script src="{{ asset('assets/admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/chartjs.min.js') }}"></script>

<script src="{{ asset('assets/admin/js/cart-line.js') }}"></script>
<script src="{{ asset('assets/admin/js/sidenav-scrollbar.js') }}"></script>
<script src="{{ asset('assets/admin/js/datatables.js') }}"></script>

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
<script src="{{ asset('assets/admin/js/logout-confirmation.js') }}"></script>

<!-- Initialize the editor. -->
<script>
    new FroalaEditor('textarea');
</script>
