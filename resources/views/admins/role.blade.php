@extends('admins.layout')

@section('content')

    <div ng-app="RoleApp">
        <div ui-view></div>
    </div>

@stop

@section('javascript')

    <script type="text/javascript" src="/app/admin/role/app.js"></script>
    <script type="text/javascript" src="/app/admin/role/services.js"></script>
    <script type="text/javascript" src="/app/admin/role/controllers.js"></script>

@stop
