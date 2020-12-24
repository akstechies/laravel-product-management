    @if(session()->has('message'))
    <script> $( window ).on( "load", function() {
        toastr.success("{{ session()->get('message') }}")
      });</script>
      @elseif(session()->has('error'))
      <script> $( window ).on( "load", function() {
        toastr.error("{{ session()->get('error') }}")
      });</script>
@endif

<script>
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
</script>
