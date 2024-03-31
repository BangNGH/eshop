@extends('authLayout') @section('content')
<div class="col-md-7 col-sm-12 mx-auto">
    <div class="card pt-4">
        <div class="card-body">
            <div class="text-center mb-5">
                <a href="/">
                    <img
                        th:src="{{ asset('static/img/favicon.svg') }}"
                        height="48"
                        class="mb-4"
                    />
                </a>
                <h3>Đăng Ký</h3>
                <p>Vui lòng điền Thông tin vào mẫu bên dưới.</p>
            </div>
            <form action="/register/process_register" method="post">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="fullname">Họ tên</label>
                            <input
                                type="text"
                                id="fullname"
                                class="form-control"
                                required
                                name="fullname"
                            />
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="email-id-column">Email</label>
                            <input
                                type="email"
                                id="email-id-column"
                                required
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="address">Điện thoại</label>
                            <input
                                type="text"
                                pattern="0\d{8,9}"
                                maxlength="10"
                                title="Vui lòng nhập số điện thoại hợp lệ"
                                id="address"
                                name="address"
                                required
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="password-column">Mật khẩu</label>
                            <input
                                type="password"
                                id="password-column"
                                required
                                minlength="6"
                                maxlength="20"
                                class="form-control"
                            />
                        </div>
                    </div>
                </div>
                <a href="/login">Bạn đã có tài khoản? Đăng nhập.</a>
                <div class="clearfix">
                    <button
                        style="float: right; width: 100%; margin-top: 10px"
                        class="btn btn-primary float-end"
                        type="submit"
                    >
                        Đăng Ký
                    </button>
                </div>
            </form>

            <div class="divider">
                <div class="divider-text">HOẶC</div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <button
                        class="btn btn-block mb-2 btn-primary"
                        style="background-color: #be4136"
                    >
                        <a
                            href="/oauth2/authorization/google"
                            style="color: white"
                            ><i class="fab fa-google-plus-g"></i> Đăng nhập
                            Google</a
                        >
                    </button>
                </div>
                <div class="col-sm-6">
                    <button
                        class="btn btn-block mb-2 btn-secondary"
                        style="background-color: #3f4750"
                    >
                        <a
                            href="/oauth2/authorization/github"
                            style="color: white"
                            ><i class="fa-brands fa-github"></i> Đăng nhập
                            Gihub</a
                        >
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
