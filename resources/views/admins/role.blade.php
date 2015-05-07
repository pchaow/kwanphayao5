@extends('admins.layout')

@section('content')

    <div ng-app="RoleAdmin">
        <div ui-view></div>
    </div>

@stop

@section('javascript')
    <script type="text/javascript" src="/app/admin/RoleService.js"></script>
    <script type="text/javascript" src="/app/admin/role/app.js"></script>


@stop
