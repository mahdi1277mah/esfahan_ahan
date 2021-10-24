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

        .dropdown-toggle {
            display: none;
        }

        .bootstrap-select {
            width: 100%;
        }

        button input, select, a {
            outline: none !important;
            width: 100%;
        }
    </style>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ویرایش کاربر
                    </h2>
                    <div class="btn-group-sm" style="float: left">
                        <a href="{{route('admin.users.index')}}" class="btn btn-primary">مدیریت کاربران</a>

                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <form action="{{route('admin.users.update',['user'=>$user->id])}}" method="post">
                            {{csrf_field()}}
                            @method('PATCH')
                            @include('errors.errors')

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="name" class="control-label">نام و نام خانوادگی</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="لطفا نام و نام خانوادگی را وارد کنید" value="{{$user->name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="email" class="control-label">ایمیل</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="لطفا ایمیل خود را وارد کنید" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="form-group">

                                @can('create_super_user')


                                <div class="col-sm-4">
                                    <label for="is_superuser" class="control-label">مدیرکل</label>
                                    <select name="is_superuser" id="is_superuser">
                                        <option value="0"> -----</option>
                                        <option value="1"
                                                @if($user->is_superuser == '1')
                                                selected
                                            @endif
                                        > مدیرکل سایت
                                        </option>
                                    </select>
                                </div>

                                @endcan

                                <div class="col-sm-4">
                                    <label for="is_staff" class="control-label">همکار</label>
                                    <select name="is_staff" id="is_staff">
                                        <option value="0"> -----</option>
                                        <option value="1"
                                                @if($user->is_staff == '1')
                                                selected
                                            @endif
                                        > همکار سایت
                                        </option>
                                    </select>
                                </div>


                                <div class="col-sm-4">
                                    <label for="vendor" class="control-label">مدرس</label>
                                    <select name="vendor" id="vendor">
                                        <option value="0"> -----</option>
                                        <option value="1"
                                                @if($user->vendor == '1')
                                                selected
                                            @endif
                                        > مدرس سایت
                                        </option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="password" class="control-label">پسورد</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                           placeholder="لطفا پسورد خود را وارد کنید" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">آپدیت کاربر</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>



@endsection
