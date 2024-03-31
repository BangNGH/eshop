<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Travel</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{asset('static/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('static/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('static/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('static/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('static/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('static/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('static/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('static/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('static/css/main.css')}}">
</head>

<body>


	<!-- #header -->
	<header id="header">
	<div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                        <ul class="list-inline">
                            <li sec:authorize="isAuthenticated()">
                                <a class="btn btn-outline-danger text-white" href="logout">Đăng xuất</a>
                                <a style="color: snow;">Xin chào, <span style="font-weight: bold"></span></a>
                            </li>
                            <li>
                                <a class="btn btn-outline-primary text-white" href="login">Đăng nhập</a>
                                <a style="color: snow;">Người dùng ẩn danh</span></a>
                            </li>
                        </ul>
                 </div>
                </div>
            </div>
        </div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="{{URL::to('/home')}}"><img src="{{('static/img/logo.png')}}" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="/home">Trang chủ</a></li>
                    <li><a href="/about">Về chúng tôi</a></li>
                    <li><a href="/users/tickets/basket">Hóa đơn</a></li>
                    <li><a href="/users/tickets/manage-receipts">Vé Của Tôi</a></li>
                    <li><a href="/users/manage-account/edit/">Chỉnh sửa tài khoản</a>
                    </li>
                    <li><a th:href="/home/instruct">Cách đặt vé</a></li>
                    <li ><a th:href="/admin">Trang quản trị</a></li>
                </ul>
            </nav>
			</div>
		</div>
	</header>
	<!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div
                class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 banner-left">
                <h6 class="text-white">Đồng hành cùng bạn trên mọi chuyến đi</h6>
                <h1 class="text-white">Travelista</h1>
                <p class="text-white">Đặt vé chưa bao giờ dễ đến thế. Chúng tôi cung cấp dịch vụ khiến cho bạn thoải mái
                    nhất trong từng chuyến đi.</p>
                <a href="/home/book-now" class="primary-btn text-uppercase">Đặt Vé Ngay</a>
            </div>
            <div class="col-lg-4 col-md-6 banner-right">
                <div class="tab-content" id="myTabContent">
                    <div style="margin-top: 70px;" class="tab-pane fade show active" id="flight" role="tabpanel"
                         aria-labelledby="flight-tab">
                      
                
                        <form class="form-wrap" th:action="home/find" method="post" id="tripForm">
                            <div class="form-group row">
                                <label class="col-form-label col-sm-3">Loại vé:</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="round-trip" id="one-way"
                                               value="false" checked>
                                        <label class="form-check-label" for="one-way">Một chiều</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="round-trip" id="round-trip"
                                               value="true" >
                                        <label class="form-check-label" for="round-trip">Khứ hồi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-3">Điểm đi:</label>
                                <div class="col-sm-9">
                                    <select class="form-control" required id="startCity" name="startCity"
                                            style="height: 45px;">
                                        <option value=""></option>
                                        <!-- <option th:each="city : ${cities}" th:value="${city.id}"
                                                th:text="${city.name}"></option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-3">Điểm đến:</label>
                                <div class="col-sm-9">
                                    <select class="form-control" required id="endCity" name="endCity"
                                            style="height: 45px;">
                                        <option value=""></option>
                                        <!-- <option th:each="city : ${cities}" th:value="${city.id}"
                                                th:text="${city.name}"></option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-3">Ngày đi :</label>
                                <div class="col-sm-9">
                                    <input type="date" id="startTime" class="form-control" required name="startTime">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-3">Ngày về:</label>
                                <div class="col-sm-9">
                                    <input disabled type="date" class="form-control" style="display: none;" id="endTime" name="endTime">
                                </div>
                            </div>
                            <button type="submit" class="primary-btn text-uppercase">Tìm chuyến xe</button>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

	@yield('content')

	<script src="{{asset('static/js/home_form.js')}}"></script>
	<script src="{{asset('static/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('static/js/popper.min.js')}}"></script>
	<script src="{{asset('static/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('static/js/jquery-ui.js')}}"></script>
	<script src="{{asset('static/js/easing.min.js')}}"></script>
	<script src="{{asset('static/js/hoverIntent.js')}}"></script>
	<script src="{{asset('static/js/superfish.min.js')}}"></script>
	<script src="{{asset('static/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('static/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('static/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('static/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('static/js/main.js')}}"></script>
</body>

</html>