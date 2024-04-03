@extends('admin.adminlayout')
@section('content')

<div class="container-fluid text-center">
        <input type="text" class="input-group-text" placeholder="Tìm kiếm" onfocus="this.placeholder = ''"
               onblur="this.placeholder = 'Tìm kiếm'" id="q" size="50">
        <hr/>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Quản Lý Thành Phố</h4>
                <div class="d-flex ">
                    <i data-feather="download"></i>
                </div>
            </div>
            <div class="card-body px-0 pb-0">
                <div class="table-responsive">
                    <table class='table mb-0' id="table1">
                        <thead>
                        <tr>
                            <th>
                                <a>ID</a>
                            </th>
                            <th>
                                <a>Tên
                                    thành phố</a>
                            </th>
                            <th>Image</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            {!!  \App\Helpers\Helper::cities($cities)   !!}
                            <td>
             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a href="/eshop/public/admin/cities/create" class="btn btn-info" style="float: right; margin: 10px">Thêm thành phố</a>

    </div>
   
@endsection