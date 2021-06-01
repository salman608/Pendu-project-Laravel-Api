<html lang="en">

<head>
    <title>Pendu || Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/style.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/responsive.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/custom.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- OwlCarouse-2.3.4 CSS  -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/images/ajax-loader.gif')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}"/>
    {{-- Multi select css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src='{{asset('frontend/assets/js/jquery3.2.1.min.js')}}'></script>




</head>

@include('User.Partial._Header')
@yield('user_content')
@include('User.Partial._Footer')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<!-- fontawesome -->
<script src="{{asset('frontend/assets/js/7b2bf5dc68.js')}}"></script>
<!-- Main/Index js -->
<script src="{{asset('frontend')}}/assets/js/main.js"></script>
<!-- OwlCarouse-2.3.4 -->
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>

<!-- multi select js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>



<!-- aleart message show -->
  <script src="{{asset('frontend/assets/js/sweetalert.min.js')}}" charset="utf-8"></script>
  <script src="{{asset('frontend/assets/js/bootbox.min.js')}}" charset="utf-8"></script>
  <script src="{{asset('frontend/assets/js/custom.js')}}" charset="utf-8"></script>





  @if(Session::has('insert'))
    <script type="text/javascript">
      swal("Information was collected.","The information you provided was successfully added to our system...","success")
    </script>
  @endif
{{-- multi select function --}}
  <script>
      $(function () {
        $('.selectpicker').selectpicker();
       });
  </script>

</body>

</html>
