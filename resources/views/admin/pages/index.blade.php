@extends('admin.adminlayout')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Trang quản trị</h3>
    </div>
    <section class="section">
        <div class="row mb-2">
            <a href="/admin/bookings/bookings-today" style="text-decoration: none;" class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div style="align-items: center;flex-direction:column;max-height:70px;margin: 0 20px;" class='px-3 py-3 d-flex justify-content-between'>
                                <div>
                                    <h5 class='card-title'>Hôm nay</h5>
                                </div>
                                <div>
                                    <!-- <div class="card-right d-flex align-items-center">
                                            <p th:text="${#numbers.formatDecimal(revenueToday, 0, 'COMMA', 0, 'POINT') + 'đ'}"></p>
                                        </div> -->
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas4" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div style="align-items: center;flex-direction:column;max-height:70px;margin: 0 20px;" class='px-3 py-3 d-flex justify-content-between'>
                                <div>
                                    <h3 class='card-title'>Doanh thu</h3>
                                </div>
                                <div>
                                    <!-- <div class="card-right d-flex align-items-center">
                                            <p th:text="${#numbers.formatDecimal(revenue, 0, 'COMMA', 0, 'POINT') + 'đ'}"></p>
                                        </div> -->
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas2" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div style="flex-direction:column;max-height:70px" class='px-3 py-3 d-flex justify-content-between'>
                                <div>
                                    <a href="/admin/bill" style="text-decoration: none" class="card-right d-flex align-items-center">
                                        <h5 class='card-title' style="margin-right:15px;">Bill:</h5>
                                        <!-- <p th:text="${numberOfBill}"></p> -->
                                    </a>
                                </div>
                                <div>
                                    <div style="margin-top:30px;" class="card-right d-flex align-items-center">
                                        <h3 class='card-title' style="margin-right:15px;">Tổng:</h3>
                                        <!-- <p th:text="${numberOfBookings}"></p> -->
                                    </div>
                                </div>

                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas3" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/admin/transit/transit-today" style="text-decoration: none;" class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column" style="max-height:170px">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Trung chuyển hôm nay</h3>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas1" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="row mb-4">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class='card-heading p-1 pl-3'>Doanh số</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="pl-3">
                                    <!-- <h1 th:if="${currentMonthRevenue}==false">Tháng này chưa có doanh thu</h1>
                                        <h1 th:unless="${currentMonthRevenue}==false" class='mt-5'
                                            th:text="${#numbers.formatDecimal(currentMonthRevenue, 0, 'COMMA', 0, 'POINT') + 'đ'}"></h1>
                                        <p th:if="!${invalidPercentageOfSales}" class='text-xs'><span
                                                th:if="!${warnning}" class="text-green"><i data-feather="bar-chart"
                                                                                           width="15"></i>[[${sign}]] [[${percentageOfSales}]]%</span><span
                                                th:if="${warnning}" class="text-red"><i data-feather="bar-chart"
                                                                                        width="15"></i>[[${sign}]] [[${percentageOfSales}]] %</span>
                                            so với tháng trước</p> -->
                                    <div class="legends">
                                        <div class="legend d-flex flex-row align-items-center">
                                            <span class='text-xs'>Doanh thu tháng này</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="container">
                                    <div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="max-width:550px;margin:10px auto;">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Đặt vé</h4>
                        <div class="d-flex">
                            <i data-feather="download"></i>
                        </div>
                    </div>
                    <div class="container-fluid">

                        <form class="form-wrap" action="/admin/find-trip" method="post" id="tripForm">
                            <div class="form-group row">
                                <label class="col-form-label col-sm-3">Loại vé:</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="round-trip" id="one-way" value="false" checked>
                                        <label class="form-check-label" for="one-way">Một chiều</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="round-trip" id="round-trip" value="true">
                                        <label class="form-check-label" for="round-trip">Khứ hồi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-3">Điểm đi:</label>
                                <div class="col-sm-9">
                                    <select class="form-control" required id="startCity" name="startCity">
                                        <option value=""></option>
                                        <!-- <option th:each="city : ${cities}" th:value="${city.id}"
                                                    th:text="${city.name}"></option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-3">Điểm đến:</label>
                                <div class="col-sm-9">
                                    <select class="form-control" required id="endCity" name="endCity">
                                        <option value=""></option>
                                        <!-- <option th:each="city : ${cities}" th:value="${city.id}"
                                                    th:text="${city.name}"></option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-3">Ngày đi:</label>
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
                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary text-uppercase">Tìm chuyến xe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <script src="{{asset('static/js/home_form.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script th:inline="javascript">
        $(function() {
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Lợi nhuận theo tháng'
                },
                xAxis: {
                    categories: 10,
                    crosshair: true
                },
                yAxis: {
                    min: 1000000,
                    max: 10000000,
                    title: {
                        text: 'Khoảng tiền [100k-10M]'
                    }

                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} vnd</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Biểu đồ',
                    data: "value"
                }]
            });
        });
    </script>
</div>
@endsection