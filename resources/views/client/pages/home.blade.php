@extends('/client/hlayout')
@section('content')
<!-- Start popular-destination Area -->
<section class="popular-destination-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Các điểm đến phổ biến</h1>
					<p>
						Gợi ý cho bạn địa điểm du lịch được ưa thích nhất.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4" th:each="city:${topDestinationCities}">
				<div class="single-destination relative">
					<div class="thumb relative">
						<!-- <div class="overlay overlay-bg"></div>
								<img alt="hình thành phố" style="width: 700px;height: 350px;" class="img-fluid"
									 th:src="@{${city.cityImagePath}}"> -->
					</div>
					<div class="desc">
						<!-- <a th:href="'/home/find-destination-city/'+${city.id}" class="price-btn">Đặt vé ngay</a>
								<h4 style="font-size: 40px" th:text="${city.name}"></h4>
								<p></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End popular-destination Area -->
<section>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Chúng tôi luôn cung cấp chuyến đi với giá cả hợp lý</h1>
					<p>
						Gợi ý cho bạn chuyến xe phổ biến tại Travelista.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4" th:each="trip: ${topTripList}">
				<div class="single-destination relative">
					<!-- <div class="thumb relative">
						<div class="overlay overlay-bg"></div>
						<img alt="hình thành phố" style="width: 700px;height: 350px;" class="img-fluid" th:src="@{${trip.route.startCity.cityImagePath}}">
					</div>
					<div class="desc">
						<a th:href="@{'/booking-popular-trip/'+${trip.id} }" class="price-btn">[[${#numbers.formatDecimal(trip.price,
								0, 'COMMA', 0, 'POINT') +
								'đ'}]]</a>
							<h4 th:text="${trip.route.startCity.name} + ' ➝ ' + ${trip.route.endCity.name}"></h4>
							<p></p>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about-info-area section-gap">
	<div style="margin-right: 50px; margin-left: 50px">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4206640295474!2d106.78252777412524!3d10.85557478929801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175276e7ea103df%3A0xb6cf10bb7d719327!2sThu%20Duc%20Campus%20Hutech%20khu%20E!5e0!3m2!1svi!2s!4v1685077712663!5m2!1svi!2s" width="100%" height="445" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

</section>
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 d-flex flex-column address-wrap">
				<div class="single-contact-address d-flex flex-row">
					<div class="icon" style="margin: 0 20px;">
						<i style="font-size: 30px;" class="fa-solid fa-house"></i>
					</div>
					<div class="contact-details">
						<h5>Hutech, Khu CNC Quận 9</h5>
						<p>
							XL Hà Nội, Phường Tân Phú, Thủ Đức.
						</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon" style="margin: 0 20px;">
						<i style="font-size: 30px;" class="fa-solid fa-phone"></i>
					</div>
					<div class="contact-details">
						<h5>+84 345712873</h5>
						<p>Thứ 2 đến Chủ nhật từ 7am đến 9am</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon" style="margin: 0 20px;">
						<i style="font-size: 30px;" class="fa-solid fa-envelope"></i>
					</div>
					<div class="contact-details">
						<h5>nghbang1909@gmail.com</h5>
						<p>Đặt bất kỳ câu hỏi nào cho chúng tôi.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<form class="form-area contact-form text-right" action="/home/submit_contact" method="post">
					<div class="row">
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Nhập tên liên hệ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tên liên hệ'" class="common-input mb-20 form-control" required="" type="text">

							<input name="email" placeholder="Nhập địa chỉ email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập địa chỉ email'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Tiêu đề cho thư này" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea form-control" name="message" placeholder="Nhập nội dung thư" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập nội dung thư'" required=""></textarea>
						</div>
						<div class="col-lg-12">
							<div class="alert-msg" style="text-align: left;"></div>
							<button class="genric-btn primary" style="float: right;">Gửi thư</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection