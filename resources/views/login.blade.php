@extends('authLayout')
@section('content')
				<div class="col-md-5 col-sm-12 mx-auto">
					<div class="card pt-4">
						<div class="card-body">
							<div class="text-center mb-5">
								<a href="/">
									<img src="{{asset('static/img/favicon.svg')}}" height="48" class='mb-4'>
								</a>
								<h3>Đăng nhập</h3>
								<p>Chào mừng bạn đến với trang đăng nhập.</p>
							</div>
							@include('alert')
						
							<form action="login/store" method="post">
						

								<div class="form-group position-relative has-icon-left">
									<label for="username">Email</label>
									<div class="position-relative">
										<input type="text" name="email" required class="form-control" id="username">
										<div class="form-control-icon">
											<i class="fa-regular fa-user"></i>
										</div>
									</div>
								</div>
								<div class="form-group position-relative has-icon-left">
									<div class="clearfix">
										<label for="password">Mật khẩu</label> <a style="float: right;"
																				  href="/forgot-password"
																				  class='float-end'> <small>Quên mật
										khẩu?</small>
									</a>
									</div>
									<div class="position-relative">
										<input type="password" name="password" required minlength="6" maxlength="20" class="form-control" id="password">
										<div class="form-control-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
												 stroke-linecap="round" stroke-linejoin="round"
												 class="feather feather-lock">
												<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
												<path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
											</svg>
										</div>
									</div>
								</div>

								<div class='form-check clearfix my-4'>
									<div class="checkbox float-start">
										<input type="checkbox" id="checkbox1" class='form-check-input' name="remember">
										<label for="checkbox1">Lưu tài khoản</label>
									</div>
									<div class="float-end">
										<a href="/eshop/public/registry">Chưa có tài khoản? Đăng ký tại đây</a>
									</div>
								</div>
								<div class="clearfix">
									<button style="float: right;width: 100%" type="submit"
											class="btn btn-primary float-end">Đăng nhập
									</button>
								</div>
								@csrf
							</form>
							<div class="divider">
								<div class="divider-text">HOẶC</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<button class="btn btn-block mb-2 btn-primary"
											style="background-color:#be4136;">
										<a href="/oauth2/authorization/google" style="color:white">
											<i class="fab fa-google-plus-g"></i>
											Đăng nhập Google
										</a>
									</button>
								</div>
								<div class="col-sm-6">
									<button class="btn btn-block mb-2 btn-secondary"
											style="background-color:#3f4750;">
										<a href="/oauth2/authorization/github" style="color:white"><i
												class="fa-brands fa-github"></i>Đăng nhập Gihub</a>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
		@endsection
