
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('pageTitle')</title>

  <!-- General CSS Files -->

 <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}" >
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/css/components.css') }}">

  @yield('DynamicCss')
</head>

<body>
    @yield('content')


  @yield('mainContentPopup')
  <!-- General JS Scripts -->

  <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"  ></script>
  <script src="{{ asset('dashboard/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  @yield('DynamicScript')
  <!-- Template JS File -->
  
  <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
  <script src="{{ asset('dashboard/js/custom.js') }}"></script>
  <!-- Page Specific JS File -->      

</body>
</html>
