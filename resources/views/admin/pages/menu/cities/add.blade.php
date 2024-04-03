@extends('admin.adminlayout')
@section('content')
<div class="container-fluid">
    <div class="text-center"><h2>Thêm Thành Phố</h2></div>

    <form action="/eshop/public/admin/cities/store" method="post" enctype="multipart/form-data"
          style="max-width: 500px; margin: 0 auto;">
          @csrf
          @include('alert')
      <input type="hidden">
      <div class="border border-secondary rounded p-3">
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Tên thành phố:</label>
          <div class="col-sm-8">
            <input type="text" name="name" class="form-control" required maxlength="25"
                >
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Hình ảnh:</label>
          <div class="col-sm-8">
            <input type="file" name="image_path" id="image_path" accept=".png, .jpg, .jpeg" class="form-control"/>
            <img style="max-width: 100%; max-height: 200px;margin-top: 10px" id="thumbnail" alt=" image-preview"/>
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
    $(document).ready(function () {
      $('#image_path').change(function () {
        showImageThumbnail(this);
      })
    });

    function showImageThumbnail(inputFile) {
      file = inputFile.files[0];
      
      reader = new FileReader();

      reader.onload = function (e) {
        $('#thumbnail').attr('src', e.target.result);
      };

      reader.readAsDataURL(file);

    }

    function cancelForm() {
      window.location = "/eshop/public/admin/cities";
    }
  </script>
@endsection