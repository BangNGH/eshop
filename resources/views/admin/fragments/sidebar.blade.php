@extends('admin.adminlayout')
@section('sidebar')
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
@endsection
