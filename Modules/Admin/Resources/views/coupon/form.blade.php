<form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên mã giảm giá: </label>
        <input type="text" class="form-control" placeholder="Tên mã giảm giá" value="{{ old('name',isset($coupon->cp_name) ? $coupon->cp_name : '') }}" name="name">
        @if($errors->has('name'))
            <span class="error-text">
                {{$errors->first('name')}}
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Mã giảm giá: </label>
        <input type="text" class="form-control" placeholder="Mã giảm giá" value="{{ old('code',isset($coupon->cp_code) ? $coupon->cp_code : '') }}" name="code">
        @if($errors->has('code'))
            <span class="error-text">
                {{$errors->first('code')}}
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Số lượng mã:</label>
        <input type="text" class="form-control" placeholder="Số lượng mã" value="{{ old('quantity',isset($coupon->cp_qty) ? $coupon->cp_qty : '') }}" name="quantity">
        @if($errors->has('quantity'))
            <span class="error-text">
                {{$errors->first('quantity')}}
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Tính năng mã: </label>
        <select name="function" class="form-control input-sm">
            <option>------Chọn------</option>
            <option value="0">Giảm theo phần trăm</option>
            <option value="1">Giảm theo tiền</option>
        </select>
        {{--<input type="text" class="form-control" placeholder="Tính năng mã" value="{{ old('c_description_seo',isset($category->c_description_seo) ? $category->c_description_seo  : '') }}" name="c_description_seo">--}}
    </div>
    <div class="form-group">
        <label for="value">Nhập số % hoặc tiền giảm:</label>
        <input type="text" class="form-control" placeholder="Nhập số % hoặc tiền giảm" value="{{ old('value',isset($coupon->cp_value) ? $coupon->cp_value : '') }}" name="value">
        @if($errors->has('value'))
            <span class="error-text">
                {{$errors->first('value')}}
            </span>
        @endif
    </div>
    <button type="submit" class="btn btn-success">Lưu thông tin</button>
</form>

