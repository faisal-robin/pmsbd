
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/admin_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<!-- <script src="{{ asset('public/admin_asset/plugins/chart.js') }}/Chart.min.js') }}"></script> -->
<!-- Sparkline -->
<script src="{{ asset('public/admin_asset/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('public/admin_asset/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('public/admin_asset/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('public/admin_asset/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('public/admin_asset/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('public/admin_asset/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('public/admin_asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('public/admin_asset/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/admin_asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/admin_asset/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('public/admin_asset/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/admin_asset/dist/js/demo.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('public/admin_asset/plugins/select2/js/select2.full.min.js') }}"></script>



<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    
    //datatable
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $('#summernote').summernote({
    placeholder: 'Hello Bootstrap 4',
    tabsize: 2,
    height: 100,
    callbacks: {
      onImageUpload: function(files) {
        for (let i = 0; i < files.length; i++) {
          $.upload(files[i]);
        }
      }
    },
  });
  $('#summernote1').summernote({
    placeholder: 'Hello Bootstrap 4',
    tabsize: 2,
    height: 100,
    callbacks: {
      onImageUpload: function(files) {
        for (let i = 0; i < files.length; i++) {
          $.upload(files[i]);
        }
      }
    },
  });                         
  $.upload = function (file) {
    let out = new FormData();
    out.append('file', file, file.name);
    let image = file.name;
    console.log(file.name);
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      method: 'POST',
      url: '{{url('summurnote-image-upload')}}',
      contentType: false,
      cache: false,
      processData: false,
      data: out,
      success: function (img) {
        var image = $('<img>').attr('src', img);
        console.log(image);
        $('#summernote').summernote('insertNode', image[0]);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error(textStatus + " " + errorThrown);
      }
    });
  };

  $.upload = function (file) {
    let out = new FormData();
    out.append('file', file, file.name);
    let image = file.name;
    console.log(file.name);
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      method: 'POST',
      url: '{{url('summurnote-image-upload')}}',
      contentType: false,
      cache: false,
      processData: false,
      data: out,
      success: function (img) {
        var image = $('<img>').attr('src', img);
        console.log(image);
        $('#summernote1').summernote('insertNode', image[0]);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error(textStatus + " " + errorThrown);
      }
    });
  };
</script>

</body>
</html>