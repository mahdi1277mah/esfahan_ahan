@extends('layouts.admin')

@section('js')
    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('body',{
            filebrowserUploadMethod : 'form',
            filebrowserUploadUrl: '/admin/panel/upload-image',
            filebrowserImageUploadUrl: '/admin/panel/upload-image',
        });
    </script>
@endsection
@section('content')

    <style>
        th {
            text-align: center;
        }

        .form-group .form-control {
            width: 100%;
            box-shadow: none;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;
            padding-left: 0;
            border: 1px solid;
        }
        .dropdown-toggle {
            display: none;
        }

        .bootstrap-select {
            width: 100%;
        }

        select[multiple], select[size] {
            width: -webkit-fill-available;
        }
        button  input, select, a {
            outline: none !important;
            width: 100%;
        }
    </style>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        افزودن  مطلب جدید
                    </h2>
                    <div class="btn-group-sm" style="float: left">
                        @can('show_course')
                            <a href="{{route('admin.courses.index')}}" class="btn btn-primary">مدیریت  مطلب ها</a>
                        @endcan
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <form action="{{route('admin.courses.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @include('errors.errors')
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="title" class="control-label">عنوان  مطلب</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                           placeholder="لطفا عنوان  مطلب را وارد کنید" value="{{old('title')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="e_name" class="control-label">نام لاتین  مطلب</label>
                                    <input type="text" class="form-control" name="e_name" id="e_name"
                                           placeholder="لطفا نام لاتین  مطلب را وارد کنید" value="{{old('e_name')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="slug" class="control-label">لینک  مطلب</label>
                                    <input type="text" class="form-control" name="slug" id="slug"
                                           placeholder="لطفا لینک  مطلب را وارد کنید" value="{{old('slug')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="user_id" class="control-label">صاحب  مطلب</label>
                                    <select name="user_id" id="user_id">
                                        @foreach(\App\Models\User::latest()->get() as $user)
                                            <option value="{{$user->id}}">{{$user->id}} - {{$user->name}} - {{$user->username}} - {{$user->email}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="body" class="control-label">توضیحات  مطلب</label>
                                    <textarea rows="5" type="text" class="form-control" name="body" id="body"
                                              placeholder="توضیحات  مطلب" >{{old('body')}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="images" class="control-label">تصویر  مطلب</label>
                                    <input type="file" class="form-control" name="images" id="images"
                                           placeholder="تصویر  مطلب" value="{{old('images')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="price" class="control-label">قیمت  مطلب</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                           placeholder="قیمت  مطلب" value="{{old('price')}}">
                                </div>
                                <div class="col-sm-3">
                                    <label for="discount" class="control-label">قیمت  مطلب پس از تخفیف</label>
                                    <input type="text" class="form-control" name="discount" id="discount"
                                           placeholder="قیمت  مطلب" value="{{old('discount')}}">
                                </div>
                                <div class="col-sm-3">
                                    <label for="time" class="control-label">زمان ایجاد  مطلب</label>
                                    <input type="text" class="form-control" name="time" id="time"
                                           placeholder="زمان  مطلب" value="{{old('time')}}">
                                </div>
                                <div class="col-sm-3">
                                    <label for="type" class="control-label">نوع  مطلب</label>
                                    <select name="type" id="type">
                                        <option value="vip">مخصوص اعضای ویژه</option>
                                        <option value="cash">نقدی</option>
                                        <option value="free">رایگان</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="tags" class="control-label">تگ های  مطلب</label>
                                    <input type="text" class="form-control" name="tags" id="tags"
                                           placeholder="تگ  مطلب" value="{{old('tags')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">ایجاد  مطلب جدید</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>



@endsection
