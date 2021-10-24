@extends('layouts.admin')
@section('head')

@endsection
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
                        ویرایش  مطلب
                    </h2>
                    <div class="btn-group-sm" style="float: left">
                        @can('show_teacher')
                        <a href="{{route('admin.teachers.index')}}" class="btn btn-primary">مدیریت  مطلب ها</a>
                        @endcan
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <form action="{{route('admin.courses.update',['course'=>$course->id])}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            {{ method_field('PATCH') }}
                            @include('errors.errors')

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="title" class="control-label">عنوان  مطلب</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                           placeholder="لطفا عنوان  مطلب را وارد کنید" value="{{$course->title}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="slug" class="control-label">لینک  مطلب</label>
                                    <input type="text" class="form-control" name="slug" id="slug"
                                           placeholder="لطفا لینک  مطلب را وارد کنید" value="{{$course->slug}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="e_name" class="control-label">نام لاتین  مطلب</label>
                                    <input type="text" class="form-control" name="e_name" id="e_name"
                                           placeholder="لطفا نام لاتین  مطلب را وارد کنید" value="{{$course->e_name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="user_id" class="control-label">صاحب  مطلب</label>
                                    <select name="user_id" id="user_id">
                                        @foreach(\App\Models\User::latest()->get() as $user)
                                            <option value="{{$user->id}}" {{ in_array($user->id ,$course->user()->pluck('id')->toArray()) ? 'selected': ''}}>{{$user->id}} - {{$user->name}} - {{$user->username}} - {{$user->email}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="body" class="control-label">توضیحات  مطلب</label>
                                    <textarea rows="5" type="text" class="form-control" name="body" id="body"
                                              placeholder="توضیحات  مطلب" >{{$course->body}}</textarea>
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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                            <div class="row">
                                                @foreach($course->images['images'] as $key => $image)
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="thumbnail">
                                                            <a style="" href="{{url($image)}}" target="_blank"><img style="width: 100%!important;object-fit: cover;" src="{{url($image)}}"></a>
                                                            <div class="caption">
                                                                <h3 style="text-align: center">سایز تصویر: {{$key}} پیکسل</h3>

                                                                <div class="form-check form-check-inline" style="text-align: center">
                                                                        <input type="radio" style="text-align: center;z-index: 3; left: auto; margin: 5px 7px 0;" class="form-check-label" for="imagesThumb" name="imagesThumb" value="{{$image}}" {{$course->images['thumb'] == $image ? 'checked' : ''}}>
                                                                        <label class="form-check-label" for="imagesThumb" value="{{url($image)}}" {{$course->images['thumb'] ==$image ? 'checked' : ''}}></label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="price" class="control-label">قیمت  مطلب</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                           placeholder="قیمت  مطلب" value="{{$course->price}}">
                                </div>
                                <div class="col-sm-3">
                                    <label for="discount" class="control-label"> قیمت  مطلب پس از تخفیف</label>
                                    <input type="text" class="form-control" name="discount" id="discount"
                                           placeholder="قیمت  مطلب" value="{{$course->discount}}">
                                </div>
                                <div class="col-sm-3">
                                    <label for="time" class="control-label">زمان ایجاد  مطلب</label>
                                    <input type="text" class="form-control" name="time" id="time"
                                           placeholder="زمان  مطلب" value="{{$course->time}}">
                                </div>
                                <div class="col-sm-3">
                                    <label for="type" class="control-label">نوع  مطلب</label>
                                    <select name="type" id="type">
                                        <option value="vip" {{$course->type == 'vip' ? 'selected': ''}}>مخصوص اعضای ویژه</option>
                                        <option value="cash" {{$course->type == 'cash' ? 'selected': ''}}>نقدی</option>
                                        <option value="free" {{$course->type == 'free' ? 'selected': ''}}>رایگان</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="tags" class="control-label">تگ های  مطلب</label>
                                    <input type="text" class="form-control" name="tags" id="tags"
                                           placeholder="تگ  مطلب" value="{{$course->tags}}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">آپدیت  مطلب</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>



@endsection
