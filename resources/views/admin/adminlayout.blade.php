<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Quản Lý</title>

  <link rel="stylesheet" href="{{asset('static/css/bootstrap.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="{{asset('static/css/chart.min.css')}}">
  <link rel="stylesheet" href="{{asset('static/css/perfect-scrollbar.css')}}">
  <link rel="stylesheet" href="{{asset('static/css/app.css')}}">
  <link rel="shortcut icon" href="{{asset('static/img/favicon.svg')}}">
  
  <style>
    .activeCurrentPage {
      background-color: #007bff;
      color: #fff;
    }

    tr:hover {
      background-color: #f8f8f8;
    }
  </style>
</head>
<body>
<div id="app"><!--Main content-->
<div id="sidebar" class='active'><!--sidebar-->
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <a href=" /admin " class='sidebar-link'>
                <img th:src=" /img/logo.svg " alt="" srcset=""> </a>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class='sidebar-title'>Quản lý dữ liệu</li>
                <li class="sidebar-item active ">
                    <a href=" /admin/users " class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Người dùng</span>
                    </a>
                </li>

                <li class="sidebar-item active ">
                    <a href=" /admin/cities " class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Thành phố</span>
                    </a>
                </li>

                <li class="sidebar-item active ">
                    <a href=" /admin/vehicles " class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Phương tiện</span>
                    </a>
                </li>

                <li class="sidebar-item active ">
                    <a href=" /admin/seats " class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Ghế ngồi</span>
                    </a>
                </li>

                <li class="sidebar-item active ">
                    <a href=" /admin/routes " class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Tuyến đi</span>
                    </a>
                </li>

                <li class="sidebar-item active ">
                    <a href=" /admin/trips " class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Chuyến xe</span>
                    </a>
                </li>


                <li class="sidebar-item active ">
                    <a href=" /admin/bookings " class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Hóa đơn</span>
                    </a>
                </li>

                <li class="sidebar-item active ">
                    <a href=" /admin/booking-details " class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Chi tiết hóa đơn</span>
                    </a>
                </li>

                <li class="sidebar-item active ">
                    <a href=" /admin/seat-reservation " class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Ghế đặt trước</span>
                    </a>
                </li>

                <li class="sidebar-item active ">
                    <a href=" /admin/transit " class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Xe trung chuyển</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
  
  <div id="main"><!--Content id-->
  <nav class="navbar navbar-header navbar-expand navbar-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
            <li class="dropdown" style="float: right">
                <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="avatar me-1">
                        <img src="/img/i1.jpg" alt="" srcset="">
                    </div>
                    <div class="d-none d-md-block d-lg-inline-block">Xin chào, <span ></span>
                    </div>

                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="/home"><i data-feather="user"></i> Trang người dùng</a>
                    <a class="dropdown-item" href="https://www.facebook.com/profile.php?id=100092738989085"><i
                            data-feather="user"></i> Facebook</a>
                    <!-- <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>-->
                    <a class="dropdown-item"
                       href="https://business.facebook.com/latest/inbox/all?asset_id=110577855381273&nav_ref=bizweb_landing_fb_login_button"><i
                            data-feather="settings"></i>
                        Tin nhắn</a>
                    <a class="dropdown-item"
                       href="/admin/contacts"><i
                            data-feather="settings"></i>
                        Liên hệ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" th:href="@{/logout}"><i data-feather="log-out"></i> Đăng
                        xuất</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
    
    <div><!--dynamic content-->
    @yield('content')
    </div>
  </div>
</div>


<script src="{{asset('static/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('static/js/chart.min.js')}}"></script>
<script src="{{asset('static/js/apexcharts.min.js')}}"></script>
<script src="{{asset('static/js/dashboard.js')}}"></script>
<script src="{{asset('static/js/feather.min.js')}}"></script>
<script src="{{asset('static/js/app.js')}}"></script>
<script src="{{asset('static/js/main.js')}}"></script>

</body>
</html>