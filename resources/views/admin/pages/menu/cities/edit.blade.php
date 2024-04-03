@extends('admin.adminlayout')
@section('content')
<div class="container-fluid">
    <div class="text-center">
        <h2>Chỉnh sửa {{$city->name}}</h2>
    </div>

    <form action="#" method="post" enctype="multipart/form-data" style="max-width: 500px; margin: 0 auto;">
        @csrf
        @method('PUT')
        @include('alert')
        <input type="hidden">
        <div class="border border-secondary rounded p-3">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Tên thành phố:</label>
                <div class="col-sm-8">
                    <input type="text" name="name" value="{{$city->name}}" class="form-control" required maxlength="25">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Hình ảnh:</label>
                <div class="col-sm-8">
                    <input type="file" name="image_path" id="imageFile" accept=".png, .jpg, .jpeg" class="form-control" />
                    <?php
                  
                        echo '<img style="max-width: 100%; max-height: 200px;margin-top: 10px" id="thumbnail" src ="/eshop/public/uploads/cities/'. $city->id . '/'. $city->image_path . '" alt="city imgage"/>';
                    ?>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary m-2">Lưu</button>
                <button type="button" class="btn btn-secondary m-2" onclick="cancelForm()">Hủy</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#imageFile').change(function() {
            showImageThumbnail(this);
        })
    });

    function showImageThumbnail(inputFile) {
        file = inputFile.files[0];
        reader = new FileReader();

        reader.onload = function(e) {
            $('#thumbnail').attr('src', e.target.result);
        };

        reader.readAsDataURL(file);

    }

    function cancelForm() {
        window.location = "/eshop/public/admin/cities";
    }
</script>
@endsection