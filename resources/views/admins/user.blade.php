@extends('admins.layout')

@section('content')

    <div ng-app="UserApp">
        <div ui-view></div>
    </div>

@stop

@section('javascript')
    <script type="text/javascript" src="/app/admin/user/app.js"></script>
    <script type="text/javascript" src="/app/admin/user/services.js"></script>
    <script type="text/javascript" src="/app/admin/user/controllers.js"></script>
    <script type="text/javascript" src="/app/admin/role/services.js"></script>

@stop
