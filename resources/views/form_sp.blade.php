<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                    <a href="{{route('admin')}}">Về trang admin</a>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('them_sp_moi') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <p>Tên sản phẩm</p>
                    <input type="text" name="name_sp">
                    <br>
                    <p>Loại sản phẩm</p>
                    <select name="loai_sp">
                        <option value="theutay">
                            Thêu tay
                        </option>
                        <option value="theumay">
                            Thêu máy
                        </option>
                        <option value="dinhda">
                            Đính đá
                        </option>
                    </select>
                    <br>
                    <p>Gía sản phẩm</p>
                    <input type="number" name="price_sp">
                    <br>
                    <p>Số lượng sản phẩm</p>
                    <input type="number" name="amount_sp">
                    <br>
                    <p>Mô tả</p>
                    <input type="text" name="note_sp">
                    <p>Ảnh hiển thị</p>
                    <input  name="image" type="file">
                    <br>
                    <p>Ảnh sản phẩm</p>
                    <input multiple="multiple" name="photos[]" type="file">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>

            </form>
        </div>
    </div>
</div>
</body>



</html>
