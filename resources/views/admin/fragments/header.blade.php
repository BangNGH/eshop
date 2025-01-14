@extends('admin.adminlayout')
@section('header')
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
@endsection