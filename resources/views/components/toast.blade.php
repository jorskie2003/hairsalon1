<div>
@if(session()->has('flasher'))
    <script>
        toastr.success("{{ session('flasher') }}");
    </script>
@endif
</div>