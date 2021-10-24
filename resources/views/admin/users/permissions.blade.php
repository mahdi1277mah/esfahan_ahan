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
        .dropdown-toggle
        {
            display: none;
        }
        .bootstrap-select
        {
            width: inherit;
        }
        select[multiple],select[size]
        {
            width: -webkit-fill-available;
        }

    </style>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        افزودن دسترسی
                    </h2>
                    <div class="btn-group-sm" style="float: left">
                        <a href="{{route('admin.users.index')}}" class="btn btn-primary">مدیریت کاربران</a>

                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <form action="{{route('admin.users.permissions.store',$user->id)}}" method="post">
                            {{csrf_field()}}
                            @include('errors.errors')

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="roles" class="control-label">نقش ها</label>
                                    <select name="roles[]" id="roles" class="" multiple>
                                        @foreach(\App\Models\Role::all() as $role)
                                            <option value="{{$role->id}}" {{ in_array($role->id , $user->roles->pluck('id')->toArray()) ? 'selected': ''}}>{{$role->name}} - {{$role->label}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="permissions" class="control-label">دسترسی ها</label>
                                    <select name="permissions[]" id="permissions" class="" multiple>
                                        @foreach(\App\Models\Permission::all() as $permission)
                                            <option value="{{$permission->id}}" {{ in_array($permission->id , $user->permissions->pluck('id')->toArray()) ? 'selected': ''}}>{{$permission->name}} - {{$permission->label}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn btn-success">ثبت نقش و دسترسی</button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>



@endsection
