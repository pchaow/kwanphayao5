@extends('admins.layout')

@section('content')

    <div ng-app="CategoryApp">

        <div ui-view></div>

    </div>

@stop

@section('javascript')

    <script type="text/javascript" src="/app/admin/category/app.js"></script>
    <script type="text/javascript" src="/app/admin/category/services.js"></script>
    <script type="text/javascript" src="/app/admin/category/controllers.js"></script>
    <script type="text/javascript" src="/app/admin/mainCategory/services.js"></script>
@stop

