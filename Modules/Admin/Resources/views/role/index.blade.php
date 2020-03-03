@extends('admin::layouts.master')
@section('nav')
    <div class="page-head">
        {{--<h2 class="page-head-title">权限配置</h2>--}}
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">系统管理</a></li>
                <li class="breadcrumb-item active"><a href="#">权限配置</a></li>
            </ol>
        </nav>
    </div>
@endsection
@section('content')
    <div class="card card-table">
        <div class="card-header">
            <div>
                <button class="btn btn-space btn-primary">角色列表</button>
                <button class="btn btn-space btn-primary" data-toggle="modal" data-target="#addRole" type="button">
                    添加角色
                </button>
                @component('components.modal', ['id'=>'addRole', 'title'=>'添加角色', 'method'=>'','url'=>'/admin/role'])
                    <div class="form-group">
                        <label>角色名称</label>
                        <input class="form-control" type="text" placeholder="请输入中文角色名称" name="title"
                               value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label>角色标识</label>
                        <input class="form-control" type="text" placeholder="标识必须为英文字母" name="name"
                               value="{{old('name')}}">
                    </div>
                @endcomponent
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th style="width:10%;">编号</th>
                    <th style="width:30%;">角色名称</th>
                    <th class="number">角色标识</th>
                    <th class="number">创建时间</th>
                    <th class="actions">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role['id']}}</td>
                        <td>
                            <a href="">{{$role['title']}}</a>
                        </td>
                        <td class="number">{{$role['name']}}</td>
                        <td class="number">{{$role['created_at']}}</td>
                        <td class="actions">
                            <div class="btn-group btn-space">
                                <button class="btn btn-secondary" type="button">删除</button>
                                <a href="/admin/role/permission/{{$role['id']}}" class="btn btn-secondary" type="button">权限</a>
                                <button class="btn btn-secondary" data-toggle="modal" data-target="#editRole{{$role['id']}}" type="button">编辑</button>
                                @component('components.modal', ['id'=>"editRole{$role['id']}", 'title'=>"编辑{$role['title']}", 'method'=>'PUT','url'=>"/admin/role/{$role['id']}"])
                                    <div class="form-group text-left">
                                        <label>角色名称</label>
                                        <input class="form-control" type="text" placeholder="请输入中文角色名称" name="title"
                                               value="{{$role['title']}}">
                                    </div>
                                    <div class="form-group text-left">
                                        <label>角色标识</label>
                                        <input class="form-control" type="text" placeholder="标识必须为英文字母" name="name"
                                               value="{{$role['name']}}">
                                    </div>
                                @endcomponent
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
