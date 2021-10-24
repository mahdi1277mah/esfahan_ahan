@extends('layouts.admin')

@section('js')


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
            width: inherit;
        }



    </style>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ایجاد نقش کاربری جدید
                    </h2>
                    <div class="btn-group-sm" style="float: left">
                        <a href="{{route('admin.roles.index')}}" class="btn btn-primary">مدیریت نقش های کاربری</a>

                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <form action="{{route('admin.roles.store')}}" method="post">
                            {{csrf_field()}}
                            @include('errors.errors')

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="name" class="control-label">نام نقش</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="لطفا نام نقش را وارد کنید" value="{{old('name')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="label" class="control-label">توضیح نقش کاربری</label>
                                    <input type="text" class="form-control" name="label" id="label"
                                           placeholder="لطفا توضیح نقش را وارد کنید" value="{{old('label')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="permissions" class="control-label">دسترسی ها</label>
                                    <select name="permissions[]" id="permissions" class="" multiple>
                                        @foreach(\App\Models\Permission::all() as $permission)
                                            <option value="{{$permission->id}}">{{$permission->name}}
                                                - {{$permission->label}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn btn-success">ایجاد نقش کاربری جدید</button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>



@endsection
