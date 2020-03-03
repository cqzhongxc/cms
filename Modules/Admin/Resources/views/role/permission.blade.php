@extends('admin::layouts.master')
@section('nav')
    <div class="page-head">
        {{--<h2 class="page-head-title">权限配置</h2>--}}
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">权限管理</a></li>
                <li class="breadcrumb-item active"><a href="#">[{{$role['title']}}]权限设置</a></li>
            </ol>
        </nav>
    </div>
@endsection
@section('content')
    <form action="/admin/role/permission/{{$role['id']}}" method="post">
        @csrf
        <div class="card card-border-color card-border-color-primary">
            @foreach($modules as $module)
                @foreach($module['rules'] as $rule)
                    <div class="card-header">{{$rule['group']}}</div>
                    <div class="card-body">
                        <div class="form-check mt-1">
                            @foreach($rule['permissions'] as $permission)
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="name[]" class="custom-control-input" value="{{$permission['name']}}"
                                           {{$role->hasPermissionTo($permission['name']) ? 'checked=""' : ''}}
                                           type="checkbox" id="check-permission-{{$permission['name']}}">
                                    <label class="custom-control-label" for="check-permission-{{$permission['name']}}">
                                        {{$permission['title']}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endforeach
            <div class="form-group row text-left ml-1 pb-5">
                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                    <button class="btn btn-space btn-primary" type="submit">保存</button>
                    <button class="btn btn-space btn-secondary">取消</button>
                </div>
            </div>
        </div>
    </form>
@endsection
