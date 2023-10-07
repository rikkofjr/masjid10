
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
  @livewireStyles()
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">
          <a href="index.html" class="navbar-brand sidebar-gone-hide">
            <img src="{{asset('/img/mosque.png')}}" width="50px" class="img-responsive" alt="" srcset="">
          </a>
        </div>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fas fa-home"></i><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.index')}}" class="nav-link"><i class="fas fa-book"></i><span>Dashboard</span></a>
            </li>
          </ul>
        </div>
      </nav>


      <!-- Main Content -->
      
      <div class="main-content">
        <section class="section" style="position:relative;z-index:1;">
          @yield('titleBar')

          @yield('mainContent')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design Template By <a href="https://getstisla.com/">Stisla</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  @yield('mainContentPopup')
  <!-- General JS Scripts -->

  <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
  <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"  ></script>
  <script src="{{ asset('dashboard/js/jquery.nicescroll.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('dashboard/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  @yield('DynamicScript')
  <!-- Template JS File -->
  
  <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
  <script src="{{ asset('dashboard/js/custom.js') }}"></script>
  <!-- Page Specific JS File -->

  

  @livewireScripts()
</body>
</html>
