<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AAA - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="{{asset('aaa-dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('aaa-dashboard/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('aaa-dashboard/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">
        <!-- NAVBAR -->
    @include('dashboard.includes.navbar')

    <div id="wrapper">
    <!-- Sidebar -->
    @include('dashboard.includes.sidebar')

    <div id="content-wrapper">
        @yield('content')
    </div>
</div>
  <!-- Logout Modal-->
   @include('dashboard.includes.logout-model')

<!-- SCRIPTS --> 
@include('dashboard.includes.scripts')

</body>

</html>
