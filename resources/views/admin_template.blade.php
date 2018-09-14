<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset("/mockfire/img/favicon.png") }}" rel="icon">
  <link href="{{ asset("/mockfire/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  @if(Request::segment(5) == 'new_resource' || Request::segment(5) == 'resource')
  <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
  @else
  <link href="{{ asset("/mockfire/lib/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  @endif
  <!-- Libraries CSS Files -->
  <link href="{{ asset("/mockfire/lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/mockfire/lib/owlcarousel/assets/owl.theme.default.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/mockfire/lib/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/mockfire/lib/animate/animate.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/mockfire/lib/modal-video/css/modal-video.min.css") }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset("/mockfire/css/mdb.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("/mockfire/css/mdb.min.css") }}">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="{{ asset("/mockfire/lib/datatables/dataTables.bootstrap4.min.css") }}">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> -->
  <!-- <link rel="stylesheet" href="{{ asset("/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css") }}"> -->

  <!-- Main Stylesheet File -->
  <link href="{{ asset("/mockfire/css/style.css") }}" rel="stylesheet">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset("/bower_components/select2/dist/css/select2.min.css") }}">
  <style>
      .fa-2x{
        font-size:2em !important;
      }
      .fa-1x{
          font-size:1.25em !important;
      }
  </style>

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  
  <!-- #header -->
  @include('include.header')

  <!-- MAIN CONTENT -->
  @yield('content')
    @if(count($errors) > 0)>
      @foreach($errors->all() as $error)
        <script>swal("Failed!", "{{ $error }}", "error");</script>
      @endforeach
    @endif

  <!--==========================
    Footer
  ============================-->
  @include('include.footer')



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset("/mockfire/lib/jquery/jquery.min.js") }}"></script>
  <script src="{{ asset("/mockfire/lib/jquery/jquery-migrate.min.js") }}"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="{{ asset("/mockfire/lib/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- DataTables -->
  <!-- <script src="{{ asset("/bower_components/datatables.net/js/jquery.dataTables.min.js") }}"></script> -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  <script src="{{ asset("/mockfire/lib/superfish/hoverIntent.js") }}"></script>
  <script src="{{ asset("/mockfire/lib/superfish/superfish.min.js") }}"></script>
  <script src="{{ asset("/mockfire/lib/easing/easing.min.js") }}"></script>
  <script src="{{ asset("/mockfire/lib/modal-video/js/modal-video.js") }}"></script>
  <script src="{{ asset("/mockfire/lib/owlcarousel/owl.carousel.min.js") }}"></script>
  <script src="{{ asset("/mockfire/lib/wow/wow.min.js") }}"></script>
  <!-- Select2 -->
  <script src="{{ asset("/bower_components/select2/dist/js/select2.full.min.js") }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset("/mockfire/contactform/contactform.js") }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset("/mockfire/js/main.js") }}"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable({
      "language": {
        "search": "",
        "searchPlaceholder": "Pencarian"
      }
    });
  });

  function nospaces(t){
      if(t.value.match(/\s/g)){
        // alert('Sorry, you are not allowed to enter any spaces');
        t.value=t.value.replace(/\s/g,'');
      }
  }
  $(document).ready(function () {
    //Initialize Select2 Elements
    // $('.select2').fn.select2.defaults.set('theme', 'bootstrap')
    $('.select2').select2()
  })
</script>

<!-- <script type="text/javascript">
  $(document).on('click', '#modal-invite', function() {
      $('.modal-title').text('invite firends');
      $('#project').val($(this).data('projectid'));
      $('#modal-invite').modal('show');
  });
</script> -->

<script type="text/javascript">
  $(document).on('click', '.delete-resource', function(){
    swal({
      title: "Anda yakin?",
      text: "Ketika menghapusnya, anda tidak akan bisa meng-recover kembali",
      icon: "warning",
      buttons: {
        cancel: "Close",
        catch: {
          text: "OK",
          closeModal: false,
        },
      }
      // dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        var resource = $(this).data('resource')
        $.ajax({
          type: "POST",
          data: "resource_id=" + resource,
          url: '{{ url("/") }}/delete_resource',
          dataType: "json",
          success: function(data) {
            var response = data.result;
            if(response == true){
              swal("Data anda telah berhasil dihapus", {
                icon: "success",
              });
              $("#"+resource).remove()
            }else{
              swal("Something wrong, Your data is not deleted.");
            }
          }, error: function() {
            swal("Something wrong, Your data is not deleted.");
          }
        });        
      } else {
        swal("Your data is safe.");
      }
    });    
  });
</script>

<script type="text/javascript">
  $(document).on('click', '.delete-project', function(){
    swal({
      title: "Anda yakin?",
      text: "Data untuk project ini akan seluruhnya dihapus.",
      icon: "warning",
      buttons: {
        cancel: "Close",
        catch: {
          text: "OK",
          closeModal: false,
        },
      }
      // dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        var project = $(this).data('project')
        $.ajax({
          type: "POST",
          data: "project_id=" + project,
          url: '{{ url("/") }}/delete_project/proses',
          dataType: "json",
          success: function(data) {
            var response = data.result;
            var msg = data.msg;
            if(response == true){
              swal("Project anda telah berhasil dihapus", {
                icon: "success",
              });
              $("#"+project).remove()
            }else{
              swal(msg);
            }
          }, error: function() {
            swal("Something wrong, Your data is not deleted.");
          }
        });        
      } else {
        swal("Your project is safe.");
      }
    });    
  });
</script>
@if(Request::segment(5) === "new_resource")
  @include('js.addresource')
@elseif(Request::segment(5) === 'resource')
  @include('js.editresource')
@endif
</body>
</html>
