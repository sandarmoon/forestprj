<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Themetreasure</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('backend/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('backend/vendors/flag-icon-css/css/flag-icon.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/jquery-bar-rating/fontawesome-stars-o.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/jquery-bar-rating/fontawesome-stars.css')}}">
  <!-- End plugin css for this page -->
  {{-- select2 --}}
  <link rel="stylesheet" href="{{asset('backend/vendors/select2/select2.min.css')}}">

  <link rel="stylesheet" href="{{asset('backend/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('frontend/assets/logo/logo_transparent.png')}}" />

  {{-- datatable --}}
  <link rel="stylesheet" type="text/css" href="{{asset('backend/datatable/datatables.min.css')}}"/>


</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a href="{{route('dashboard')}}">
          <img src="{{asset('frontend/assets/logo/logo_transparent.png')}}" alt="" width="60px" class="mt-2">
        </a>
        <a class="navbar-brand" href="{{route('dashboard')}}">
          <img src="{{asset('frontend/assets/logo/logo_text_white.png')}}" alt="" class="img-fluid d-xl-inline-block d-lg-inline-block d-md-inline-block d-sm-none d-none">
          
        </a>
        
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            
          <li class="nav-item dropdown d-flex">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="icon-air-play mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{asset('backend/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">               
                  <i class="icon-head"></i> Profile
              </a>
              <a class="dropdown-item preview-item">
                  <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="{{asset('backend/images/faces/face28.png')}}">
          </div>
          <div class="user-name">
              Admin
          </div>
          <div class="user-designation">
              Admin
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item {{ Request::segment(1) === 'dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="{{route('dashboard')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item {{ Request::segment(1) === 'country' ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="{{route('country.index')}}">
              <i class="icon-flag menu-icon"></i>
              <span class="menu-title">Country</span>
              
            </a>
            
          </li>


          <li class="nav-item {{ Request::segment(1) === 'browser' ? 'active' : '' }}">
            <a class="nav-link" href="{{route('browser.index')}}">
              <i class="icon-globe menu-icon"></i>
              <span class="menu-title">Browser</span>
            </a>
          </li>

          <li class="nav-item {{ Request::segment(1) === 'language' ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="{{route('country.index')}}">
              <i class="icon-flag menu-icon"></i>
              <span class="menu-title">Language</span>
              
            </a>
            
          </li>

          <li class="nav-item {{ Request::segment(1) === 'category' ? 'active' : '' }}">
            <a class="nav-link" href="{{route('category.index')}}">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>

          <li class="nav-item {{ Request::segment(1) === 'subcategory' ? 'active' : '' }}">
            <a class="nav-link" href="{{route('subcategory.index')}}">
              <i class="icon-paper-stack menu-icon"></i>
              <span class="menu-title">Subcategory</span>
            </a>
          </li>

          <li class="nav-item {{ Request::segment(1) === 'kind' ? 'active' : '' }}">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="icon-server menu-icon"></i>
              <span class="menu-title">Kind</span>
            </a>
          </li>

          <li class="nav-item {{ Request::segment(1) === 'item' ? 'active' : '' }}">
            <a class="nav-link" href="pages/icons/feather-icons.html">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">item</span>
            </a>
          </li>

          <li class="nav-item {{ Request::segment(1) === 'author' ? 'active' : '' }}">
            <a class="nav-link" href="pages/icons/feather-icons.html">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Author</span>
            </a>
          </li>

          <li class="nav-item {{ Request::segment(1) === 'user' ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#auth" >
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
              
            </a>
            {{-- <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div> --}}
          </li>
          
        </ul>
      </nav>
      <div class="main-panel">
        <div class="content-wrapper">

      <!-- partial -->
      @yield('content')
      <!-- main-panel ends -->
        </div>

       <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">ThemeTreasure © 2021</span>
            {{-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span> --}}
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{asset('backend/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('backend/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('backend/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{asset('backend/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  {{-- select 2 --}}
  <script src="{{asset('backend/vendors/select2/select2.min.js')}}"></script>
  <script src="{{asset('backend/js/select2.js')}}"></script>

  {{-- datatable --}}
  <script type="text/javascript" src="{{asset('backend/datatable/datatables.min.js')}}"></script>

  @yield('script')

</body>

</html>

