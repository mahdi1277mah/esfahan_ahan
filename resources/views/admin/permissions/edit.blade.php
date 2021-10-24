@extends('layouts.admin')

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
    </style>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ویرایش دسترسی
                    </h2>
                    <div class="btn-group-sm" style="float: left">
                        <a href="{{route('admin.permissions.index')}}" class="btn btn-primary">مدیریت دسترسی ها</a>

                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <form action="{{route('admin.permissions.update',['permission'=>$permission->id])}}" method="post">
                            {{csrf_field()}}
                            @method('PATCH')
                            @include('errors.errors')

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="name" class="control-label">نام دسترسی</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="لطفا نام دسترسی را وارد کنید" value="{{$permission->name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="label" class="control-label">توضیحات دسترسی</label>
                                    <input type="text" class="form-control" name="label" id="label"
                                           placeholder="لطفا توضیح دسترسی را وارد کنید" value="{{$permission->label}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">آپدیت دسترسی</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>



@endsection
